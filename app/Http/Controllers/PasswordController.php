<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PasswordController extends Controller {
  public function forgotPassword(Request $request) {
    $user = Registration::firstWhere("email", $request->Email);

    if(!$user) return back()->with("user_not_found", true);

    $user->forgot_password_id = Str::random(32);
    $user->save();

    $this->sendEmail($user);

    return redirect(url("/password/forgot/success"));
  }

  public function forgotPasswordPage() {
    return view("cms.page.forgotPassword", [
      "title" => "DKBM Forgot Password",
      "language" => "english"
    ]);
  }

  public function forgotPasswordSuccessPage() {
    return view("cms.page.forgotPasswordSuccess", [
      "title" => "DKBM Forgot Password Success",
      "language" => "english"
    ]);
  }

  public function forgotPasswordChange(Request $request) {    
    $failedValidations = [];
    
    //validation
    $validator = Validator::make($request->all(), [
      "password" => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
      "password-confirmation" => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
    ]);

    //Error checking
    if($validator->fails()) {
      $failedValidations["password_validation_failed"] = true;
    }
    
    if($request["password"] != $request['password-confirmation']) {
      $failedValidations["password_not_match"] = true;
    }

    if(count($failedValidations) > 0) return back()->with($failedValidations);

    //continue if all validation passes
    $user = Registration::where("forgot_password_id", $request->forgot_password_id)->get()->first();
    $validatedInput = $validator->validated();

    $user->password = Hash::make($validatedInput['password']);
    $user->forgot_password_id = null;
    $user->save();

    Alert::success('Your password has been changed!');

    return redirect(url("/login"));
  }

  public function forgotPasswordChangePage(Request $request) {
    $user = Registration::where("forgot_password_id", $request->forgot_password_id)->get()->first();
    if (!$user || $request->forgot_password_id == null) return redirect(url("/"));

    return view("cms.page.forgotPasswordChange", [
      "title" => "DKBM Change Password",
      "forgot_password_id" => $request->forgot_password_id,
      "language" => "english"
    ]);
  }

  //SEND EMAIL
  public function sendEmail($user) {
    $details = [
      "title" => "DKBM Forgot Password",
      "forgot_password_id" => $user->forgot_password_id
    ];

    Mail::to($user['Email'])->send(new ForgotPasswordMail($details));
  }
}
