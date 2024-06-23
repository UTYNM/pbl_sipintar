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


use App\Http\Controllers\ProductFilterController;

Route::middleware(['auth'])->group(function () {
        Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/products', [ProductController::class, 'store'])->name('products.store');
        Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
        Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
        Route::get('/get-category-types/{category_id}', [ProductController::class, 'getCategoryTypes']);
        Route::get('/products/filterByCategoryType', [PertanianController::class, 'filterByCategoryType'])->name('products.filterByCategoryType');

        Route::get('/products', [ProductFilterController::class, 'index'])->name('products.index');
        Route::get('/products/filter', [ProductFilterController::class, 'filterByCategoryType'])->name('products.filterByCategoryType');        

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