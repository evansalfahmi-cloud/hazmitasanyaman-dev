@extends('layouts.admin')

@section('title', 'Edit Kategori')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h1 class="fw-bold mb-1">
            Edit Kategori
        </h1>

        <p class="text-muted mb-0">
            Perbarui kategori produk Hazmi
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
            action="{{ route('admin.categories.update', $category) }}"
            method="POST"
        >

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Nama Kategori
                </label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    value="{{ old('name', $category->name) }}"
                    required
                >

            </div>

            <button
                type="submit"
                class="btn btn-hazmi"
            >
                <i class="fa-solid fa-pen-to-square me-2"></i>
                Update Kategori
            </button>

        </form>

    </div>

</div>

@endsection