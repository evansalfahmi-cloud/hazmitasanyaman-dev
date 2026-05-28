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

<body
    style="
        background-color:#F6F1E9;
        font-family:'Figtree',sans-serif;
    "
>

    <div class="container">

        <div
            class="row justify-content-center align-items-center"
            style="min-height:100vh;"
        >

            <div class="col-lg-4 col-md-6">

                <div
                    class="card border-0 shadow-lg"
                    style="
                        border-radius:24px;
                        overflow:hidden;
                    "
                >

                    <div class="card-body p-5">

                        <!-- Logo -->
                        <div class="text-center mb-4">

                            <a href="{{ url('/') }}">

                                <img
                                    src="{{ asset('image/logo/logo.png') }}"
                                    alt="Hazmi Tas Anyaman"
                                    style="
                                        width:90px;
                                        height:auto;
                                    "
                                >

                            </a>

                            <h2
                                class="fw-bold mt-3 mb-1"
                                style="color:#9B5A3C;"
                            >
                                HAZMI
                            </h2>

                            <p
                                class="mb-0"
                                style="
                                    color:#B67C5A;
                                    letter-spacing:4px;
                                    font-size:14px;
                                "
                            >
                                TAS ANYAMAN
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