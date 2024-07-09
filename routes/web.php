<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\BerandaController;
use App\Http\Controllers\Frontend\PerikananController;
use App\Http\Controllers\Frontend\PertanianController;
use App\Http\Controllers\Frontend\PeternakanController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('pangan-ketapang')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

    Route::middleware(['auth'])->group(function () {
        Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda.index');
        Route::resource('products', ProductController::class);
        Route::resource('dashboard', ProductController::class);
        Route::get('/get-category-types/{category_id}', [ProductController::class, 'getCategoryTypes']);
        Route::resource('pertanian', PertanianController::class);
        Route::resource('peternakan', PeternakanController::class);
        Route::resource('perikanan', PerikananController::class);
        Route::resource('profile', ProfileController::class);
    });
});

Route::prefix('operator-pangan-ketapang')->group(function () {
});
