<?php

namespace App\Http\Controllers;

use App\Models\Approach;
use App\Models\ContactUs;
use App\Models\DynamicPage;
use App\Models\Innovation;
use App\Models\Vertical;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function approach(){
        $approach=Approach::first();
        return view('home.approach',compact('approach'));
    }

    public function chargerServices(){
        return view('home.charger_services');
    }

    public function products(){
        return view('home.products');
    }
   // public function cmsServices(){
     //   return view('home.cms_services');
    //}

    public function consultingSiri(){
        return view('home.consulting_siri');
    }
   // public function Solutions(){
//return view('home.solutions');
   // }
    public function contact(){
        $contact=DynamicPage::where('slug','contact-us')->first();
        //dd($contact);
        return view('home.contact_us',compact('contact'));
    }
    public function verticals($slug){
        $vertical=Vertical::where('slug',$slug)->first();
        return view ('home.verticals', compact('slug','vertical'));
    }
    public function aboutUs(){
        return view('home.aboutUs');
    }
    public function team(){
        return view('home.team');
    }
    public function innovation($slug){
        $innovation=Innovation::where('slug',$slug)->first();
       
        return view ('home.innovation', compact('innovation','slug'));
    }
    public function dynamicPage($slug){
        $content=DynamicPage::where('slug',$slug)->first();
        return view('home.dynamic_page',compact('content'));
    }
      public function Charging(){
        return view('home.charging');
    }
        public function ChargingServices(){
        return view('home.charging_services');
    }
        public function cmsServices(){
        return view('home.cms_services');
    }
        public function consulting(){
        return view('home.charging');
    }
        public function solutions(){
        return view('home.solutions');
    }
}
