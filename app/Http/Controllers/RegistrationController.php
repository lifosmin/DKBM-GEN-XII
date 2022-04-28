<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    function login(){
        return view('cms.page.login',[
            'title' => 'DKBM UMN - Login',
            'language' => 'English'
        ]);
    }

    function loginVerification(request $request){
        $credentials = $request->validate([
            'Email' => 'required | email:dns',
            'password' => 'required'
        ]);

        if(Auth::guard('users')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }

        return back()->with('status', 'Invalid login details');
    }

    function logout(){
        Auth::guard('users')->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect(route('home'));
    }

    function register(){

    }
}
