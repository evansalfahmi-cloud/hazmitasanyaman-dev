<section class="featured-products-section">

    <div class="container">

        <!-- ======================================
             SECTION HEADER
        ======================================= -->
        <div class="section-header d-flex justify-content-between align-items-center mb-4">

            <div>

                <h2 class="section-title">

                    Produk Unggulan

                </h2>

                <p class="section-subtitle">

                    Koleksi pilihan terbaik Hazmi Tas Anyaman

                </p>

            </div>

            <a href="#" class="section-link">

                Lihat Semua

                <i class="fa-solid fa-arrow-right ms-2"></i>

            </a>

        </div>


        <!-- ======================================
             PRODUCT GRID
        ======================================= -->
        <div class="row g-4">

            <!-- Product 1 -->
            <div class="col-lg-3 col-md-6">

                <x-product-card
                    image="{{ asset('images/products/tas-anyaman-1.jpg') }}"
                    title="Tas Anyaman Natural"
                    category="Tas Anyaman"
                    price="Rp 250.000"
                />

            </div>

            <!-- Product 2 -->
            <div class="col-lg-3 col-md-6">

                <x-product-card
                    image="{{ asset('images/products/tas-anyaman-2.jpg') }}"
                    title="Tas Anyaman Premium"
                    category="Tas Anyaman"
                    price="Rp 320.000"
                />

            </div>

            <!-- Product 3 -->
            <div class="col-lg-3 col-md-6">

                <x-product-card
                    image="{{ asset('images/products/tas-fashion-1.jpg') }}"
                    title="Tas Fashion Casual"
                    category="Tas Fashion"
                    price="Rp 280.000"
                />

            </div>

            <!-- Product 4 -->
            <div class="col-lg-3 col-md-6">

                <x-product-card
                    image="{{ asset('images/products/tas-fashion-2.jpg') }}"
                    title="Tas Fashion Modern"
                    category="Tas Fashion"
                    price="Rp 350.000"
                />

            </div>

        </div>

    </div>

</section>