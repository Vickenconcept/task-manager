<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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


// Route::view('/', 'home');
Route::get('/', IndexController::class);

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/best-selling/{product}', [ProductController::class, 'selectBestSelling'])->name('product.best');
Route::resource('products', ProductController::class);

Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('register', 'auth.register')->name('register');
    Route::view('register/success', 'auth.success')->name('register.success');

    Route::controller(AuthController::class)->prefix('auth')->name('auth.')->group(function () {
        Route::post('/register', 'register')->name('register');
        Route::post('/login', 'login')->name('login');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::post('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
    // Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::resource('/cart', CartController::class);
    Route::resource('/home', DashboardController::class);
});

