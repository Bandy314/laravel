<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/posts', function () {
    return view('posts');
})->name('posts');

Route::get('/products/add', [ProductController::class, 'create'])->name('products.add');
Route::post('/products/add', [ProductController::class, 'create'])->name('products.welcome');

Route::get('/auth/login', [LoginController::class, 'show'])->name('auth.login');
Route::post('/auth/login', [LoginController::class, 'submit'])->name('login.submit');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/auth/register', [RegisterController::class, 'register'])->name('auth.register');
Route::post('/auth/register', [RegisterController::class, 'submit'])->name('register.submit');




