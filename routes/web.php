<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PertanianController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


Route::middleware(['auth'])->group(function () {
       Route::resource('products', ProductController::class);

        Route::get('/get-category-types/{category_id}', [ProductController::class, 'getCategoryTypes']);
        
        Route::resource('pertanian', PertanianController::class);
    
    Route::get('/akun', [ProductController::class, 'index'])->name('products.index');

    Route::get('beranda', function () {
        return view('content/frontend/beranda');
    });
    Route::get('peternakan', function () {
        return view('content/frontend/peternakan');
    });
    Route::get('perikanan', function () {
        return view('content/frontend/perikanan');
    });
    Route::get('tambah', function () {
        return view('content/frontend/tambah');
    });
    Route::get('DetailProdukPertanian', function () {
        return view('content/frontend/detail_produk_pertanian');
    });
});