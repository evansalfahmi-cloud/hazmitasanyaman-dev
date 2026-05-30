@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">


<div>
    <h1 class="fw-bold mb-1">
        Tambah Produk
    </h1>

    <p class="text-muted mb-0">
        Tambahkan produk baru ke katalog Hazmi
    </p>
</div>

<a
    href="{{ route('admin.products.index') }}"
    class="btn btn-outline-hazmi"
>
    <i class="fa-solid fa-arrow-left me-2"></i>
    Kembali
</a>

</div>

<div class="card border-0 shadow-sm">

<div class="card-body p-4">

    <form
        action="{{ route('admin.products.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf

        <div class="row">

            <div class="col-md-8">

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama Produk
                    </label>

                    <input
                        type="text"
                        name="title"
                        class="form-control"
                        placeholder="Masukkan nama produk"
                    >

                </div>

            </div>

            <div class="col-md-4">

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Kategori
                    </label>

                    <select
                        name="category_id"
                        class="form-select"
                    >

                        @foreach($categories as $category)

                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>

                        @endforeach

                    </select>

                </div>

            </div>

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">
                Deskripsi Produk
            </label>

            <textarea
                name="description"
                rows="5"
                class="form-control"
                placeholder="Deskripsi produk..."
            ></textarea>

        </div>

        <div class="row">

            <div class="col-md-4">

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Harga
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            Rp
                        </span>

                        <input
                            type="number"
                            name="price"
                            class="form-control"
                            placeholder="250000"
                        >

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Stok
                    </label>

                    <input
                        type="number"
                        name="stock"
                        class="form-control"
                        placeholder="10"
                    >

                </div>

            </div>

            <div class="col-md-4">

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Gambar Produk
                    </label>

                    <input
                        type="file"
                        name="image"
                        class="form-control"
                    >

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="form-check form-switch">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="is_featured"
                        value="1"
                    >

                    <label class="form-check-label">
                        Produk Unggulan
                    </label>

                </div>

            </div>

            <div class="col-md-6 text-md-end">

                <button
                    type="submit"
                    class="btn btn-hazmi px-4"
                >
                    <i class="fa-solid fa-floppy-disk me-2"></i>
                    Simpan Produk
                </button>

            </div>

        </div>

    </form>

</div>

</div>

@endsection
