<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('category')
            ->where('is_active', true);

        /*
        |--------------------------------------------------------------------------
        | Filter Kategori
        |--------------------------------------------------------------------------
        */
        if ($request->filled('category')) {

            $products->whereHas('category', function ($query) use ($request) {

                $query->where(
                    'slug',
                    $request->category
                );

            });
        }

        /*
        |--------------------------------------------------------------------------
        | Search Produk
        |--------------------------------------------------------------------------
        */
        if ($request->filled('search')) {

            $products->where(function ($query) use ($request) {

                $query->where(
                    'title',
                    'like',
                    '%' . $request->search . '%'
                )
                ->orWhere(
                    'description',
                    'like',
                    '%' . $request->search . '%'
                );

            });
        }

        $products = $products
            ->latest()
            ->paginate(12)
            ->withQueryString();

        return view(
            'frontend.products.index',
            compact('products')
        );
    }

    public function show(Product $product)
    {
        return view(
            'frontend.products.show',
            compact('product')
        );
    }
}