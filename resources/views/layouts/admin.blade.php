<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Panel')</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body>

<div class="container-fluid">

    <div class="row min-vh-100">

        {{-- Sidebar --}}
        <div class="col-lg-2 col-md-3 bg-dark text-white p-0">

            <div class="p-3 text-center border-bottom">

                <img
                    src="{{ asset('image/logo/logo.png') }}"
                    width="80"
                    class="img-fluid mb-3"
                    alt="Hazmi"
                >

                <h5 class="mb-0">
                    Admin Panel
                </h5>

            </div>

            <div class="nav flex-column p-3">

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="nav-link text-white"
                >
                    Dashboard
                </a>

                <a
                    href="#"
                    class="nav-link text-white"
                >
                    Produk
                </a>

                <a
                    href="#"
                    class="nav-link text-white"
                >
                    Kategori
                </a>

                <a
                    href="#"
                    class="nav-link text-white"
                >
                    Testimoni
                </a>

                <hr>

                <form
                    action="{{ route('logout') }}"
                    method="POST"
                >
                    @csrf

                    <button
                        type="submit"
                        class="btn btn-light w-100"
                    >
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

</div>

</body>

</html>