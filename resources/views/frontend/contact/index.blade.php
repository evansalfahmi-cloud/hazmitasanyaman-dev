@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<section class="contact-hero">

    <div class="container text-center">

        <span class="hero-badge">
            <i class="fa-solid fa-phone"></i>
            Hubungi Kami
        </span>

        <h1>Kontak Hazmi Tas Anyaman</h1>

        <p>
            Kami siap membantu kebutuhan tas anyaman Anda.
        </p>

    </div>

</section>

<section class="contact-section">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-5">

                <div class="contact-info-card">

                    <h3>Informasi Kontak</h3>

                    <div class="contact-item">

                        <i class="fa-solid fa-location-dot"></i>

                        <div>
                            <strong>Alamat</strong>

                            <p>
                                Sumberejo RT 05 RW 03,
                                Desa Sumberejo,
                                Kecamatan Ginuk,
                                Kabupaten Magetan,
                                Jawa Timur 63395
                            </p>

                        </div>

                    </div>

                    <div class="contact-item">

                        <i class="fa-solid fa-phone"></i>

                        <div>

                            <strong>Telepon</strong>

                            <p>0852-8760-4338</p>

                        </div>

                    </div>

                    <div class="contact-item">

                        <i class="fa-brands fa-whatsapp"></i>

                        <div>

                            <strong>WhatsApp</strong>

                            <p>0852-8760-4338</p>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-7">

                <div class="contact-map">

                    <iframe
                        src="https://www.google.com/maps?q=HAZMI+TAS+ANYAMAN+Magetan&output=embed"
                        width="100%"
                        height="450"
                        style="border:0;"
                        loading="lazy">
                    </iframe>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection