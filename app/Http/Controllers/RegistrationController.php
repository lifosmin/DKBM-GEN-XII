<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Registration;
use RealRashid\SweetAlert\Facades\Alert;
use App\Mail\EmailVerificationMail;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegistrationController extends Controller {
  function login() {
    return view('cms.page.login', [
      'title' => 'DKBM UMN - Login',
      'language' => 'English'
    ]);
  }

  function loginid() {
    return view('cms.page.login-id', [
      'title' => 'DKBM UMN - Masuk',
      'language' => 'Indonesia'
    ]);
  }

  function loginVerification(request $request) {
    $credentials = $request->validate([
      'Email' => 'required | email:dns',
      'password' => 'required'
    ]);

    if ($credentials['Email'] == "admin@umn.ac.id") {
      if (Auth::guard('admin')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended(route('admin'));
      }
    }
    if (Auth::guard('users')->attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->intended(route('home-id'));
    }

    return back()->with('status', 'Invalid login details');
  }

  function verifikasiLogin(request $request) {
    $credentials = $request->validate([
      'Email' => 'required | email:dns',
      'password' => 'required'
    ]);

    if ($credentials['Email'] == "admin@umn.ac.id") {
      if (Auth::guard('admin')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended(route('admin'));
      }
    }
    if (Auth::guard('users')->attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->intended(route('home-id'));
    }

    return back()->with('status', 'Data yang dimasukkan belum tepat');
  }

  function logout() {
    Auth::guard('users')->logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect(route('home'));
  }

  function keluar() {
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
    if ($request->ID_Line) {
      $validReq = $request->validate([
        'Nama' => 'required|regex:/[a-zA-Z]+$/x',
        'Email' => ['required', 'email:dns', 'regex:/^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/', 'unique:registrations,Email'],
        'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        'NIM' => 'required|string|max:11|min:11|unique:registrations,NIM',
        'Jurusan' => 'required',
        'nomorWA' => 'required|unique:registrations,nomorWA',
        'ID_Line' => 'required|unique:registrations,ID_Line'
      ]);
    } else {
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
    $validReq["email_verify_created_at"] = now();
    $validReq["email_verify_id"] = Str::random(32);
    Registration::create($validReq);

    $createdUser = Registration::where("email", $validReq["Email"])->first();

    Alert::success('Pendaftaran akun berhasil!', 'Terimakasih sudah mendaftar di web DKBM. Silahkan cek email anda untuk melakukan verifikasi email sebelum bisa memberikan aspirasi anda.');

    $this->sendEmail($createdUser);

    return redirect()->route("login");
  }

  //SEND EMAIL
  public function sendEmail($createdUser) {
    $details = [
      "title" => "DKBM Email Verification",
      "link" => $createdUser->email_verify_id
    ];

    Mail::to($createdUser['Email'])->send(new EmailVerificationMail($details));
  }
}
