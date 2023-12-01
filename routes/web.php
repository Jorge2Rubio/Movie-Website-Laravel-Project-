<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\MovieController;

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

Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [MovieController::class, 'register'])->name('register');
    Route::post('/register', [MovieController::class, 'registerPost'])->name('register.post');
    Route::get('/login', [MovieController::class, 'login'])->name('login');
    Route::post('/login', [MovieController::class, 'loginPost'])->name('login.post');
    // Route::get('/fetch', [MovieController::class, 'fetchAPI'])->name('fetchAPI');
});


Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [AuthController::class, 'index'])->name('home');
    Route::delete('/logout', [MovieController::class, 'logout'])->name('logout');
});