<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Halaman Keranjang
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $cart = auth()
            ->user()
            ->cart()
            ->with('items.product')
            ->first();

        return view(
            'frontend.cart.index',
            compact('cart')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Tambah Produk ke Keranjang
    |--------------------------------------------------------------------------
    */
    public function add(Product $product)
{
    $user = auth()->user();

    /*
    |--------------------------------------------------------------------------
    | Cari atau buat keranjang
    |--------------------------------------------------------------------------
    */
    $cart = Cart::firstOrCreate([
        'user_id' => $user->id,
    ]);

    /*
    |--------------------------------------------------------------------------
    | Cek apakah produk sudah ada
    |--------------------------------------------------------------------------
    */
    $item = CartItem::where('cart_id', $cart->id)
        ->where('product_id', $product->id)
        ->first();

    if ($item) {

        $item->increment('quantity');

    } else {

        CartItem::create([
            'cart_id'   => $cart->id,
            'product_id'=> $product->id,
            'quantity'  => 1,
        ]);

    }

    return back()->with(
        'success',
        'Produk berhasil ditambahkan ke keranjang.'
    );
}

    /*
    |--------------------------------------------------------------------------
    | Hapus Produk dari Keranjang
    |--------------------------------------------------------------------------
    */
    public function remove(CartItem $item)
    {
        $item->delete();

        return back()->with(
            'success',
            'Produk berhasil dihapus dari keranjang.'
        );
    }

    public function checkout()
    {
        $cart = auth()
            ->user()
            ->cart()
            ->with('items.product')
            ->first();

        if (!$cart || $cart->items->isEmpty()) {

            return back()->with(
                'error',
                'Keranjang masih kosong.'
            );
        }

        $message = "Halo Hazmi Tas Anyaman,%0A%0ASaya ingin memesan:%0A";

        foreach ($cart->items as $item) {

            $message .=
                "- {$item->product->title} ({$item->quantity}x)%0A";
        }

        $message .= "%0ATerima kasih.";

        return redirect(
            'https://wa.me/6285368140401?text=' . $message
        );
    }

}