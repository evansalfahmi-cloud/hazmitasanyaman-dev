<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | CATEGORY
        |--------------------------------------------------------------------------
        */

        $tasAnyaman = Category::where('slug', 'tas-anyaman')->first();

        $tasFashion = Category::where('slug', 'tas-fashion')->first();


        /*
        |--------------------------------------------------------------------------
        | TAS ANYAMAN
        |--------------------------------------------------------------------------
        */

        Product::create([
            'category_id' => $tasAnyaman->id,
            'title' => 'Tas Anyaman Natural',
            'slug' => 'tas-anyaman-natural',
            'description' => 'Tas anyaman handmade dengan desain natural dan elegan.',
            'price' => 250000,
            'stock' => 10,
            'image' => 'no-img.jpg',
            'is_featured' => true,
            'is_active' => true,
        ]);

        Product::create([
            'category_id' => $tasAnyaman->id,
            'title' => 'Tas Anyaman Premium',
            'slug' => 'tas-anyaman-premium',
            'description' => 'Tas anyaman premium dengan kualitas terbaik.',
            'price' => 320000,
            'stock' => 8,
            'image' => 'no-img.jpg',
            'is_featured' => true,
            'is_active' => true,
        ]);


        /*
        |--------------------------------------------------------------------------
        | TAS FASHION
        |--------------------------------------------------------------------------
        */

        Product::create([
            'category_id' => $tasFashion->id,
            'title' => 'Tas Fashion Casual',
            'slug' => 'tas-fashion-casual',
            'description' => 'Tas fashion modern untuk aktivitas sehari-hari.',
            'price' => 280000,
            'stock' => 15,
            'image' => 'no-img.jpg',
            'is_featured' => true,
            'is_active' => true,
        ]);

        Product::create([
            'category_id' => $tasFashion->id,
            'title' => 'Tas Fashion Modern',
            'slug' => 'tas-fashion-modern',
            'description' => 'Tas fashion stylish dengan desain modern.',
            'price' => 350000,
            'stock' => 5,
            'image' => 'no-img.jpg',
            'is_featured' => true,
            'is_active' => true,
        ]);
    }
}

