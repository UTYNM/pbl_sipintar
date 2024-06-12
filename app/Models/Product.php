<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'category_id', 'product_name', 'description', 'price', 'stock',
    ];

    public function photos()
    {
        return $this->hasMany(ProductPhoto::class);
    }
    public function seller()
{
    return $this->belongsTo(User::class, 'user_id');
}

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
