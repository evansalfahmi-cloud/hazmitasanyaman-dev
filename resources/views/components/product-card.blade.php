@props([
    'product'
])
<div class="product-card">

    <!-- ======================================
         PRODUCT IMAGE
    ======================================= -->
        <div class="product-image">

           <img
                src="{{ asset('image/products/' . $product->image) }}"
                alt="{{ $product->title }}"
                onerror="this.onerror=null;this.src='{{ asset('image/products/no-img.jpg') }}';"
            >

            <span class="product-badge">

                {{ $product->category->name }}

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

            {{ $product->title }}
        </h4>

        <!-- Product Price -->
        <div class="product-price">

            Rp {{ number_format($product->price, 0, ',', '.') }}

        </div>

        <!-- Product Buttons -->
        <div class="product-buttons">

            @auth

    <!-- Keranjang -->
           <form
                action="{{ route('cart.add', $product) }}"
                method="POST"
                style="flex:1;"
            >
                @csrf

                <button
                    type="submit"
                    class="btn-detail w-100"
                >
                    <i class="fa-solid fa-cart-shopping me-1"></i>
                    Keranjang
                </button>

            </form>
                <!-- WhatsApp -->
                <a
                    href="{{ route('cart.index') }}"
                    class="btn-whatsapp"
                >

                    <i class="fa-brands fa-whatsapp"></i>
                    WhatsApp
                </a>

            @else

                <!-- Keranjang -->
                <a
                    href="{{ route('login') }}"
                    class="btn-detail"
                >

                    <i class="fa-solid fa-cart-shopping me-1"></i>

                    Keranjang

                </a>

                <!-- WhatsApp -->
                <a
                    href="{{ route('login') }}"
                    class="btn-whatsapp"
                    title="Login terlebih dahulu"
                >

                    <i class="fa-brands fa-whatsapp"></i>
                    WhatsApp
                </a>

            @endauth

        </div>

    </div>

</div>