@extends('layouts.app')

@section('title', 'Keranjang Belanja')

@section('content')

<div class="container py-5">

    <h2 class="mb-4">
        Keranjang Belanja
    </h2>

    @if(!$cart || $cart->items->isEmpty())

        <div class="alert alert-warning">

            Keranjang masih kosong.

        </div>

    @else

        <div class="card shadow-sm">

            <div class="card-body">

                @foreach($cart->items as $item)

                    <div class="row align-items-center mb-4">

                        <div class="col-md-2">

                            <img
                                src="{{ asset('image/products/' . $item->product->image) }}"
                                class="img-fluid rounded"
                            >

                        </div>

                        <div class="col-md-4">

                            <h5>

                                {{ $item->product->title }}

                            </h5>

                            <small>

                                Qty:
                                {{ $item->quantity }}

                            </small>

                        </div>

                        <div class="col-md-3">

                            Rp {{ number_format($item->product->price,0,',','.') }}

                        </div>

                        <div class="col-md-3">

                            <form
                                action="{{ route('cart.remove', $item) }}"
                                method="POST"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    class="btn btn-danger"
                                >

                                    Hapus

                                </button>

                            </form>

                        </div>

                    </div>

                @endforeach

                <hr>

                <a
                    href="{{ route('cart.checkout') }}"
                    class="btn btn-success btn-lg"
                >

                    <i class="fa-brands fa-whatsapp me-2"></i>

                    Checkout via WhatsApp

                </a>

            </div>

        </div>

    @endif

</div>

@endsection