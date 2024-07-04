<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PerikananController;
use App\Http\Controllers\PertanianController;
use App\Http\Controllers\PeternakanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
    Route::get('/get-category-types/{category_id}', [ProductController::class, 'getCategoryTypes']);
    Route::resource('pertanian', PertanianController::class);
    Route::resource('peternakan', PeternakanController::class);
    Route::resource('perikanan', PerikananController::class);
    
    // Ubah nama rute untuk /akun menjadi unik
    Route::get('/profil', [ProductController::class, 'index'])->name('akun.index');

    Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda.index');

    // Route::get('peternakan', function () {
    //     return view('content/frontend/peternakan');
    // });
    // Route::get('perikanan', function () {
    //     return view('content/frontend/perikanan');
    // });
    Route::get('tambah', function () {
        return view('content/frontend/tambah');
    });
    Route::get('DetailProdukPertanian', function () {
        return view('content/frontend/detail_produk_pertanian');
    });
});