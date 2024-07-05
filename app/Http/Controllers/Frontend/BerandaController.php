<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class BerandaController extends Controller
{
    public function index()
    {
        // Retrieve all products for the "Semua Kategori" tab
        $allProducts = Product::inRandomOrder()->take(12)->get();
        
        // Retrieve products for the "Pertanian" category
        $pertanianProducts = Product::whereHas('category', function ($query) {
            $query->where('category_name', 'Pertanian');
        })->inRandomOrder()->take(12)->get();

         // Retrieve products for the "Perikanan" category
         $perikananProducts = Product::whereHas('category', function ($query) {
            $query->where('category_name', 'Perikanan');
        })->inRandomOrder()->take(12)->get();

         // Retrieve products for the "Peternakan" category
         $peternakanProducts = Product::whereHas('category', function ($query) {
            $query->where('category_name', 'Peternakan');
        })->inRandomOrder()->take(12)->get();

        $latestProducts = Product::orderBy('created_at', 'desc')->take(6)->get();

        // Return the view with products data
        return view('content.frontend.beranda', compact('allProducts','latestProducts', 'pertanianProducts', 'perikananProducts', 'peternakanProducts'));
    }
}
