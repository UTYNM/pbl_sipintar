<?php

use Illuminate\Support\Facades\Route;

Route::get('beranda', function () {
    return view('content/frontend/beranda');
});
Route::get('pertanian', function () {
    return view('content/frontend/pertanian');
});
Route::get('peternakan', function () {
    return view('content/frontend/peternakan');
});
Route::get('perikanan', function () {
    return view('content/frontend/perikanan');
    
});Route::get('tambah', function () {
    return view('content/frontend/tambah');
});
Route::get('akun', function () {
    return view('content/frontend/akun');
});
Route::get('DetailProdukPertanian', function () {
    return view('content/frontend/detail_produk_pertanian');
});
Route::get('login', function () {
    return view('login');
});