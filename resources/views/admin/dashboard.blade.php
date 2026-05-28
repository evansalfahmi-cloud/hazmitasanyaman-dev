@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')

<div class="container py-5">

    <h1 class="mb-4">Dashboard Admin</h1>

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Total Produk</h5>
                    <h2>{{ $totalProducts }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Total Kategori</h5>
                    <h2>{{ $totalCategories }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Produk Unggulan</h5>
                    <h2>{{ $featuredProducts }}</h2>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection