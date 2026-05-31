@extends('layouts.app')

@section('title', 'Testimoni Pelanggan')

@section('content')

<section class="testimonial-hero">

    <div class="container text-center">

        <span class="hero-badge">
            <i class="fa-solid fa-star"></i>
            Testimoni Pelanggan
        </span>

        <h1>
            Apa Kata Pelanggan Kami?
        </h1>

        <p>
            Kepuasan pelanggan adalah prioritas utama Hazmi Tas Anyaman.
            Berikut beberapa ulasan dari pelanggan yang telah menggunakan produk kami.
        </p>

    </div>

</section>

<section class="testimonial-stats">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-3">

                <div class="stat-card">

                    <h2>150+</h2>

                    <span>Pelanggan</span>

                </div>

            </div>

            <div class="col-md-3">

                <div class="stat-card">

                    <h2>4.9</h2>

                    <span>Rating</span>

                </div>

            </div>

            <div class="col-md-3">

                <div class="stat-card">

                    <h2>100%</h2>

                    <span>Produk Handmade</span>

                </div>

            </div>

            <div class="col-md-3">

                <div class="stat-card">

                    <h2>5★</h2>

                    <span>Kepuasan Pelanggan</span>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="testimonial-section">

    <div class="container">

        <div class="section-heading text-center">

            <h2>Ulasan Pelanggan</h2>

            <p>
                Testimoni pelanggan yang telah mempercayakan kebutuhan tas anyaman kepada kami.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="testimonial-card">

                    <div class="stars">
                        ★★★★★
                    </div>

                    <p>
                        Tasnya sangat bagus, rapi dan kualitas anyamannya kuat.
                        Sangat cocok untuk acara keluarga maupun kondangan.
                    </p>

                    <h5>Siti Nurhaliza</h5>

                    <span>Magetan</span>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="testimonial-card">

                    <div class="stars">
                        ★★★★★
                    </div>

                    <p>
                        Pengiriman cepat dan hasil tas sesuai foto.
                        Sangat puas dengan pelayanan Hazmi Tas Anyaman.
                    </p>

                    <h5>Rina Wulandari</h5>

                    <span>Madiun</span>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="testimonial-card">

                    <div class="stars">
                        ★★★★★
                    </div>

                    <p>
                        Produk unik dan elegan.
                        Banyak teman yang bertanya beli tasnya di mana.
                    </p>

                    <h5>Dewi Anggraini</h5>

                    <span>Surabaya</span>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="testimonial-cta">

    <div class="container text-center">

        <h2>Sudah Menjadi Pelanggan Kami?</h2>

        <p>
            Bagikan pengalaman Anda menggunakan produk Hazmi Tas Anyaman.
        </p>

        <a href="https://wa.me/6281234567890"
           class="btn-testimonial"
           target="_blank">

            <i class="fa-brands fa-whatsapp me-2"></i>
            Kirim Testimoni

        </a>

    </div>

</section>

@endsection