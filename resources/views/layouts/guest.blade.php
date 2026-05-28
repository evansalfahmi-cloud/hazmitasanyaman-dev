<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Hazmi Tas Anyaman') }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet"
    />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-[#F6F1E9]">

    <div class="min-h-screen flex items-center justify-center px-4">

        <!-- Card -->
        <div class="w-full max-w-md bg-white rounded-3xl shadow-xl p-8">

            <!-- Logo -->
            <div class="text-center mb-8">

                <a href="/">

                    <img
                        src="{{ asset('image/logo/logo.png') }}"
                        alt="Hazmi Tas Anyaman"
                        class="w-24 mx-auto mb-4"
                    >

                </a>

                <h1 class="text-3xl font-bold text-[#9B5A3C]">

                    HAZMI

                </h1>

                <p class="text-sm tracking-[4px] text-[#B67C5A] mt-1">

                    TAS ANYAMAN

                </p>

            </div>

            <!-- Form Content -->
            {{ $slot }}

        </div>

    </div>

</body>

</html>