<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | AMBIL PRODUK UNGGULAN
        |--------------------------------------------------------------------------
        */

        $products = Product::with('category')

            ->where('is_featured', true)

            ->where('is_active', true)

            ->latest()

            ->take(4)

            ->get();

        /*
        |--------------------------------------------------------------------------
        | KIRIM KE VIEW
        |--------------------------------------------------------------------------
        */

        return view('frontend.home.index', compact('products'));
    }
}
