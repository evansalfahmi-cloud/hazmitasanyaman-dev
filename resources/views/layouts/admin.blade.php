<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title', 'Admin Panel')</title>

@vite([
    'resources/css/app.css',
    'resources/js/app.js'
])
<div class="row min-vh-100">

    {{-- Sidebar --}}
    <div class="col-lg-2 col-md-3 sidebar p-0">

        <div class="p-4 text-center border-bottom">

            <img
                src="{{ asset('image/logo/logo.png') }}"
                width="80"
                class="img-fluid mb-3"
                alt="Hazmi"
            >

            <h5 class="mb-0 text-white">
                Admin Panel
            </h5>

        </div>

        <div class="nav flex-column p-3">

            <a
                href="{{ route('admin.dashboard') }}"
                class="nav-link py-3 {{ request()->routeIs('admin.dashboard') ? 'active' : 'text-white' }}"
            >
                <i class="fa-solid fa-gauge-high me-2"></i>
                Dashboard
            </a>

            <a
                href="{{ route('admin.products.index') }}"
                class="nav-link py-3 {{ request()->routeIs('admin.products.*') ? 'active' : 'text-white' }}"
            >
                <i class="fa-solid fa-box-open me-2"></i>
                Produk
            </a>

            <a
                href="{{ route('admin.categories.index') }}"
                class="nav-link py-3 {{ request()->routeIs('admin.categories.*') ? 'active' : 'text-white' }}"
            >
                <i class="fa-solid fa-layer-group me-2"></i>
                Kategori
            </a>

            <a
                href="{{ route('admin.testimoni.index') }}"
                class="nav-link text-white"
            >
                <i class="fa-solid fa-comments me-2"></i>
                Testimoni
            </a>

            <hr class="border-light opacity-50 my-3">

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

        </div>

    </div>

    {{-- Content --}}
    <div class="col-lg-10 col-md-9 bg-light">

        <div class="p-4">

            @yield('content')

        </div>

    </div>

</div>