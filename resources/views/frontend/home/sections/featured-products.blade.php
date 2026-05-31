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

            @foreach($products as $product)

                <div class="col-lg-3 col-md-6">

                    <x-product-card
                        :product="$product"
                    />

                </div>

            @endforeach

        </div>

    </div>

</section>