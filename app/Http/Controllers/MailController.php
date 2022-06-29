<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerificationMail;

class MailController extends Controller {
  public function emailVerification(Request $request) {
    $user = Registration::where("email_verify_id", $request->link)->first();

    $verificationCreatedTime = strtotime($user->email_verify_created_at);
    $currentTime = strtotime(now());

    //kalau diatas 15 menit, udah ga valid lagi waktu email verifikasinya
    if(($currentTime - $verificationCreatedTime) > (60*15)) {
      return redirect(route("email-verification-expired", ["link" => $user->email_verify_id]));
    }

    //waktu email verifikasi masih dibawah 15 menit
    $user->email_verified_at = now();

    $user->save();

    return redirect(route("email-verification-success"));
  }

  public function resendEmailVerification(Request $request) {
    $user = Registration::where("email_verify_id", $request->link)->first();

    $user->email_verify_id = Str::random(32);
    $user->email_verify_created_at = now();

    $user->save();

    $this->sendEmail($user);

    return redirect(route("email-verification-resend"));
  }

  //WEB ROUTES
  public function verifyExpiredPage(Request $request) {
    return view("cms.page.emailExpired", [
      "title" => "DKBM Email Verification Expired",
      "link" => $request->link,
      "language" => "Indonesia"
    ]);
  }

  public function verifySuccessPage() {
    return view("cms.page.emailSuccess", [
      "title" => "DKBM Email Verification Success",
      "language" => "Indonesia"
    ]);
  }

  public function verifyResendPage(Request $request) {
    return view("cms.page.emailResend", [
      "title" => "DKBM Email Verification Resend",
      "link" => $request->link,
      "language" => "Indonesia"
    ]);
  }

  public function unauthenticatedEmailPage() {
    return view("cms.page.emailUnauthenticated", [
      "title" => "DKBM Email Verification Resend",
      "language" => "Indonesia"
    ]);    
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
