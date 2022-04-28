<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Registration;

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

  function register() {
  }

  public function registration() {
    return view("cms.page.registration", [
      "title" => "Registration",
      "language" => "indonesia"
    ]);
  }

  public function registrationVerification(Request $request) {
    $validReq = $request->validate([
      'Nama' => 'required|regex:/[a-zA-Z]+$/x',
      'Email' => ['required', 'email:dns', 'regex:/^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/', 'unique:registrations,Email'],
      'Password' => 'required',
      'NIM' => 'required|regex:/000000(\d{5})/|unique:registrations,NIM',
      'Jurusan' => 'required',
      'nomorWA' => 'required',
      'ID_Line' => 'required|unique:registrations,ID_Line',
    ]);

    @dd($validReq);

    $validReq['password'] = Hash::make($validReq['password']);
    Registration::create($validReq);

    return redirect('/login');
  }
}
