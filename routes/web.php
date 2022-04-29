<?php

use App\Http\Controllers\ContactController;
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

// Halaman Utama & Home
Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

// Halaman Login
Route::get('/login', [LoginController::class, 'index']);

// Halaman Register
Route::get('/register', [RegisterController::class, 'index']);

// Halaman User Profile
Route::get('/profile', [UserModelController::class, 'index']);

// Halaman Contact
Route::get('/faq', [FAQController::class, 'index']);