<?php

namespace App\Http\Controllers;

use App\Models\SubSubMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubSubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('sub sub menu');
    }
    public function indexWithId($id)
    {
        // dd('ho');

        return view('add_menus.sub_sub_menus.index', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->id;

        return view('add_menus.sub_sub_menus.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data using Laravel's form request validation
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'link_type' => 'required|in:slug,link',
            'link' => 'nullable|string|max:255|required_if:link_type,link',
            'sub_menu_id' => 'nullable',
        ]);

        // Generate a slug from the title
        if ($request->link_type == 'slug') {
            $slug = Str::slug($validatedData['title'], '_');

            $validatedData['slug'] = $slug;
        }
        $validatedData['page_id'] = time().rand(100,999);

        // Create a new Menu instance with the validated data
        $menu = SubSubMenu::create($validatedData);


        // return redirect()->route('sub_menus.index')->with('success', 'Menu item created successfully');
        return redirect()->back()->with('success', 'Sub sub menu item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubSubMenu  $subSubMenu
     * @return \Illuminate\Http\Response
     */
    public function show(SubSubMenu $subSubMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubSubMenu  $subSubMenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // Fetch the specific SubMenu record for editing
        $data = SubSubMenu::find($id);

        // dd($data);


        // Check if the record is found
        if (!$data) {
            return abort(404);
        }

        return view('add_menus.sub_sub_menus.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubSubMenu  $subSubMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subMenu = SubSubMenu::find($id);


        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'link_type' => 'required|in:slug,link',
            'link' => 'nullable|string|max:255|required_if:link_type,link',
        ]);

        // Generate a slug from the title
        if ($request->link_type == 'slug') {
            
            if(!$subMenu->slug){
                $slug = Str::slug($validatedData['title'], '_');
                $validatedData['slug'] = $slug;
            }
     
            $validatedData['link'] = "";
        } else {
            $validatedData['slug'] = "";
        }
      //  $validatedData['page_id'] = time().rand(100,999);

        // Update the subMenu record
        $subMenu->update($validatedData);

        // Redirect to a specific route or show a success message
        // return redirect()->route('sub_menus.index')->with('success', 'Menu item updated successfully');
        return redirect()->back()->with('success', 'Sub sub menu item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubSubMenu  $subSubMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subMenu = SubSubMenu::find($id);


        // Perform the hard delete
        $subMenu->forceDelete();

        // Optionally, you can return a response or redirect back
        return redirect()->back()->with('success', 'Sub sub menu item deleted successfully.');
    }
    public function getSubSubMenus(Request $request)
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
        $query = SubSubMenu::query();

        $query = $query->where('sub_menu_id', $id);


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
                'no' => $i++,
                "title" => $record->title,
                "link_or_slug" => $record->link_type == 'link' ? $record->link : $record->slug,
                "edit" => '<div class="d-flex">
                    <a class="btn btn-primary m-1" href="' . route('sub_sub_menus.edit', $record->id) . '">Edit</a>
                    <form action="' . route('sub_sub_menus.delete', $record->id) . '" method="POST" onsubmit="return confirm(\'Are you sure you want to delete this item?\');">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-danger m-1">Delete</button>
                    </form>

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
}
