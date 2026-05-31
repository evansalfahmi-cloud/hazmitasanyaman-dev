@extends('layouts.app')

@section('title', 'Keranjang Belanja')

@section('content')

<section class="cart-section py-5">

    <div class="container">

        <div class="row g-4">

            {{-- =====================================
                 DAFTAR PRODUK
            ====================================== --}}
            <div class="col-lg-8">

                <div class="cart-card">

                    <div class="cart-header">

                        <h3>

                            Keranjang Belanja

                        </h3>

                        <span>

                            {{ $cart ? $cart->items->count() : 0 }}
                            Produk

                        </span>

                    </div>

                    <hr>

                    @if(!$cart || $cart->items->isEmpty())

                        <div class="alert alert-warning">

                            Keranjang masih kosong.

                        </div>

                    @else

                        @foreach($cart->items as $item)

                            <div class="cart-item">

                                {{-- Gambar --}}
                                <div class="cart-image">

                                    <img
                                        src="{{ asset('image/products/' . $item->product->image) }}"
                                        alt="{{ $item->product->title }}"
                                    >

                                </div>

                                {{-- Informasi --}}
                                <div class="cart-info">

                                    <h5>

                                        {{ $item->product->title }}

                                    </h5>

                                    <small>

                                        {{ $item->product->category->name }}

                                    </small>

                                    <form
                                        action="{{ route('cart.remove', $item) }}"
                                        method="POST"
                                        class="mt-2"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            class="btn btn-link text-danger p-0"
                                        >

                                            Hapus

                                        </button>

                                    </form>

                                </div>

                                {{-- Qty --}}
                                <div class="cart-qty">

                                    {{ $item->quantity }} x

                                </div>

                                {{-- Harga --}}
                                <div class="cart-price">

                                    Rp {{ number_format($item->product->price,0,',','.') }}

                                </div>

                                {{-- Total --}}
                                <div class="cart-total">

                                    Rp {{ number_format($item->product->price * $item->quantity,0,',','.') }}

                                </div>

                            </div>

                            <hr>

                        @endforeach

                    @endif

                </div>

            </div>


            {{-- =====================================
                 RINGKASAN
            ====================================== --}}
            <div class="col-lg-4">

                <div class="summary-card">

                    <h4>

                        Ringkasan Pesanan

                    </h4>

                    <hr>

                    @php

                        $subtotal = 0;

                        if($cart){

                            foreach($cart->items as $item){

                                $subtotal +=
                                    $item->product->price
                                    *
                                    $item->quantity;

                            }

                        }

                    @endphp

                    <div class="summary-row">

                        <span>

                            Jumlah Produk

                        </span>

                        <span>

                            {{ $cart ? $cart->items->count() : 0 }}

                        </span>

                    </div>

                    <div class="summary-row">

                        <span>

                            Total Item

                        </span>

                        <span>

                            {{ $cart ? $cart->items->sum('quantity') : 0 }}

                        </span>

                    </div>

                    <hr>

                    <div class="summary-total">

                        <span>

                            Total Belanja

                        </span>

                        <strong>

                            Rp {{ number_format($subtotal,0,',','.') }}

                        </strong>

                    </div>

                    <a
                        href="{{ route('cart.checkout') }}"
                        class="btn-checkout"
                    >

                        <i class="fa-brands fa-whatsapp me-2"></i>

                        Checkout via WhatsApp

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection