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

<div class="card border-0 shadow-sm">


<div class="card-body">

    <div class="table-responsive">

        <table class="table align-middle">

            <thead>

                <tr>

                    <th width="90">
                        Gambar
                    </th>

                    <th>
                        Produk
                    </th>

                    <th width="150">
                        Kategori
                    </th>

                    <th width="150">
                        Harga
                    </th>

                    <th width="100">
                        Stok
                    </th>

                    <th width="120">
                        Unggulan
                    </th>

                    <th width="120">
                        Status
                    </th>

                    <th width="150">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($products as $product)

                    <tr>

                        <td>

                            @if($product->image)

                                <img
                                    src="{{ asset('storage/' . $product->image) }}"
                                    alt="{{ $product->title }}"
                                    class="rounded border"
                                    width="60"
                                    height="60"
                                    style="object-fit: cover;"
                                >

                            @else

                                <div
                                    class="bg-light border rounded d-flex align-items-center justify-content-center"
                                    style="width:60px;height:60px;"
                                >
                                    <i class="fa-solid fa-image text-muted"></i>
                                </div>

                            @endif

                        </td>

                        <td>

                            <div class="fw-semibold">
                                {{ $product->title }}
                            </div>

                            <small class="text-muted">
                                ID: {{ $product->id }}
                            </small>

                        </td>

                        <td>

                            <span class="badge-hazmi">
                                {{ $product->category->name }}
                            </span>

                        </td>

                        <td class="fw-semibold">

                            Rp {{ number_format($product->price, 0, ',', '.') }}

                        </td>

                        <td>

                            {{ $product->stock }}

                        </td>

                        <td>

                            @if($product->is_featured)

                                <span class="badge bg-success">
                                    Ya
                                </span>

                            @else

                                <span class="badge bg-secondary">
                                    Tidak
                                </span>

                            @endif

                        </td>

                        <td>

                            @if($product->is_active)

                                <span class="badge bg-success">
                                    Aktif
                                </span>

                            @else

                                <span class="badge bg-danger">
                                    Nonaktif
                                </span>

                            @endif

                        </td>

                        <td>

                            <div class="d-flex gap-2">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-hazmi-outline"
                                >
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-danger"
                                >
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="8"
                            class="text-center py-5"
                        >

                            <i
                                class="fa-solid fa-box-open fa-2x text-muted mb-3"
                            ></i>

                            <div>
                                Belum ada produk
                            </div>

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>


</div>

@endsection
