<div class="p-4 text-center border-bottom">

    <img
        src="{{ asset('image/logo/logo.png') }}"
        alt="Hazmi Logo"
        class="img-fluid mb-3"
        width="80"
    >

    <h5 class="fw-bold text-white mb-0">
        Admin Panel
    </h5>

    <small class="text-light">
        Hazmi Tas Anyaman
    </small>

</div>

<nav class="nav flex-column p-3">

    <a
        href="{{ route('admin.dashboard') }}"
        class="nav-link text-white py-3"
    >
        <i class="fa-solid fa-gauge-high me-2"></i>
        Dashboard
    </a>

    <a
        href="#"
        class="nav-link text-white py-3"
    >
        <i class="fa-solid fa-box-open me-2"></i>
        Produk
    </a>

    <a
        href="#"
        class="nav-link text-white py-3"
    >
        <i class="fa-solid fa-layer-group me-2"></i>
        Kategori
    </a>

    <a
        href="#"
        class="nav-link text-white py-3"
    >
        <i class="fa-solid fa-star me-2"></i>
        Produk Unggulan
    </a>

    <a
        href="#"
        class="nav-link text-white py-3"
    >
        <i class="fa-solid fa-comments me-2"></i>
        Testimoni
    </a>

    <a
        href="#"
        class="nav-link text-white py-3"
    >
        <i class="fa-solid fa-newspaper me-2"></i>
        Blog
    </a>

    <a
        href="#"
        class="nav-link text-white py-3"
    >
        <i class="fa-solid fa-users me-2"></i>
        Pengguna
    </a>

    <hr class="border-light">

    <form
        action="{{ route('logout') }}"
        method="POST"
    >
        @csrf

        <button
            type="submit"
            class="btn btn-light w-100 fw-semibold"
        >
            <i class="fa-solid fa-right-from-bracket me-2"></i>
            Logout
        </button>

    </form>

</nav>