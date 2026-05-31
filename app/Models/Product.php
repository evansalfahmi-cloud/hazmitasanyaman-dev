<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'price',
        'stock',
        'image',
        'is_featured',
        'is_active',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relasi Kategori
    |--------------------------------------------------------------------------
    */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Relasi Cart Item
    |--------------------------------------------------------------------------
    */
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}