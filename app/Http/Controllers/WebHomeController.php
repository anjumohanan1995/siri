<?php

namespace App\Http\Controllers;

use App\Models\MainMenu;
use App\Models\SubMenu;
use App\Models\SubSubMenu;
use Illuminate\Http\Request;

class WebHomeController extends Controller
{
    public function index()
    {
        


        return view('welcome');
    }
}
