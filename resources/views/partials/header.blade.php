@php
    use Illuminate\Support\Facades\Auth;
@endphp

<div class="header-wrapper">

    <div class="container">

        <div class="header-inner">

            <!-- ======================================
                 LOGO
            ======================================= -->
            <div class="header-logo">

                <div class="logo-image">

                    <img
                        src="{{ asset('image/logo/logo.png') }}"
                        alt="Hazmi Tas Anyaman"
                    >

                </div>

                <div class="logo-text">

                    <h2>
                        HAZMI
                    </h2>

                    <span>
                        TAS ANYAMAN
                    </span>

                </div>

            </div>


            <!-- ======================================
                 SEARCH BAR
            ======================================= -->
            <div class="header-search">

                <form
                    action="{{ route('products.index') }}"
                    method="GET"
                >

                    <div class="search-box">

                        <select
                            name="category"
                            class="form-select search-category"
                        >

                            <option value="">
                            Semua Kategori
                            </option>

                            <option value="tas-anyaman">
                                Tas Anyaman
                            </option>

                            <option value="tas-fashion">
                                Tas Fashion
                            </option>
                        </select>

                        <input
                                type="text"
                                name="search"
                                class="form-control search-input"
                                placeholder="Cari produk..."
                                value="{{ request('search') }}"
                            >

                        <button
                            type="submit"
                            class="search-button"
                        >

                            <i class="fa-solid fa-magnifying-glass"></i>

                            <span>
                                Cari
                            </span>

                        </button>

                    </div>

                </form>

            </div>


            <!-- ======================================
                 ACCOUNT & CART
            ======================================= -->
            <div class="header-actions">

                @auth

                    <div class="dropdown">

                        <a
                            href="#"
                            class="header-account text-decoration-none"
                            data-bs-toggle="dropdown"
                        >

                            <div class="header-icon">

                                <i class="fa-regular fa-user"></i>

                            </div>

                            <div class="header-info">

                                <small>

                                    {{ Auth::user()->name }}

                                </small>

                                <span>

                                    {{ Auth::user()->role === 'admin' ? 'Admin' : 'Customer' }}

                                </span>

                            </div>

                        </a>

                        <ul class="dropdown-menu dropdown-menu-end shadow border-0">

                            @if(Auth::user()->role === 'admin')

                                <li>

                                    <a
                                        class="dropdown-item"
                                        href="{{ route('admin.dashboard') }}"
                                    >
                                        <i class="fa-solid fa-gauge-high me-2"></i>
                                        Dashboard Admin
                                    </a>

                                </li>

                            @else

                                <li>

                                    <a
                                        class="dropdown-item"
                                        href="#"
                                    >
                                        <i class="fa-solid fa-user me-2"></i>
                                        Akun Saya
                                    </a>

                                </li>

                                <li>

                                    <a
                                        class="dropdown-item"
                                        href="#"
                                    >
                                        <i class="fa-solid fa-bag-shopping me-2"></i>
                                        Riwayat Pesanan
                                    </a>

                                </li>

                            @endif

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>

                                <form
                                    action="{{ route('logout') }}"
                                    method="POST"
                                >

                                    @csrf

                                    <button
                                        type="submit"
                                        class="dropdown-item text-danger"
                                    >
                                        <i class="fa-solid fa-right-from-bracket me-2"></i>
                                        Logout
                                    </button>

                                </form>

                            </li>

                        </ul>

                    </div>

                @else

                    <a
                        href="{{ route('login') }}"
                        class="header-account"
                    >

                        <div class="header-icon">

                            <i class="fa-regular fa-user"></i>

                        </div>

                        <div class="header-info">

                            <small>

                                Masuk / Daftar

                            </small>

                            <span>

                                Akun Saya

                            </span>

                        </div>

                    </a>

                @endauth


                <!-- Cart -->
                <a
                    href="#"
                    class="header-cart position-relative"
                >

                    <div class="header-icon">

                        <i class="fa-solid fa-cart-shopping"></i>

                    </div>

                    <div class="header-info">

                        <span>

                            Keranjang

                        </span>

                    </div>

                    <div class="cart-badge">

                        0

                    </div>

                </a>

            </div>

        </div>

    </div>

</div>