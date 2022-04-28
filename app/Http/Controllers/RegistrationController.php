<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller {
  function login() {
    return view('page.login', [
      'title' => 'Login DKBM'
    ]);
  }

  function loginVerification(request $request) {
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
