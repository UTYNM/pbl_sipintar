<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryType;
use App\Models\District;

class PerikananController extends Controller
{
    public function index(Request $request)
    {
        $specificCategoryName = 'perikanan';
        $category = Category::where('category_name', $specificCategoryName)->firstOrFail(); // Menggunakan firstOrFail() untuk melempar 404 jika kategori tidak ditemukan
        
        $categoryTypes = CategoryType::where('category_id', $category->id)->get();
        $selectedTypeNames = $request->input('type_name', []);
        $searchQuery = $request->input('search');
        $sortOrder = $request->input('sort_order', 'newest');
        $minPrice = $request->input('filter_price_min');
        $maxPrice = $request->input('filter_price_max');
        $districtId = $request->input('district_id'); // Mengambil district_id dari request
        
        $productsQuery = Product::whereHas('category', function ($query) use ($specificCategoryName) {
            $query->where('category_name', $specificCategoryName);
        })
        ->when($selectedTypeNames, function ($query) use ($selectedTypeNames) {
            return $query->whereHas('categoryType', function ($query) use ($selectedTypeNames) {
                $query->whereIn('type_name', $selectedTypeNames);
            });
        })
        ->when($searchQuery, function ($query) use ($searchQuery) {
            return $query->where('product_name', 'like', '%' . $searchQuery . '%');
        })
        ->when($minPrice, function ($query) use ($minPrice) {
            return $query->where('price', '>=', $minPrice);
        })
        ->when($maxPrice, function ($query) use ($maxPrice) {
            return $query->where('price', '<=', $maxPrice);
        })
        ->when($districtId, function ($query) use ($districtId) {
            return $query->whereHas('seller', function ($query) use ($districtId) {
                $query->where('district_id', $districtId);
            });
        });
        
        if ($sortOrder === 'newest') {
            $products = $productsQuery->orderBy('created_at', 'desc')->paginate(12);
        } else {
            $products = $productsQuery->orderBy('created_at', 'asc')->paginate(12);
        }
        
        $districts = District::all(); // Ambil semua kecamatan untuk ditampilkan di view
    
        return view('content.frontend.perikanan', compact('products', 'categoryTypes', 'selectedTypeNames', 'searchQuery', 'sortOrder', 'minPrice', 'maxPrice', 'districts'));
    }
    
}
