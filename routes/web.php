<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Model\Registration;
use App\Http\Controllers\RegistrationController;
use App\Model\Login;

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
Route::get('/login', [RegistrationController::class, 'login'])->name('login');
Route::post('/login', [RegistrationController::class, 'loginVerification'])->name('loginVerification');
Route::get('/registration', [RegistrationController::class, 'registration'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'registrationVerification'])->name('registrationVerification');
