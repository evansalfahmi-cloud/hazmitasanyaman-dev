@extends('layouts.app')

@section('title', 'Promo')

@section('content')

<section class="promo-hero">

    <div class="container">

        <div class="promo-hero-content">

            <span class="promo-badge">
                Promo Hazmi
            </span>

            <h1>
                Promo & Penawaran Spesial
            </h1>

            <p>
                Dapatkan berbagai promo menarik untuk koleksi tas anyaman
                pilihan Hazmi Tas Anyaman.
            </p>

        </div>

    </div>

</section>


<section class="promo-section">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-4">

                <div class="promo-card">

                    <div class="promo-icon">

                        <i class="fa-solid fa-tags"></i>

                    </div>

                    <h4>
                        Diskon Produk
                    </h4>

                    <p>
                        Promo diskon produk akan segera tersedia
                        pada halaman ini.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="promo-card">

                    <div class="promo-icon">

                        <i class="fa-solid fa-gift"></i>

                    </div>

                    <h4>
                        Bonus Pembelian
                    </h4>

                    <p>
                        Dapatkan hadiah menarik untuk pembelian
                        produk tertentu.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="promo-card">

                    <div class="promo-icon">

                        <i class="fa-solid fa-truck-fast"></i>

                    </div>

                    <h4>
                        Gratis Ongkir
                    </h4>

                    <p>
                        Program gratis ongkir akan segera hadir
                        untuk wilayah tertentu.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="promo-coming-soon">

    <div class="container">

        <div class="coming-soon-card">

            <i class="fa-solid fa-bullhorn"></i>

            <h2>
                Halaman Promo Sedang Dikembangkan
            </h2>

            <p>
                Tim Hazmi Tas Anyaman sedang menyiapkan berbagai promo,
                diskon, voucher, dan penawaran spesial untuk pelanggan.
            </p>

            <a
                href="{{ route('products.index') }}"
                class="btn-promo"
            >
                Lihat Produk
            </a>

        </div>

    </div>

</section>

@endsection