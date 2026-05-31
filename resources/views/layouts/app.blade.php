<!DOCTYPE html>
<html lang="en">

<head>

    {{-- Meta --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Favicon -->
    <link
        rel="icon"
        type="image/png"
        href="{{ asset('image/logo/logo.png') }}"
    >

    {{-- Title --}}
    <title>@yield('title', 'Hazmi Tas Anyaman')</title>

    {{-- Vite Assets --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body>

    {{-- Topbar --}}
    @include('partials.topbar')

    {{-- Header --}}
    @include('partials.header')

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main Content --}}
    <main>

        @yield('content')

    </main>

    {{-- Footer --}}
    @include('partials.footer')

@if(session('success'))

<div id="toast-success" class="hazmi-toast">

    <div class="toast-check">
        <i class="fa-solid fa-check"></i>
    </div>

    <div class="toast-message">
        {{ session('success') }}
    </div>

</div>

<script>

document.addEventListener('DOMContentLoaded', function () {

    setTimeout(() => {

        let toast = document.getElementById('toast-success');

        if (toast) {

            toast.classList.add('hide');

            setTimeout(() => {

                toast.remove();

            }, 500);
        }

    }, 1800);

});

</script>

@endif

</body>

</html>