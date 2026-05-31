<nav class="navbar navbar-expand-lg navbar-main">

    <div class="container">

        <!-- ======================================
             MOBILE TOGGLER
        ======================================= -->
        <button
            class="navbar-toggler border-0 shadow-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >

            <i class="fa-solid fa-bars text-white"></i>

        </button>

        <!-- ======================================
             NAVBAR MENU
        ======================================= -->
        <div
            class="collapse navbar-collapse"
            id="mainNavbar"
        >

            <ul class="navbar-nav mx-auto gap-lg-4">

                <li class="nav-item">

                    <a
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}"
                    >
                        Beranda
                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}"
                        href="{{ route('products.index') }}"
                    >
                        Produk
                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('promo') }}">
                    
                        Promo
                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('about') }}"
                    >
                        Tentang Kami
                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="#"
                    >
                        Testimoni
                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="#"
                    >
                        Blog
                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="#"
                    >
                        Kontak
                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>
