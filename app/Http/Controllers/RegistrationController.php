<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Registration;
use RealRashid\SweetAlert\Facades\Alert;

class RegistrationController extends Controller
{
    function login(){
        return view('cms.page.login',[
            'title' => 'DKBM UMN - Login',
            'language' => 'English'
        ]);
    }

    function loginid(){
      return view('cms.page.login-id',[
          'title' => 'DKBM UMN - Masuk',
          'language' => 'Indonesia'
      ]);
  }

    function loginVerification(request $request){
        $credentials = $request->validate([
            'Email' => 'required | email:dns',
            'password' => 'required'
        ]);

        if($credentials['Email'] == "admin@umn.ac.id"){
          if(Auth::guard('admin')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('admin'));
          }
        }
        if(Auth::guard('users')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('home-id'));
        }

        return back()->with('status', 'Invalid login details');
    }

    function verifikasiLogin(request $request){
      $credentials = $request->validate([
          'Email' => 'required | email:dns',
          'password' => 'required'
      ]);

      if($credentials['Email'] == "admin@umn.ac.id"){
        if(Auth::guard('admin')->attempt($credentials)){
          $request->session()->regenerate();
          return redirect()->intended(route('admin'));
        }
      }
      if(Auth::guard('users')->attempt($credentials)){
          $request->session()->regenerate();
          return redirect()->intended(route('home-id'));
      }

      return back()->with('status', 'Data yang dimasukkan belum tepat');
  }

  function logout(){
      Auth::guard('users')->logout();

      request()->session()->invalidate();

      request()->session()->regenerateToken();

      return redirect(route('home'));
  }

  function keluar(){
    Auth::guard('users')->logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect(route('home-id'));
  }

  public function registration() {
    return view("cms.page.registration", [
      "title" => "Registration",
      "language" => "English"
    ]);
  }

  public function registrationVerification(Request $request) {
    if($request->ID_Line){
      $validReq = $request->validate([
        'Nama' => 'required|regex:/[a-zA-Z]+$/x',
        'Email' => ['required', 'email:dns', 'regex:/^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/', 'unique:registrations,Email'],
        'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        'NIM' => 'required|string|max:11|min:11|unique:registrations,NIM',
        'Jurusan' => 'required',
        'nomorWA' => 'required|unique:registrations,nomorWA',
        'ID_Line'=>'required|unique:registrations,ID_Line'
      ]);
    }else{
      $validReq = $request->validate([
        'Nama' => 'required|regex:/[a-zA-Z]+$/x',
        'Email' => ['required', 'email:dns', 'regex:/^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/', 'unique:registrations,Email'],
        'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        'NIM' => 'required|string|max:11|min:11|unique:registrations,NIM',
        'Jurusan' => 'required',
        'nomorWA' => 'required|unique:registrations,nomorWA',
      ]);
    }

    $validReq['password'] = Hash::make($validReq['password']);
    Registration::create($validReq);

    Alert::success('Pendaftaran akun berhasil!','Terimakasih sudah mendaftar di web DKBM. Anda bisa memberikan aspirasi Anda mulai dari sekarang.');

    return redirect()->route("login");
  }
}
