<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        Login | Hazmi Tas Anyaman
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet"
    >

    <!-- Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="hazmi-login-page">

    <div class="container">

        <div class="row justify-content-center align-items-center hazmi-login-wrapper">

            <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10">

                <div class="card shadow-lg hazmi-login-card">

                    <div class="card-body p-5">

                        <!-- Logo -->
                        <div class="text-center mb-4">

                            <a href="{{ url('/') }}">

                                <img
                                    src="{{ asset('image/logo/logo.png') }}"
                                    alt="Hazmi Tas Anyaman"
                                    class="hazmi-login-logo"
                                >

                            </a>

                            <h2 class="hazmi-login-title mt-3 mb-1">

                                HAZMI

                            </h2>

                            <p class="hazmi-login-subtitle">

                                TAS ANYAMAN

                            </p>

                            <p class="hazmi-login-description">

                                Silakan Login Terlebih Dahulu

                            </p>

                        </div>

                        <!-- Form -->
                        {{ $slot }}

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
