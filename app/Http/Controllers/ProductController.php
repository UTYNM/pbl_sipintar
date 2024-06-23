<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductPhoto;
use App\Models\Category; // Tambahkan ini untuk memuat model Category
use App\Models\CategoryType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create()
{
    $categories = Category::all(); // Mengambil semua kategori dari database
    $category_types = CategoryType::all(); // Mengambil semua sub kategori dari database
    return view('content/frontend/tambah', compact('categories', 'category_types'));
}

public function getCategoryTypes($categoryId)
{
    $categoryTypes = CategoryType::where('category_id', $categoryId)->get();
    return response()->json($categoryTypes);
}

    public function index()
    {
        $user = Auth::user(); // Mendapatkan informasi pengguna yang sedang masuk
        $products = Product::where('user_id', $user->id)->get(); // Mengambil produk yang dimiliki oleh pengguna
        return view('content.frontend.akun', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'category_type_id' => 'required|integer|exists:category_types,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'photos' => 'array|max:5', // Membatasi jumlah maksimal foto
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = new Product;
        $product->user_id = Auth::id();
        $product->category_id = $request->category_id;
        $product->category_type_id = $request->category_type_id;
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                // Cropping image using GD
                $image = imagecreatefromstring(file_get_contents($photo));
                $croppedImage = $this->cropImageGD($image, 580, 550);
                $croppedImagePath = $this->saveCroppedImageGD($croppedImage, $photo->getClientOriginalExtension());

                // Save the photo URL to database
                $productPhoto = new ProductPhoto;
                $productPhoto->product_id = $product->id;
                $productPhoto->photo_url = Storage::url($croppedImagePath);
                $productPhoto->save();

                // Clean up
                imagedestroy($image);
                imagedestroy($croppedImage);
            }
        }

        return redirect()->route('products.show', $product->id)
            ->with('success', 'Product created successfully.');
    }

    private function cropImageGD($image, $width, $height)
    {
        $originalWidth = imagesx($image);
        $originalHeight = imagesy($image);

        $croppedImage = imagecreatetruecolor($width, $height);
        imagecopyresampled(
            $croppedImage,
            $image,
            0,
            0, // dst_x, dst_y
            0,
            0, // src_x, src_y
            $width,
            $height, // dst_width, dst_height
            $originalWidth,
            $originalHeight // src_width, src_height
        );

        return $croppedImage;
    }

    private function saveCroppedImageGD($image, $extension)
    {
        $filename = 'public/product_photos/' . uniqid() . '.' . $extension;
        $path = storage_path('app/' . $filename);

        switch ($extension) {
            case 'jpeg':
            case 'jpg':
                imagejpeg($image, $path);
                break;
            case 'png':
                imagepng($image, $path);
                break;
            case 'gif':
                imagegif($image, $path);
                break;
            case 'svg':
                // SVG cannot be handled by GD. Skip saving SVG images.
                break;
            default:
                throw new \Exception('Unsupported image format: ' . $extension);
        }

        return $filename;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'category_type_id' => 'required|integer|exists:category_types,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->category_id = $request->category_id;
        $product->category_type_id = $request->category_type_id;
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                // Cropping image using GD
                $image = imagecreatefromstring(file_get_contents($photo));
                $croppedImage = $this->cropImageGD($image, 580, 550);
                $croppedImagePath = $this->saveCroppedImageGD($croppedImage, $photo->getClientOriginalExtension());

                // Save the photo URL to database
                $productPhoto = new ProductPhoto;
                $productPhoto->product_id = $product->id;
                $productPhoto->photo_url = Storage::url($croppedImagePath);
                $productPhoto->save();

                // Clean up
                imagedestroy($image);
                imagedestroy($croppedImage);
            }
        }

        return redirect()->route('products.show', $product->id)
            ->with('success', 'Product updated successfully.');
    }

    public function show($id)
    {
        $product = Product::with('photos', 'category', 'seller')->findOrFail($id);
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(5)
            ->get();

        return view('content/frontend/detail_produk', compact('product', 'relatedProducts'));
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Hapus semua foto terkait
        foreach ($product->photos as $photo) {
            // Hapus file fisik dari penyimpanan
            $filePath = str_replace('/storage', 'public', $photo->photo_url);
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
            // Hapus record foto dari database
            $photo->delete();
        }

        // Hapus produk
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
