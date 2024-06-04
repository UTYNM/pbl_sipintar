<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'deskripsi',
        'stok',
        'harga',
        'id_user',          
        'id_kategori',
        'id_jenis_produk',
    ];
}
