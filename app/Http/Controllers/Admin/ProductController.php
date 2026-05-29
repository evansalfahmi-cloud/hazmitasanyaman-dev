<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')
            ->latest()
            ->get();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view(
            'admin.products.create',
            compact('categories')
        );
    }

    public function store(Request $request)
    {
        Product::create([

            'category_id' => $request->category_id,

            'title' => $request->title,

            'slug' => Str::slug($request->title),

            'description' => $request->description,

            'price' => $request->price,

            'stock' => $request->stock,

            'is_featured' => $request->has('is_featured'),

            'is_active' => true,

        ]);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view(
            'admin.products.edit',
            compact('product', 'categories')
        );
    }

    public function update(Request $request, Product $product)
    {
        $product->update([

            'category_id' => $request->category_id,

            'title' => $request->title,

            'slug' => Str::slug($request->title),

            'description' => $request->description,

            'price' => $request->price,

            'stock' => $request->stock,

            'is_featured' => $request->has('is_featured'),

        ]);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produk berhasil dihapus');
    }
}