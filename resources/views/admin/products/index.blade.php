@extends('layouts.admin')

@section('title', 'Produk')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h1 class="fw-bold mb-1">
            Daftar Produk
        </h1>

        <p class="text-muted mb-0">
            Kelola seluruh katalog produk Hazmi
        </p>

    </div>

    <a
        href="{{ route('admin.products.create') }}"
        class="btn btn-hazmi"
    >
        <i class="fa-solid fa-plus me-2"></i>
        Tambah Produk
    </a>

</div>

<div class="card">

    <div class="card-body">

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                </tr>
            </thead>

            <tbody>

                @forelse($products as $product)

                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="4" class="text-center">
                            Belum ada produk
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection