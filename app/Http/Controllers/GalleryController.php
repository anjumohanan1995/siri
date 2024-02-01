<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(5);
        return view('gallery.view_gallery', compact('galleries'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->id);
        $gal = GalleryCategory::get();
        return view('gallery.add_gallery', compact('gal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $gallery = new Gallery();
        $gallery->gallery_category_id = $request->id;
        $gallery->name = $request->name;
        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/admin/uploads/gallery'), $fileName);
        $gallery->file = $fileName;
        $gallery->status = $request->gallery_status;
        $gallery->save();
        return redirect()->back()->with('success', 'successfully created');
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
        $gal = Gallery::find($id);
        $gal_cat = GalleryCategory::get();
        return view('gallery.edit_gallery', compact('gal','gal_cat'));
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
        $gal = Gallery::find($id);
        $gal->name = $request->name;
        $gal->status = $request->gallery_status;
        if($request->image){
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/admin/uploads/gallery'), $fileName);
            $gal->file = $fileName;
        }
       
        $gal->update();
        return redirect()->back()->with('success', 'gallery saved successfully');
    }
/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function destroy($id)
    {
        //
    }
    public function galleryList($id)
    {
        if ($id == null) {
            return redirect()->back();
        }
        $galleries = Gallery::where('gallery_category_id', $id)->get();

        if (!$galleries) {
            return redirect()->back();
        }
        return view('gallery', compact('galleries'));
    }
    public function addGallery(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $gallery = new Gallery();
        $gallery->gallery_category_id = $id;
        $gallery->name = $request->name;
        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/admin/uploads/gallery'), $fileName);
        $gallery->file = $fileName;
        $gallery->status = $request->gallery_status;
        $gallery->save();
        return redirect()->back()->with('success', 'successfully created');
    }
}
