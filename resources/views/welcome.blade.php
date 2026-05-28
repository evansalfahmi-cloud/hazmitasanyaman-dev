<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hazmi Tas Anyaman</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <!-- =========================
         NAVBAR
    ========================== -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">

        <div class="container">

            <a class="navbar-brand fw-bold" href="#">
                <i class="fa-solid fa-bag-shopping me-2"></i>
                Hazmi Tas Anyaman
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Produk
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Tentang
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Kontak
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!-- =========================
         HERO SECTION
    ========================== -->
    <section class="py-5 bg-light">

        <div class="container">

            <div class="row align-items-center">

                <!-- Text -->
                <div class="col-lg-6 mb-4">

                    <h1 class="fw-bold display-5">
                        Tas Anyaman Handmade
                        Berkualitas Premium
                    </h1>

                    <p class="text-muted mt-3">

                        Produk tas anyaman elegan dengan desain modern,
                        cocok digunakan untuk aktivitas sehari-hari
                        maupun fashion premium.

                    </p>

                    <div class="mt-4">

                        <a href="#"
                           class="btn btn-dark btn-lg me-2">

                            <i class="fa-solid fa-cart-shopping me-2"></i>
                            Belanja Sekarang

                        </a>

                        <a href="#"
                           class="btn btn-outline-dark btn-lg">

                            <i class="fa-solid fa-phone me-2"></i>
                            Hubungi Kami

                        </a>

                    </div>

                </div>

                <!-- Image -->
                <div class="col-lg-6 text-center">

                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff"
                         class="img-fluid rounded shadow"
                         alt="Tas Anyaman">

                </div>

            </div>

        </div>

    </section>

    <!-- =========================
         FEATURES
    ========================== -->
    <section class="py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">
                    Kenapa Memilih Kami?
                </h2>

                <p class="text-muted">
                    Produk berkualitas dengan pelayanan terbaik.
                </p>

            </div>

            <div class="row g-4">

                <!-- Feature 1 -->
                <div class="col-md-4">

                    <div class="card border-0 shadow h-100">

                        <div class="card-body text-center p-4">

                            <i class="fa-solid fa-gem
                                      fa-3x
                                      text-primary
                                      mb-4"></i>

                            <h5 class="fw-bold">
                                Kualitas Premium
                            </h5>

                            <p class="text-muted">

                                Menggunakan bahan berkualitas
                                dengan proses handmade terbaik.

                            </p>

                        </div>

                    </div>

                </div>

                <!-- Feature 2 -->
                <div class="col-md-4">

                    <div class="card border-0 shadow h-100">

                        <div class="card-body text-center p-4">

                            <i class="fa-solid fa-truck-fast
                                      fa-3x
                                      text-success
                                      mb-4"></i>

                            <h5 class="fw-bold">
                                Pengiriman Cepat
                            </h5>

                            <p class="text-muted">

                                Pengiriman aman dan cepat
                                ke seluruh Indonesia.

                            </p>

                        </div>

                    </div>

                </div>

                <!-- Feature 3 -->
                <div class="col-md-4">

                    <div class="card border-0 shadow h-100">

                        <div class="card-body text-center p-4">

                            <i class="fa-solid fa-headset
                                      fa-3x
                                      text-danger
                                      mb-4"></i>

                            <h5 class="fw-bold">
                                Support Ramah
                            </h5>

                            <p class="text-muted">

                                Tim kami siap membantu
                                kebutuhan pelanggan Anda.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- =========================
         CTA SECTION
    ========================== -->
    <section class="py-5 bg-dark text-white">

        <div class="container text-center">

            <h2 class="fw-bold">
                Mulai Belanja Sekarang
            </h2>

            <p class="mt-3">

                Temukan berbagai tas anyaman premium
                dengan desain elegan dan modern.

            </p>

            <a href="#"
               class="btn btn-light btn-lg mt-3">

                <i class="fa-solid fa-store me-2"></i>
                Lihat Produk

            </a>

        </div>

    </section>

    <!-- =========================
         FOOTER
    ========================== -->
    <footer class="bg-black text-white py-4">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <h5 class="fw-bold">
                        Hazmi Tas Anyaman
                    </h5>

                    <p class="text-secondary mb-0">

                        Produk handmade berkualitas premium.

                    </p>

                </div>

                <div class="col-md-6 text-md-end mt-3 mt-md-0">

                    <a href="#"
                       class="text-white me-3">

                        <i class="fa-brands fa-instagram fa-lg"></i>

                    </a>

                    <a href="#"
                       class="text-white me-3">

                        <i class="fa-brands fa-facebook fa-lg"></i>

                    </a>

                    <a href="#"
                       class="text-white">

                        <i class="fa-brands fa-whatsapp fa-lg"></i>

                    </a>

                </div>

            </div>

        </div>

    </footer>

</body>
</html>