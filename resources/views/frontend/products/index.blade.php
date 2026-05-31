@extends('layouts.app')

@section('title', 'Produk')

@section('content')

<section class="products-section">

    <div class="container">

        {{-- Judul --}}
        <div class="products-title">

            <h1>
                Produk Hazmi Tas Anyaman
            </h1>

            <p>
                Temukan koleksi tas anyaman dan fashion pilihan terbaik.
            </p>

        </div>

        {{-- Daftar Produk --}}
        <div class="row">

            @forelse($products as $product)

                <div class="col-lg-3 col-md-6 mb-4">

                    <div class="product-card">

                        <img
                            src="{{ asset('image/products/' . $product->image) }}"
                            alt="{{ $product->title }}"
                            class="product-image"
                        >

                        <div class="product-body">

                            <div class="product-category">

                                {{ $product->category->name ?? '-' }}

                            </div>

                            <div class="product-title">

                                {{ $product->title }}

                            </div>

                            <div class="product-price">

                                Rp {{ number_format($product->price, 0, ',', '.') }}

                            </div>

                        </div>

                        <div class="p-3">

                            <a
                                href="{{ route('products.show', $product) }}"
                                class="btn-hazmi"
                            >
                                Lihat Detail
                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="alert alert-warning text-center">

                        Produk belum tersedia.

                    </div>

                </div>

            @endforelse

        </div>

        {{-- Pagination --}}
        @if ($products->hasPages())

            <div class="mt-5 d-flex justify-content-center">

                {{ $products->links() }}

            </div>

        @endif

    </div>

</section>

@endsection