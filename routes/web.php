<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup', [AuthenticateController::class, 'signup' ])->name('signup');
Route::post('signup', [AuthenticateController::class, 'register' ])->name('register');
Route::get('signin', [AuthenticateController::class, 'signin' ])->name('signin');
Route::post('signin', [AuthenticateController::class, 'login' ])->name('login');

Route::post('logout', [AAuthenticateController::class, 'logout'])->name('logout');

Route::get('dashboard', [AuthenticateController::class, 'dashboard'])->name('dashboard')->middleware('auth');