<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'category_id', 'category_type_id', 'product_name', 'description', 'price', 'stock',
    ];

    // Relationship with ProductPhoto
    public function photos()
    {
        return $this->hasMany(ProductPhoto::class);
    }

    // Relationship with User (Seller)
    public function seller()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship with CategoryType
    public function categoryType()
    {
        return $this->belongsTo(CategoryType::class);
    }

    // Relationship through User to District
    public function district()
    {
        return $this->seller->district(); // seller is the User model
    }
}
