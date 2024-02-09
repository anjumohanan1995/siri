<?php

namespace App\Http\Controllers;


use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Carbon\Carbon;
use Excel;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Role;


class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            return view('admin.contactus.index');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getContactUs(Request $request){
       

         ## Read value
         $draw = $request->get('draw');
         $start = $request->get("start");
         $rowperpage = $request->get("length"); // Rows display per page

         $columnIndex_arr = $request->get('order');
         $columnName_arr = $request->get('columns');
         $order_arr = $request->get('order');
         $search_arr = $request->get('search');

         $columnIndex = $columnIndex_arr[0]['column']; // Column index
         $columnName = $columnName_arr[$columnIndex]['data']; // Column name
         $columnSortOrder = $order_arr[0]['dir']; // asc or desc
         $searchValue = $search_arr['value']; // Search value



             // Total records
             $totalRecord = ContactUs::where('deleted_at',null);
                $totalRecords = $totalRecord->select('count(*) as allcount')->count();


             $totalRecordswithFilte = ContactUs::where('deleted_at',null);
             $totalRecordswithFilter = $totalRecordswithFilte->select('count(*) as allcount')->count();

             // Fetch records
             $items = ContactUs::where('deleted_at',null)->orderBy($columnName,$columnSortOrder);          
             $records = $items->skip($start)->take($rowperpage)->get();
       

         $data_arr = array();

         foreach($records as $record){
             $id = $record->id;
             $title = $record->title;
             $content = $record->content;
             $img = $record->icon;
              $created_at =  $record->created_at;
              if($img)
              $icon = '<img src="' . asset('contact-us/' . $img) . '" width="200px" height="160px" />'; 
            else $icon ='';
                       $data_arr[] = array(
                "id" => $id,
                "title" => $title,
                "content" => $content,
                "icon" => $icon,
                "created_at" => $created_at,
                "edit" => '<div class="settings-main-icon"><a  href="' . url('admin/contact-us/'.$id.'/edit') . '"><i class="fe fe-edit-2 bg-info me-1"></i></a>&nbsp;&nbsp;<a class="deleteItem" data-id="'.$id.'"><i class="si si-trash bg-danger "></i></a></div>'

            );
         }

         $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
         );

         return response()->json($response);
 }
    public function create()
    {
            return view('admin.contactus.create');
        
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
                'title' => 'required',
                'content' => 'required',
            ]);
            if($validate->fails())
            {
                $messages = $validate->getMessageBag();
                return redirect()->back()->withErrors($validate);
            }

            $data = $request->all();

            if ($request->hasfile('icon')) {

                $images = $request->icon;
                $img = time() . rand(100, 999) . '.' . $images->extension();
            
                $images->move(public_path('/contact-us'), $img);
            
                $data['icon'] = $img;
            
            }else{
                $data['icon'] = '';
            }

            ContactUs::create([
                'title' => $data['title'],
                'content' => $data['content'],
                'icon' => $data['icon'],
            ]);


           return redirect()->route('contact-us.index')

           ->with('status','Contact Created Successfully');

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