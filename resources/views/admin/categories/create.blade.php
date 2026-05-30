@extends('layouts.admin')

@section('title', 'Tambah Kategori')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h1 class="fw-bold mb-1">
            Tambah Kategori
        </h1>

        <p class="text-muted mb-0">
            Tambahkan kategori baru
        </p>

    </div>

    <a
        href="{{ route('admin.categories.index') }}"
        class="btn btn-outline-hazmi"
    >
        <i class="fa-solid fa-arrow-left me-2"></i>
        Kembali
    </a>

</div>

<div class="card border-0 shadow-sm">

    <div class="card-body p-4">

        <form
            action="{{ route('admin.categories.store') }}"
            method="POST"
        >

            @csrf

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Nama Kategori
                </label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Contoh: Dompet"
                    required
                >

            </div>

            <button
                type="submit"
                class="btn btn-hazmi"
            >
                <i class="fa-solid fa-floppy-disk me-2"></i>
                Simpan Kategori
            </button>

        </form>

    </div>

</div>

@endsection