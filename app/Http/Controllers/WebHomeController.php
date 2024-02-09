<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\HomeContent;
use App\Models\MainMenu;
use App\Models\SubMenu;
use App\Models\SubSubMenu;
use Illuminate\Http\Request;

class WebHomeController extends Controller
{
    public function index()
    {
        $data = HomeContent::latest()->first();
        $blogs = Blog::where('deleted_at',null)->get();
        $brands = Brand::where('deleted_at',null)->get();
        return view('welcome',compact('data','blogs','brands'));
    }
}
