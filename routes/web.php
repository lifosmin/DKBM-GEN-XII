<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AspirationController;
use App\Http\Controllers\MailController;
use Spatie\Honeypot\ProtectAgainstSpam;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/index-id', [HomeController::class, 'indexid'])->name('home-id');

//email verification
Route::post('/mail/verify/resend', [MailController::class, 'resendEmailVerification']);
Route::get('/mail/verify/expired', [MailController::class, 'verifyExpiredPage'])->name('email-verification-expired');
Route::get('/mail/verify/success', [MailController::class, 'verifySuccessPage'])->name('email-verification-success');
Route::get('/mail/verify/resend', [MailController::class, 'verifyResendPage'])->name('email-verification-resend');
Route::post('/mail/verify/resend', [MailController::class, 'resendEmailVerification'])->name('email-verification-resend');
Route::get("/mail/verify", [MailController::class, "emailVerification"])->name("email-verification");
Route::get("/mail/verify/unauthenticated", [MailController::class, "unauthenticatedEmailPage"])->name("verification.notice");

//Login
Route::get('/login', [RegistrationController::class, 'login'])->name('login')->middleware('guest:users');
Route::get('/login-id', [RegistrationController::class, 'loginid'])->name('login-id')->middleware('guest:users');
Route::post('/login', [RegistrationController::class, 'loginVerification'])->name('loginVerification');
Route::post('/login-id', [RegistrationController::class, 'verifikasiLogin'])->name('verifikasiLogin');

//LOGOUT
Route::get('/logout', [RegistrationController::class, 'logout'])->name('logout')->middleware('auth:users');
Route::get('/logout-id', [RegistrationController::class, 'keluar'])->name('keluar')->middleware('auth:users');

//REGISTER
Route::get('/registration', [RegistrationController::class, 'registration'])->name('registration')->middleware("guest:users");
Route::post('/registration', [RegistrationController::class, 'registrationVerification'])->name('registrationVerification');

//email harus terverifikasi & harus login sebagai user
Route::group(["middleware" => ["auth:users", "verified"]], function() {
  //FORM ASPIRASI
  Route::get('/aspiration-form', [AspirationController::class, 'aspirationForm'])->name('aspirationForm');
  Route::get('/aspiration-form-id', [AspirationController::class, 'aspirationFormid'])->name('aspirationForm-id');
  Route::post('/aspiration-form', [AspirationController::class, 'aspirationVerification'])->name('aspirationVerification')->middleware(ProtectAgainstSpam::class);
  Route::post('/aspiration-form-id', [AspirationController::class, 'verifikasiAspirasi'])->name('verifikasiAspirasi')->middleware(ProtectAgainstSpam::class);
  Route::get('/aspirationFailed', [AspirationController::class, 'aspirationFailed'])->name("aspirationFailed");

  //Cek Resi
  Route::get('/resi', [AspirationController::class, 'resi'])->name('resi');
  Route::get('/cek-resi', [AspirationController::class, 'cekResi'])->name('cekResi');
});

//Admin
Route::group(['prefix' => 'admin'], function () {
    Route::post('/logout', [AdminController::class, 'logout'])->name('logoutAdmin')->middleware('auth:admin');
    Route::post('/update', [AdminController::class, 'update'])->name('updateAspiration')->middleware('auth:admin');
    Route::post('/updateProgress', [AdminController::class, 'updateProgress'])->name('updateProgress')->middleware('auth:admin');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin')->middleware('auth:admin');
    Route::get('/dashboard-finished', [AdminController::class, 'finished'])->name('adminFinished')->middleware('auth:admin');
    Route::get('/dashboard-onProgress', [AdminController::class, 'onProgress'])->name('adminOnProgress')->middleware('auth:admin');
    Route::get('/dashboard-user', [AdminController::class, 'dataUser'])->name('dataUser')->middleware('auth:admin');
    Route::post('/dashboard-edit-user', [AdminController::class, 'editUser'])->name('editUser')->middleware('auth:admin');
    Route::get('/dashboard-delete-user/{registration:id}', [AdminController::class, 'deleteUser'])->name('deleteUser')->middleware('auth:admin');
});