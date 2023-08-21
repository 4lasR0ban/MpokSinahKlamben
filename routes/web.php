<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardEventController;
use App\Http\Controllers\DashboardUmkmController;
use App\Http\Controllers\DashboardUmkmImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/acara', function () {
//     return view('acara');
// });
Route::get('/', [HomeController::class, 'index'] );

Route::get('/acara', [EventController::class, 'index'] );

Route::get('acara/{event:slug}', [EventController::class, 'show']);

Route::get('/berita', [PostController::class, 'index'] );

Route::get('berita/{post:slug}', [PostController::class, 'show']);

Route::get('/umkm', [UmkmController::class, 'index'] );

Route::get('umkm/{umkm:slug}', [UmkmController::class, 'show']);
// Route::get('/berita', function () {
//     return view('berita');
// });

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/artikel', function () {
    return view('artikel');
});

// Route::get('/umkm', function () {
//     return view('umkm');
// });

// Route::get('/namaStan', function () {
//     return view('umkmMore');
// });

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

//Event
Route::resource('/admin/events', DashboardEventController::class)->middleware('auth');

//Umkm
Route::resource('/admin/umkms', DashboardUmkmController::class)->middleware('auth');

//UmkmImage
Route::resource('/admin/umkmImages', DashboardUmkmImageController::class)->middleware('auth');