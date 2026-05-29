@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

<h1 class="mb-4">
    Dashboard Admin
</h1>

<div class="row g-3">

    <div class="col-md-4">

        <div class="card shadow-sm">

            <div class="card-body">

                <h6 class="text-muted">
                    Total Produk
                </h6>

                <h2>
                    {{ $totalProducts }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow-sm">

            <div class="card-body">

                <h6 class="text-muted">
                    Total Kategori
                </h6>

                <h2>
                    {{ $totalCategories }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow-sm">

            <div class="card-body">

                <h6 class="text-muted">
                    Produk Unggulan
                </h6>

                <h2>
                    {{ $featuredProducts }}
                </h2>

            </div>

        </div>

    </div>

</div>

@endsection