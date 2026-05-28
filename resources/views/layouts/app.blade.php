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

</body>

</html>