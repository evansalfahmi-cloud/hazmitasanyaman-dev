@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<section class="blog-hero">

    <div class="container text-center">

        <span class="hero-badge">
            <i class="fa-solid fa-newspaper"></i>
            Artikel & Informasi
        </span>

        <h1>Blog Hazmi Tas Anyaman</h1>

        <p>
            Temukan berbagai informasi mengenai tas anyaman,
            fashion, tips perawatan tas, dan cerita inspiratif dari UMKM Hazmi.
        </p>

    </div>

</section>

<section class="blog-section">

    <div class="container">

        <div class="row g-4">

            @for($i = 1; $i <= 6; $i++)

            <div class="col-lg-4">

                <div class="blog-card">

                    <div class="blog-image">

                        <i class="fa-solid fa-image"></i>

                    </div>

                    <div class="blog-body">

                        <span class="blog-category">
                            Artikel
                        </span>

                        <h4>
                            Halaman Blog Sedang Dalam Pengembangan
                        </h4>

                        <p>
                            Nantinya artikel terbaru akan tampil pada bagian ini.
                        </p>

                        <a href="#">
                            Baca Selengkapnya →
                        </a>

                    </div>

                </div>

            </div>

            @endfor

        </div>

    </div>

</section>

@endsection