<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AspirationController;

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

//FORM ASPIRASI
Route::get('/aspiration-form', [AspirationController::class, 'aspirationForm'])->name('aspirationForm')->middleware('auth:users');
Route::get('/aspiration-form-id', [AspirationController::class, 'aspirationFormid'])->name('aspirationForm-id')->middleware('auth:users');
Route::post('/aspiration-form', [AspirationController::class, 'aspirationVerification'])->name('aspirationVerification')->middleware('auth:users');
Route::post('/aspiration-form-id', [AspirationController::class, 'verifikasiAspirasi'])->name('verifikasiAspirasi')->middleware('auth:users');

//Cek Resi
Route::get('/resi', [AspirationController::class, 'resi'])->name('resi');
Route::get('/cek-resi', [AspirationController::class, 'cekResi'])->name('cekResi');

//Admin
Route::group(['prefix' => 'admin'], function () {
    Route::post('/logout', [AdminController::class, 'logout'])->name('logoutAdmin')->middleware('auth:admin');
    Route::post('/update', [AdminController::class, 'update'])->name('updateAspiration')->middleware('auth:admin');
    Route::post('/updateProgress', [AdminController::class, 'updateProgress'])->name('updateProgress')->middleware('auth:admin');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin')->middleware('auth:admin');
    Route::get('/dashboard-finished', [AdminController::class, 'finished'])->name('adminFinished')->middleware('auth:admin');
    Route::get('/dashboard-onProgress', [AdminController::class, 'onProgress'])->name('adminOnProgress')->middleware('auth:admin');
});