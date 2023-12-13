<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);
Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/Dashboard', function () {
    return view('Dashboard');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/iPhonex', function () {
    return view('iPhonex');
});

Route::get('/Profil', function () {
    return view('Profil');
});

Route::get('/Finish', function () {
    return view('Finish');
});

Route::get('/iPhonexs', function () {
    return view('iPhonexs');
});

Route::get('/iPhonexr', function () {
    return view('iPhonexr');
});

Route::get('/iPhone11', function () {
    return view('iPhone11');
});

Route::get('/iPhone12', function () {
    return view('iPhone12');
});

Route::get('/iPhone13', function () {
    return view('iPhone13');
});

Route::get('/iPhone14', function () {
    return view('iPhone14');
});

Route::get('/iPhone15', function () {
    return view('iPhone15');
});