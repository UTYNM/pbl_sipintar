<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PertanianController extends Controller
{
    public function index()
    {
        $products = Product::whereHas('category', function ($query) {
            $query->where('category_name', 'pertanian');
        })->get();

        return view('pertanian.index', compact('products'));
    }
}
