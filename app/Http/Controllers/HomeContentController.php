<?php

namespace App\Http\Controllers;


use App\Models\HomeContent;
use App\Models\PanelThreeContent;
use App\Models\PanelTwoContent;
use App\Models\SubMenu;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Carbon\Carbon;
use Excel;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Role;


class HomeContentController extends Controller
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
        $query = SubMenu::query();
        $query->where('link', 'LIKE', '%page%');
        //$query = $query->where('menu_id',$id);


        // dd($query);

        // Apply search filter if provided
        if (!empty($searchValue)) {
            $query->where('title', 'like', '%' . $searchValue . '%');
        }

        // Get total records and filtered records count
        $totalRecords = $query->count();
        $totalRecordswithFilter = $query->count();

        // Fetch records with pagination and ordering
        $records = $query->when(!empty($columnName), function ($query) use ($columnName, $columnSortOrder) {
            return $query->orderBy($columnName, $columnSortOrder);
        })
            ->skip($start)
            ->take($rowperpage)
            ->get();

        // Build response data
        $data_arr = [];
        $i = 1;
        foreach ($records as $record) {
            $data_arr[] = [
                'menu' => $record->title,
                "link" => $record->link_type == 'link' ? $record->link : $record->slug,
                "edit" => '<div class="d-flex">
                    <a class="btn btn-primary m-1" href="' . route('dynamic-pages.create', $record->id) . '">Update Content</a>
                   
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
            $subMenu = SubMenu::find($request->menu_id);
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

    public function panel_one(Request $request)
    {
        $data = HomeContent::first();
        return view('admin.homecontent.panel_one_create',compact('data'));
    }

    public function panelOneStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'panel_one_title' => 'required',
        'panel_one_bgimage' => 'nullable|max:2048',
       
             
    ]);
  
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $data = $request->all();
    $home = HomeContent::first();
   
if ($request->hasfile('panel_one_bgimage')) {

    $images = $request->panel_one_bgimage;
    $img = time() . rand(100, 999) . '.' . $images->extension();

    $images->move(public_path('/homecontent'), $img);

    $data['image'] = $img;

}else{
    $data['image'] = @$home->panel_one_bgimage;
}

        $home = HomeContent::first();
        if($home == ''){

            $home=   HomeContent::create([
            'panel_one_title' => @$request->panel_one_title? $request->panel_one_title:'']);
        }
        $home->panel_one_title = @$request->panel_one_title;
        $home->panel_one_subtitle = @$request->panel_one_subtitle;
        $home->panel_one_link = @$request->panel_one_link;
        $home->panel_one_link_label = @$request->panel_one_link_label;
        $home->panel_one_bgimage = $data['image']??'';
        $home->created_by = auth()->user()->id;
        $home->save();
     
        return redirect()->back()->with('status','Panel One Updated Successfully.');
    }
    public function panel_two(Request $request)
    {
        $data = HomeContent::first();
        $contents = PanelTwoContent::where('deleted_at',null)->get();
        return view('admin.homecontent.panel_two_create',compact('data','contents'));
    }

    public function panelTwoStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'panel_two_description' => 'required',
        'panel_two_image' => 'nullable|max:2048',
       
             
    ]);
  
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $data = $request->all();
    $home = HomeContent::first();
  // dd($request);
if ($request->hasfile('panel_two_image')) {

    $images = $request->panel_two_image;
    $img = time() . rand(100, 999) . '.' . $images->extension();

    $images->move(public_path('/homecontent/panel_two'), $img);

    $data['image'] = $img;

}else{
    $data['image'] = @$home->panel_two_image;
}

        $home = HomeContent::first();
        if($home == ''){

            $home=   HomeContent::create([
            'panel_two_description' => @$request->panel_two_description? $request->panel_two_description:'']);
        }
        $home->panel_two_description = @$request->panel_two_description;
        $home->panel_two_image = $data['image']??'';
        $home->created_by = auth()->user()->id;
        $home->save();

        $title=$request->input('title', []);
        $content=$request->input('content', []);
       // dd(count($center_name));

       PanelTwoContent::where('panel_id',$home->id)->delete();
     
        for ($p=0; $p < count($title); $p++) {

                    if (!empty($title[$p]) ) {

                            $code=new PanelTwoContent();
                            $code->panel_id = $home->id;
                            $code->title = $title[$p];
                            $code->content = $content[$p];
                            $code->save();
                    }

            }
     
        return redirect()->back()->with('status','Panel Two Updated Successfully.');
    }


    public function panel_three(Request $request)
    {
        $data = HomeContent::first();
        $contents = PanelThreeContent::where('deleted_at',null)->get();
        return view('admin.homecontent.panel_three_create',compact('data','contents'));
    }

    public function panelThreeStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'panel_three_title' => 'required',
        'panel_three_subtitle' => 'required',
       
             
    ]);
  
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $data = $request->all();
   

        $home = HomeContent::first();
        if($home == ''){

            $home=   HomeContent::create([
            'panel_three_title' => @$request->panel_three_title? $request->panel_three_title:'']);
        }
        $home->panel_three_title = @$request->panel_three_title;
        $home->panel_three_subtitle = @$request->panel_three_subtitle;
        $home->created_by = auth()->user()->id;
        $home->save();

        $title=$request->input('title', []);
        $content=$request->input('content', []);
       // dd(count($center_name));

       PanelThreeContent::where('panel_id',$home->id)->delete();
     
        for ($p=0; $p < count($title); $p++) {

                    if (!empty($title[$p]) ) {

                            $code=new PanelThreeContent();
                            $code->panel_id = $home->id;
                            $code->title = $title[$p];
                            $code->content = $content[$p];
                            $code->save();
                    }

            }
     
        return redirect()->back()->with('status','Panel Three Updated Successfully.');
    }

    public function panel_four(Request $request)
    {
        $data = HomeContent::first();
        return view('admin.homecontent.panel_four_create',compact('data'));
    }

    public function panelFourStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'panel_four_title' => 'required',
        'panel_four_image' => 'nullable|max:2048',
       
             
    ]);
  
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $data = $request->all();
    $home = HomeContent::first();
   
if ($request->hasfile('panel_four_image')) {

    $images = $request->panel_four_image;
    $img = time() . rand(100, 999) . '.' . $images->extension();

    $images->move(public_path('/homecontent/panel_four'), $img);

    $data['image'] = $img;

}else{
    $data['image'] = @$home->panel_four_image;
}

        $home = HomeContent::first();
        if($home == ''){

            $home=   HomeContent::create([
            'panel_four_title' => @$request->panel_four_title? $request->panel_four_title:'']);
        }
        $home->panel_four_title = @$request->panel_four_title;
        $home->panel_four_description = @$request->panel_four_description;
        $home->panel_four_image = $data['image']??'';
        $home->created_by = auth()->user()->id;
        $home->save();
     
        return redirect()->back()->with('status','Panel Four Updated Successfully.');
    }

    public function panel_five(Request $request)
    {
        $data = HomeContent::first();
        return view('admin.homecontent.panel_five_create',compact('data'));
    }

    public function panelFiveStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'panel_five_title' => 'required',
        'panel_five_video' => 'nullable|max:2048',
       
             
    ]);
  
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $data = $request->all();
    $home = HomeContent::first();
   
if ($request->hasfile('panel_five_video')) {

    $vid = $request->panel_five_video;
    $video = time() . rand(100, 999) . '.' . $vid->extension();

    $vid->move(public_path('/homecontent/panel_five'), $video);

    $data['video'] = $video;

}else{
    $data['video'] = @$home->panel_five_video;
}

        $home = HomeContent::first();
        if($home == ''){

            $home=   HomeContent::create([
            'panel_five_title' => @$request->panel_five_title? $request->panel_five_title:'']);
        }
        $home->panel_five_title = @$request->panel_five_title;
        $home->panel_five_description = @$request->panel_five_description;
        $home->panel_five_video = $data['video']??'';
        $home->created_by = auth()->user()->id;
        $home->save();
     
        return redirect()->back()->with('status','Panel Five Updated Successfully.');
    }

    public function panel_six(Request $request)
    {
        $data = HomeContent::first();
        return view('admin.homecontent.panel_six_create',compact('data'));
    }

    public function panelSixStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'panel_six_title' => 'required',
        'panel_six_image' => 'nullable|max:2048',
       
             
    ]);
  
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $data = $request->all();
    $home = HomeContent::first();
   
if ($request->hasfile('panel_six_image')) {

    $images = $request->panel_six_image;
    $img = time() . rand(100, 999) . '.' . $images->extension();

    $images->move(public_path('/homecontent/panel_six'), $img);

    $data['image'] = $img;

}else{
    $data['image'] = @$home->panel_six_image;
}

        $home = HomeContent::first();
        if($home == ''){

            $home=   HomeContent::create([
            'panel_six_title' => @$request->panel_six_title? $request->panel_six_title:'']);
        }
        $home->panel_six_title = @$request->panel_six_title;
        $home->panel_six_description = @$request->panel_six_description;
        $home->panel_six_image = $data['image']??'';
        $home->created_by = auth()->user()->id;
        $home->save();
     
        return redirect()->back()->with('status','Panel Six Updated Successfully.');
    }

    public function panel_seven(Request $request)
    {
        $data = HomeContent::first();
        return view('admin.homecontent.panel_seven_create',compact('data'));
    }

    public function panelSevenStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'panel_seven_title' => 'required',
        'panel_seven_image' => 'nullable|max:2048',
       
             
    ]);
  
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $data = $request->all();
    $home = HomeContent::first();
   
if ($request->hasfile('panel_seven_image')) {

    $images = $request->panel_seven_image;
    $img = time() . rand(100, 999) . '.' . $images->extension();

    $images->move(public_path('/homecontent/panel_seven'), $img);

    $data['image'] = $img;

}else{
    $data['image'] = @$home->panel_seven_image;
}

        $home = HomeContent::first();
        if($home == ''){

            $home=   HomeContent::create([
            'panel_seven_title' => @$request->panel_seven_title? $request->panel_seven_title:'']);
        }
        $home->panel_seven_title = @$request->panel_seven_title;
        $home->panel_seven_description = @$request->panel_seven_description;
        $home->panel_seven_image = $data['image']??'';
        $home->panel_seven_link = @$request->panel_seven_link;
        $home->panel_seven_link_label = @$request->panel_seven_link_label;
        $home->created_by = auth()->user()->id;
        $home->save();
     
        return redirect()->back()->with('status','Panel Seven Updated Successfully.');
    }


}
