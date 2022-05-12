<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserModelController;
use Illuminate\Support\Facades\Route;

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

// Middleware auth hanya bisa diakses jika telah diotentikasi melalui login
// Middleware guest bisa diakses walaupun belum melakukan login

// Halaman Utama & Home
Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');


// Halaman Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

// Halaman Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

// Halaman User Profile
Route::get('/profile', [UserModelController::class, 'index'])->middleware('auth');

// Halaman Contact
Route::get('/faq', [FAQController::class, 'index'])->middleware('auth');
