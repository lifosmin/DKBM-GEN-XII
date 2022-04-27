<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Model\RegistrationController;
use App\Model\LoginController;

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

