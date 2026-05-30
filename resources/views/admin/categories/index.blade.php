@extends('layouts.admin')

@section('title', 'Kategori')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="fw-bold mb-1">
            Daftar Kategori
        </h1>

        <p class="text-muted mb-0">
            Kelola seluruh kategori produk Hazmi
        </p>
    </div>

    <a
        href="{{ route('admin.categories.create') }}"
        class="btn btn-hazmi"
    >
        <i class="fa-solid fa-plus me-2"></i>
        Tambah Kategori
    </a>

</div>

@if(session('success'))

<div class="alert alert-success alert-dismissible fade show">
    {{ session('success') }}

    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert"
    ></button>
</div>

@endif

<div class="card border-0 shadow-sm">

    <div class="card-body p-0">

        <table class="table align-middle mb-0">

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Slug</th>
                    <th>Jumlah Produk</th>
                    <th width="150">Aksi</th>
                </tr>

            </thead>

            <tbody>

                @forelse($categories as $category)

                <tr>

                    <td>
                        {{ $category->id }}
                    </td>

                    <td>
                        <strong>
                            {{ $category->name }}
                        </strong>
                    </td>

                    <td>
                        {{ $category->slug }}
                    </td>

                    <td>
                        <span class="badge bg-secondary">
                            {{ $category->products_count }}
                        </span>
                    </td>

                    <td>

                        <div class="d-flex gap-2">

                            <a
                                href="{{ route('admin.categories.edit', $category) }}"
                                class="btn btn-sm btn-outline-warning"
                            >
                                <i class="fa-solid fa-pen"></i>
                            </a>

                            <form
                                action="{{ route('admin.categories.destroy', $category) }}"
                                method="POST"
                                onsubmit="return confirm('Hapus kategori ini?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-sm btn-outline-danger"
                                >
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5" class="text-center py-4">
                        Belum ada kategori
                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection