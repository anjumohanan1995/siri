<?php

namespace App\Http\Controllers;


use App\Models\ContactUs;
use App\Models\DynamicPage;
use App\Models\SubMenu;
use App\Models\SubSubMenu;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Carbon\Carbon;
use Excel;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Role;


class DynamicPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        return view('admin.dynamic_pages.index');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDynamicMenus(Request $request)
    {


        // get id.
        $id = $request->id;

        
        // Get DataTables parameters
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");

        // Get DataTables order, columns, and search values
        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        // Initialize variables
        $columnIndex = null;
        $columnName = null;
        $columnSortOrder = 'asc';
        $searchValue = '';

        // Check $columnIndex_arr
        if (!empty($columnIndex_arr) && is_array($columnIndex_arr) && count($columnIndex_arr) > 0) {
            $columnIndex = $columnIndex_arr[0]['column'];
        }

        // Check $columnName_arr
        if (!empty($columnName_arr) && is_array($columnName_arr) && isset($columnIndex) && isset($columnName_arr[$columnIndex]['data'])) {
            $columnName = $columnName_arr[$columnIndex]['data'];
        }

        // Check $order_arr
        if (!empty($order_arr) && is_array($order_arr) && count($order_arr) > 0) {
            $columnSortOrder = $order_arr[0]['dir'];
        }

        // Check $search_arr
        if (isset($search_arr['value'])) {
            $searchValue = $search_arr['value'];
        }

        // Initialize the query
        $sub = SubMenu::where('link', 'LIKE', '%page%')->get();

        $subsub = SubSubMenu::where('link', 'LIKE', '%page%')->get();

    $records = $subsub->concat($sub);


        // dd($query);

        // Apply search filter if provided
        if (!empty($searchValue)) {
            $records->where('title', 'like', '%' . $searchValue . '%');
        }

        // Get total records and filtered records count
        $totalRecords = $records->count();
        $totalRecordswithFilter = $records->count();

        // Fetch records with pagination and ordering
     //   $records = $query->when(!empty($columnName), function ($query) use ($columnName, $columnSortOrder) {
        //    return $query->orderBy($columnName, $columnSortOrder);
     //   })
          //  ->skip($start)
          //  ->take($rowperpage)
          //  ->get();

        // Build response data
        $data_arr = [];
        $i = 1;
        foreach ($records as $record) {
            $data_arr[] = [
                'menu' => $record->title,
                "link" => $record->link_type == 'link' ? $record->link : $record->slug,
                "edit" => '<div class="d-flex">
                    <a class="btn btn-primary m-1" href="' . route('dynamic-pages.create', @$record->page_id) . '">Update Content</a>
                   
                </div>'
            ];
        }



        // dd($data_arr);

        // Prepare the response
        $response = [
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr,
        ];

        // Return the response as JSON
        return response()->json($response);
    }
    public function create($id)
    {
            $menu_id=$id;
            $data = DynamicPage::where('menu_id',$id)->first();
         return view('admin.dynamic_pages.create',compact('menu_id','data'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           $validate = Validator::make($request->all(),
            [
                'heading' => 'required',
                'title_one' => 'required',
             
            ]);
            if($validate->fails())
            {
                $messages = $validate->getMessageBag();
                return redirect()->back()->withErrors($validate);
            }

            $data = $request->all();
            $subMenu = SubMenu::where('page_id',$request->menu_id)->first();
          //  dd($request->menu_id);
            $subSubMenu = SubSubMenu::where('page_id',$request->menu_id)->first();
            if($subSubMenu)
            $slug = basename($subSubMenu['link']);
            else
            $slug = basename($subMenu['link']);
            $page = DynamicPage::where('menu_id',$request->menu_id)->first();


            if ($request->hasfile('image_one')) {

                $images = $request->image_one;
                $img = time() . rand(100, 999) . '.' . $images->extension();
            
                $images->move(public_path('/dynamic-pages'), $img);
            
                $data['image_one'] = $img;
            
            }else{
                $data['image_one'] = @$page->image_one;
            }
            if ($request->hasfile('image_two')) {

                $images = $request->image_two;
                $img = time() . rand(100, 999) . '.' . $images->extension();
            
                $images->move(public_path('/dynamic-pages'), $img);
            
                $data['image_two'] = $img;
            
            }else{
                $data['image_two'] = @$page->image_two;
            }

            if ($request->hasfile('image_three')) {

                $images = $request->image_three;
                $img = time() . rand(100, 999) . '.' . $images->extension();
            
                $images->move(public_path('/dynamic-pages'), $img);
            
                $data['image_three'] = $img;
            
            }else{
                $data['image_three'] = @$page->image_three;
            }

            if($page == ''){
    
                $page=   DynamicPage::create([
                'menu_id' => @$request->menu_id? $request->menu_id:'']);
            }
            $page->menu_id = @$request->menu_id;
            $page->slug = @$slug;
            $page->heading = @$request->heading;
            $page->title_one = @$request->title_one;
            $page->content_one = @$request->content_one;
            $page->image_one = $data['image_one']??'';
            $page->title_two = @$request->title_two;
            $page->content_two = @$request->content_two;
            $page->image_two = $data['image_two']??'';
            $page->title_three = @$request->title_three;
            $page->content_three = @$request->content_three;
            $page->image_three = $data['image_three']??'';
            $page->created_by = auth()->user()->id;
            $page->save();
          
           return redirect()->back()

           ->with('status','Content Updated Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
            $data=ContactUs::find($id);
            return view('admin.contactus.edit', compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(),
            [
                'title' => 'required',
                'content' => 'required',
            ]);
            if($validate->fails())
            {
                $messages = $validate->getMessageBag();
                return redirect()->back()->withErrors($validate);
            }


        $book=ContactUs::findOrFail($id);
        $data = $request->all();

        if ($request->hasfile('icon')) {

            $images = $request->icon;
            $img = time() . rand(100, 999) . '.' . $images->extension();
        
            $images->move(public_path('/contact-us'), $img);
        
            $data['icon'] = $img;
        
        }else{
            $data['icon'] = $book->icon;
        }

    
        $book->update([
          'title' => $data['title'],
            'content' => $data['content'],
            'icon' => $data['icon'],
        ]);

        //$book->update($request->all());

       return redirect()->route('contact-us.index')
                       ->with('status','Contact updated successfully');
        //  return response()->json([
        //                 'success' => 'User updated successfully.'
        //             ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= ContactUs::find($id)->delete();

        return response()->json([
                        'success' => 'Contact Deleted successfully.'
                    ]);

    }
}
