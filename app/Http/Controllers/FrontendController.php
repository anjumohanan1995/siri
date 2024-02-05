<?php

namespace App\Http\Controllers;

use App\Models\Vertical;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function approach(){
        return view('home.approach');
    }

    public function chargerServices(){
        return view('home.charger_services');
    }

    public function products(){
        return view('home.products');
    }
    public function cmsServices(){
        return view('home.cms_services');
    }

    public function consultingSiri(){
        return view('home.consulting_siri');
    }
    public function Solutions(){
        return view('home.solutions');
    }
    public function contact(){
        return view('home.contact_us');
    }
    public function verticals($slug){
        $vertical=Vertical::first();
        return view ('home.verticals', compact('slug','vertical'));
    }
    public function aboutUs(){
        return view('home.aboutUs');
    }
    public function team(){
        return view('home.team');
    }
    public function innovation($slug){
        return view ('home.innovation', compact('slug'));
    }
}
