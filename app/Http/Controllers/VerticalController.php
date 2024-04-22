<?php

namespace App\Http\Controllers;

use App\Models\Vertical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class VerticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
       
        $vertical =Vertical :: where('deleted_at',null)->where('slug',$slug)->first();
       return view ('admin.vertical.index',compact('vertical','slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getVerticals(Request $request){
        $school = $request->school;

        //dd(Auth::user()->depot);
        $name = $request->name;
        $slug = $request->slug;
        


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
        //   $school_details = SchoolMaster::where('deleted_at',null)->get();


        $totalRecord = Vertical::where('deleted_at', null)->where('slug',$slug);

        if ($name != "") {
            $totalRecord->where('name', 'like', "%" . $name . "%");
        }
        
        
        $totalRecords = $totalRecord->select('count(*) as allcount')->count();



        $totalRecordswithFilte = Vertical::where('deleted_at', null)->where('slug',$slug);


        if ($name != "") {
            $totalRecordswithFilte->where('name', 'like', "%" . $name . "%");

        }
        
        
        $totalRecordswithFilter = $totalRecordswithFilte->select('count(*) as allcount')->count();
        //dd($totalRecordswithFilter);


        // Fetch records
        $items = Vertical::where('deleted_at', null)->where('slug',$slug)->orderBy($columnName, $columnSortOrder);
        if ($name != "") {
            $items->where('name', 'like', "%" . $name . "%");

        }
     
        $records = $items->orderby('created_at', 'desc')->skip($start)->take($rowperpage)->get();




        $data_arr = array();
        $i = $start;
        foreach ($records as $record) {
            $i++;
            $id = $record->id;
            $title = Str::limit(@$record->title, 15);
            $sub_title = Str::limit(@$record->sub_title, 15);
            $content = Str::limit(@$record->content, 15);
          
           
            $created_at = $record->created_at->format('d-m-Y g:i A');

            
           $edit= '<div class="settings-main-icon"><a  href="' . route('admin-verticals.show',$id) . '"><i class="fa fa-eye bg-info me-1"></i></a>&nbsp;&nbsp;<a  href="' . route('admin-verticals.edit',$id) . '"><i class="fa fa-edit bg-info me-1"></i></a></div>';



            $data_arr[] = array(
                
                "sl_no" =>$i,
                "title" => $title,
                "sub_title" => $sub_title,
                "content" => $content,
                "created_at" => $created_at,
                "edit" => $edit,
              

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
     public function create($slug)
    {
        $vertical = new Vertical();
        return view ('admin.vertical.create',compact('vertical','slug'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'nullable|max:2048',
             'banner_image' => 'nullable|max:2048',
           
                 
        ]);
      
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->all();
       
        if ($request->hasfile('image')) {

            $images = $request->image;
            $img = time() . rand(100, 999) . '.' . $images->extension();

            $images->move(public_path('/vertical'), $img);

            $data['image'] = $img;

        }else{
            $data['image'] = '';
        }
        if ($request->hasfile('banner_image')) {

            $images = $request->banner_image;
            $img = time() . rand(100, 999) . '.' . $images->extension();

            $images->move(public_path('/vertical'), $img);

            $data['banner_image'] = $img;

        }else{
            $data['banner_image'] = '';
        }
        Vertical::create($data);
        return redirect()->route('verticalList.index',$request->slug)->with('status','Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vertical  $vertical
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $vertical=Vertical::find($id);
        return view('admin.vertical.details',compact('vertical'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vertical  $vertical
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vertical=Vertical::find($id);
        return view('admin.vertical.create',compact('vertical'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vertical  $vertical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       
        $verticals=Vertical::where('id',$id)->first();
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'nullable|max:2048',
             'banner_image' => 'nullable|max:2048',
           
                 
        ]);
      
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->all();
       
        if ($request->hasfile('image')) {

            $images = $request->image;
            $img = time() . rand(100, 999) . '.' . $images->extension();

            $images->move(public_path('/vertical'), $img);

            $data['image'] = $img;

        }
        if ($request->hasfile('banner_image')) {

            $images = $request->banner_image;
            $img = time() . rand(100, 999) . '.' . $images->extension();

            $images->move(public_path('/vertical'), $img);

            $data['banner_image'] = $img;

            
        }
      //  dd($request->input('content'));
        $verticals->update($data);
        return redirect()->route('verticalList.index',$request->slug)->with('status','Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vertical  $vertical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vertical $vertical)
    {
        //
    }
}
