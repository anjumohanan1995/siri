<?php

namespace App\Http\Controllers;

use App\Models\Approach;
use App\Models\ContactUs;
use App\Models\DynamicPage;
use App\Models\Innovation;
use App\Models\Vertical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function contactStore(Request $request){
        try{
            $validate = Validator::make($request->all(),[
                'name' => 'required|regex:/^[\pL\s\-]+$/u|max:50',
                'email' => 'required|email',
            ]);

            if($validate->fails()){
                //dd("ffffff");
               // dd($validate->request()->all());
                //return response()->json(['errors' => $validate->request()->all()]);
                return response()->json(['errors' => $validate->errors()->all()]);
            }
dd($request);
            $query = ContactUs::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);
            if($query){
                if (@$request->email) {
                    $email = $request->email;
                    $name = $request->name;
                    // $messagess = $request->message;
                    // Mail::send('mail.mail', compact('name','email','messagess'), function ($message) use ($email) {
                    //     $message->to('namkerala@gmail.com');
                    //     $message->bcc('sujiraj@kawikatechnologies.com');
                    //     $message->subject('Contact Us');
                    // });

                    return response()->json(['success'=> 'Successfully submitted']);
                }
            }
        }

        catch( \Exception $e){

        }
    }
}
