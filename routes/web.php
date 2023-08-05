<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardPostController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/kontak', function () {
    return view('kontak');
});

//Authentication
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); 
Route::post('/login', [LoginController::class, 'authenticate']); 
Route::post('/logout', [LoginController::class, 'logout']); 

//Dashboard
Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth');

//User
Route::resource('/admin/users', DashboardUserController::class)->except('show')->middleware('auth');

//Post
Route::resource('/admin/posts', DashboardPostController::class)->middleware('auth');