<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        
        $credentials = $request->only(['password']);

        $user = User::orWhere('email', $request->input('email'))
                     ->orWhere('application_number', $request->input('email'))
                     ->first();
                  //   dd($user);
    
        if ($user && Auth::guard('web')->attempt(['_id' => $user->_id, 'password' => $request->input('password')])) {
            // Authentication passed
            return redirect()->intended('/home');
        } else {
            // Authentication failed
            return redirect()->route('login')->with('error', 'Invalid login credentials');
        }

      
    }
    public function loginPage(Request $request)
    {
        return view('auth.login');
    }

    
}

