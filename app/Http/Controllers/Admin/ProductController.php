<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')
            ->latest()
            ->get();

        return view(
            'admin.products.index',
            compact('products')
        );
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
        $imageName = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName =
                time() . '_' .
                Str::random(5) . '.' .
                $image->getClientOriginalExtension();

            $image->move(
                public_path('image/products'),
                $imageName
            );
        }

        Product::create([

            'category_id' => $request->category_id,

            'title' => $request->title,

            'slug' => Str::slug($request->title),

            'description' => $request->description,

            'price' => $request->price,

            'stock' => $request->stock,

            'image' => $imageName,

            'is_featured' => $request->has('is_featured'),

            'is_active' => true,

        ]);

        return redirect()
            ->route('admin.products.index')
            ->with(
                'success',
                'Produk berhasil ditambahkan'
            );
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view(
            'admin.products.edit',
            compact(
                'product',
                'categories'
            )
        );
    }

    public function update(
        Request $request,
        Product $product
    ) {
        $imageName = $product->image;

        if ($request->hasFile('image')) {

            // Hapus gambar lama
            if (
                $product->image &&
                file_exists(
                    public_path(
                        'image/products/' .
                        $product->image
                    )
                )
            ) {
                unlink(
                    public_path(
                        'image/products/' .
                        $product->image
                    )
                );
            }

            // Upload gambar baru
            $image = $request->file('image');

            $imageName =
                time() . '_' .
                Str::random(5) . '.' .
                $image->getClientOriginalExtension();

            $image->move(
                public_path('image/products'),
                $imageName
            );
        }

        $product->update([

            'category_id' => $request->category_id,

            'title' => $request->title,

            'slug' => Str::slug($request->title),

            'description' => $request->description,

            'price' => $request->price,

            'stock' => $request->stock,

            'image' => $imageName,

            'is_featured' => $request->has('is_featured'),

        ]);

        return redirect()
            ->route('admin.products.index')
            ->with(
                'success',
                'Produk berhasil diperbarui'
            );
    }

    public function destroy(Product $product)
    {
        if (
            $product->image &&
            file_exists(
                public_path(
                    'image/products/' .
                    $product->image
                )
            )
        ) {
            unlink(
                public_path(
                    'image/products/' .
                    $product->image
                )
            );
        }

        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with(
                'success',
                'Produk berhasil dihapus'
            );
    }
}