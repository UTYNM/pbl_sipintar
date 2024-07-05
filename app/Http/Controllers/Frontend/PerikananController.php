<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryType;

class PerikananController extends Controller
{
    public function index(Request $request)
    {
        // Specify the category_name to filter category types
        $specificCategoryName = 'perikanan';
    
        // Retrieve the category with the specified category_name
        $category = Category::where('category_name', $specificCategoryName)->first();
    
        if (!$category) {
            // Handle the case where the category is not found
            abort(404, 'Category not found');
        }
    
        // Retrieve category types for the specified category_id
        $categoryTypes = CategoryType::where('category_id', $category->id)->get();
    
        // Get the selected type names from the request
        $selectedTypeNames = $request->input('type_name', []);
    
        // Get the search query from the request
        $searchQuery = $request->input('search');
    
        // Get the sort order from the request, defaulting to 'newest'
        $sortOrder = $request->input('sort_order', 'newest');
    
        // Query products, filtering by selected type names if any, by search query, and sorting by the selected order
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
        });
    
        // Apply sorting based on the selected sort order
        if ($sortOrder === 'newest') {
            $products = $productsQuery->orderBy('created_at', 'desc')->paginate(12); // 10 items per page
        } else {
            $products = $productsQuery->orderBy('created_at', 'asc')->paginate(12); // 10 items per page
        }
    
        return view('content.frontend.perikanan', compact('products', 'categoryTypes', 'selectedTypeNames', 'searchQuery', 'sortOrder'));
    }
    
}
