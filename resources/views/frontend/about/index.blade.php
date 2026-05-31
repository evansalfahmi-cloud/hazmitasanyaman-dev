@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<section class="about-hero">

    <div class="container">

        <div class="about-hero-content">

            <span class="about-badge">
                Tentang Hazmi
            </span>

            <h1>
                Hazmi Tas Anyaman
            </h1>

            <p>
                Produsen tas anyaman berkualitas yang menghadirkan
                produk kerajinan dengan sentuhan tradisional dan desain modern.
            </p>

        </div>

    </div>

</section>


<section class="about-story">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <h2>
                    Siapa Kami?
                </h2>

                <p>
                    Hazmi Tas Anyaman merupakan usaha yang bergerak dalam
                    produksi tas anyaman berkualitas untuk kebutuhan fashion,
                    souvenir, dan berbagai kebutuhan lainnya.
                </p>

                <p>
                    Kami berkomitmen menghadirkan produk yang unik,
                    berkualitas, dan memiliki nilai seni tinggi sehingga
                    dapat digunakan untuk berbagai kesempatan.
                </p>

            </div>

            <div class="col-lg-6">

                <div class="about-image">
                    <img
                        src="{{ asset('image/products/hero-img.png') }}"
                        alt="Hazmi Tas Anyaman"
                        class="about-hero-image"
                    >

                </div>

            </div>

        </div>

    </div>

</section>


<section class="about-vision">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-6">

                <div class="about-card">

                    <h3>Visi</h3>

                    <p>
                        Menjadi produsen tas anyaman terpercaya yang mampu
                        menghadirkan produk berkualitas dan dikenal luas
                        oleh masyarakat Indonesia.
                    </p>

                </div>

            </div>

            <div class="col-md-6">

                <div class="about-card">

                    <h3>Misi</h3>

                    <ul>
                        <li>Menghasilkan produk berkualitas.</li>
                        <li>Mengutamakan kepuasan pelanggan.</li>
                        <li>Mengembangkan kerajinan lokal.</li>
                        <li>Meningkatkan inovasi desain produk.</li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="about-location">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Lokasi Kami
            </h2>

            <p>
                Kunjungi workshop dan lokasi produksi Hazmi Tas Anyaman.
            </p>

        </div>

        <div class="location-card">

            <div class="row">

                <div class="col-lg-6">

                    <h4>
                        Hazmi Tas Anyaman
                    </h4>

                    <p>
                        Produsen Tas Anyaman
                    </p>

                    <p>
                        RT 05 / RW 03<br>
                        Sumberejo<br>
                        Kabupaten Magetan<br>
                        Jawa Timur 63395
                    </p>

                    <p>
                        <strong>WhatsApp</strong><br>
                        0852-8760-4338
                    </p>

                    <a
                        href="https://maps.google.com/?q=HAZMI+TAS+ANYAMAN+Magetan"
                        target="_blank"
                        class="btn-about"
                    >
                        <i class="fa-solid fa-location-dot me-2"></i>
                        Buka Google Maps
                    </a>

                </div>

                <div class="col-lg-6">

                    <div class="about-map">
                    <iframe
                        src="https://www.google.com/maps?q=HAZMI+TAS+ANYAMAN+Magetan&output=embed"
                        width="100%"
                        height="350"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection