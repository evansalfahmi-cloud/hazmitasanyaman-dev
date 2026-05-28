<div class="product-card">

    <!-- ======================================
         PRODUCT IMAGE
    ======================================= -->
        <div class="product-image">

            <img
                src="{{ $image ? $image : asset('image/products/no-img.jpg') }}"
                alt="{{ $title }}"
                onerror="this.onerror=null;this.src='{{ asset('image/products/no-img.jpg') }}';"
            >

            <span class="product-badge">

                {{ $category }}

            </span>

        </div>

    <!-- ======================================
         PRODUCT CONTENT
    ======================================= -->
    <div class="product-content">

        <!-- Product Rating -->
        <div class="product-rating">

            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>

            <span>
                4.8
            </span>

        </div>

        <!-- Product Title -->
        <h4 class="product-title">

            {{ $title }}

        </h4>

        <!-- Product Price -->
        <div class="product-price">

            {{ $price }}

        </div>

        <!-- Product Buttons -->
        <div class="product-buttons">

            <!-- Detail Button -->
            <a href="#" class="btn-detail">

                Detail

            </a>

            <!-- WhatsApp Button -->
            <a href="#" class="btn-whatsapp">

                <i class="fa-brands fa-whatsapp"></i>

            </a>

        </div>

    </div>

</div>