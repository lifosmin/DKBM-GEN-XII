<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function login(){
        return view('page.login',[
            'title' => 'Login DKBM'
        ]);
    }

    function loginVerification(request $request){
        
    }

    function register(){

    }
}
