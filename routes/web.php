<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//Login Register
Route::get('/login', [RegistrationController::class, 'login'])->name('login')->middleware('guest:users');
Route::get('/login-id', [RegistrationController::class, 'loginid'])->name('login-id')->middleware('guest:users');
Route::post('/login', [RegistrationController::class, 'loginVerification'])->name('loginVerification');
Route::post('/login-id', [RegistrationController::class, 'verifikasiLogin'])->name('verifikasiLogin');
Route::get('/logout', [RegistrationController::class, 'logout'])->name('logout')->middleware('auth:users');
Route::get('/logout-id', [RegistrationController::class, 'keluar'])->name('keluar')->middleware('auth:users');

Route::get('/registration', [RegistrationController::class, 'registration'])->name('registration')->middleware("guest:users");
Route::post('/registration', [RegistrationController::class, 'registrationVerification'])->name('registrationVerification');

Route::get('/aspiration-form', [AspirationController::class, 'aspirationForm'])->name('aspirationForm')->middleware('auth:users');
Route::post('/aspiration-form', [AspirationController::class, 'aspirationVerification'])->name('aspirationVerification')->middleware('auth:users');
