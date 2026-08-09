@if(isset($products) && $products->count())

<section class="home-products-section py-5" dir="rtl">

    <div class="container">

        {{-- Section Header --}}
        <div class="text-center mb-5">

            <span class="products-badge">
                <i class="bi bi-stars"></i>
                منتجات مميزة
            </span>

            <h2 class="products-title">
                أفضل المنتجات
            </h2>

            <p class="products-description">
                اكتشف أفضل المنتجات المختارة من المتاجر المختلفة
            </p>

        </div>


        {{-- Products Carousel --}}
        <div id="homeProductsCarousel"
             class="carousel slide"
             data-bs-ride="carousel">

            <div class="carousel-inner">

                @foreach($products->chunk(4) as $chunkIndex => $productChunk)

                    <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">

                        <div class="row g-4">

                            @foreach($productChunk as $product)

                                <div class="col-lg-3 col-md-6">

                                    <div class="home-product-card">

                                        {{-- Image --}}
                                        <div class="home-product-image">

                                            @if($product->first_image)

                                                <img
                                                    src="{{ asset('uploads/' . $product->first_image) }}"
                                                    alt="{{ $product->name }}"
                                                >

                                            @else

                                                <div class="product-no-image">
                                                    <i class="bi bi-image"></i>
                                                </div>

                                            @endif


                                            {{-- Featured --}}
                                            @if($product->is_featured)

                                                <span class="product-featured">
                                                    <i class="bi bi-star-fill"></i>
                                                    مميز
                                                </span>

                                            @endif


                                            {{-- Discount --}}
                                            @if($product->discount_percentage)

                                                <span class="product-discount">
                                                    -{{ $product->discount_percentage }}%
                                                </span>

                                            @endif

                                        </div>


                                        {{-- Content --}}
                                        <div class="home-product-content">

                                            {{-- Category --}}
                                            @if($product->subcategory)

                                                <div class="product-category">
                                                    {{ $product->subcategory->name }}
                                                </div>

                                            @endif


                                            {{-- Product Name --}}
                                            <h3 class="home-product-name">
                                                {{ $product->name }}
                                            </h3>


                                            {{-- Store --}}
                                            @if($product->store)

                                                <div class="product-store">

                                                    <i class="bi bi-shop"></i>

                                                    {{ $product->store->name }}

                                                </div>

                                            @endif


                                            {{-- Price --}}
                                            <div class="product-price-box">

                                                <div class="product-price">

                                                    {{ number_format($product->price, 2) }}

                                                    <span>
                                                        جنيه
                                                    </span>

                                                </div>


                                                @if($product->old_price)

                                                    <div class="product-old-price">

                                                        {{ number_format($product->old_price, 2) }}

                                                        جنيه

                                                    </div>

                                                @endif

                                            </div>


                                            {{-- Buy Button --}}
                                            @if($product->affiliate_url && $product->store)

                                                <a
                                                    href="{{ $product->affiliate_url }}"
                                                    target="_blank"
                                                    rel="nofollow sponsored noopener"
                                                    class="home-product-btn"
                                                >

                                                    <i class="bi bi-cart-check"></i>

                                                    شراء من {{ $product->store->name }}

                                                    <i class="bi bi-arrow-left"></i>

                                                </a>

                                            @else

                                                <a
                                                    href="{{ route('products.show', $product->slug) }}"
                                                    class="home-product-btn"
                                                >

                                                    <i class="bi bi-eye"></i>

                                                    عرض المنتج

                                                    <i class="bi bi-arrow-left"></i>

                                                </a>

                                            @endif

                                        </div>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>

                @endforeach

            </div>


            {{-- Previous --}}
            @if($products->count() > 4)

                <button
                    class="carousel-control-prev home-carousel-control"
                    type="button"
                    data-bs-target="#homeProductsCarousel"
                    data-bs-slide="prev"
                >

                    <span class="carousel-control-icon">
                        <i class="bi bi-chevron-right"></i>
                    </span>

                </button>


                {{-- Next --}}
                <button
                    class="carousel-control-next home-carousel-control"
                    type="button"
                    data-bs-target="#homeProductsCarousel"
                    data-bs-slide="next"
                >

                    <span class="carousel-control-icon">
                        <i class="bi bi-chevron-left"></i>
                    </span>

                </button>

            @endif

        </div>


        {{-- All Products --}}
        <div class="text-center mt-5">

            <a
                href="{{ route('products.index') }}"
                class="all-products-btn"
            >

                مشاهدة جميع المنتجات

                <i class="bi bi-arrow-left"></i>

            </a>

        </div>

    </div>

</section>


<style>

.home-products-section {
    background: linear-gradient(
        180deg,
        #f8fbff 0%,
        #ffffff 100%
    );

    position: relative;
    overflow: hidden;
}

.products-badge {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    background: rgba(13, 110, 253, .08);

    color: #0d6efd;

    padding: 8px 18px;

    border-radius: 50px;

    font-size: 14px;

    font-weight: 700;

    margin-bottom: 15px;
}

.products-title {
    font-size: 38px;
    font-weight: 800;
    color: #071a35;
    margin-bottom: 12px;
}

.products-description {
    color: #6b7280;
    font-size: 16px;
}

.home-product-card {
    background: #fff;
    border-radius: 22px;
    overflow: hidden;
    border: 1px solid #edf1f7;
    height: 100%;

    transition: .35s ease;

    box-shadow:
        0 10px 35px rgba(0, 0, 0, .05);
}

.home-product-card:hover {
    transform: translateY(-8px);

    box-shadow:
        0 20px 45px rgba(0, 0, 0, .11);
}

.home-product-image {
    height: 250px;
    background: #f7f9fc;

    position: relative;

    display: flex;
    align-items: center;
    justify-content: center;

    overflow: hidden;
}

.home-product-image img {
    width: 100%;
    height: 100%;

    object-fit: contain;

    padding: 18px;

    transition: .4s ease;
}

.home-product-card:hover
.home-product-image img {
    transform: scale(1.06);
}

.product-no-image {
    font-size: 55px;
    color: #cbd5e1;
}

.product-featured {
    position: absolute;

    top: 15px;
    right: 15px;

    background: #071a35;
    color: #fff;

    padding: 7px 12px;

    border-radius: 50px;

    font-size: 12px;
    font-weight: 700;
}

.product-featured i {
    color: #ffc107;
    margin-left: 4px;
}

.product-discount {
    position: absolute;

    top: 15px;
    left: 15px;

    background: #dc3545;
    color: #fff;

    padding: 7px 11px;

    border-radius: 50px;

    font-size: 12px;
    font-weight: 700;
}

.home-product-content {
    padding: 20px;
}

.product-category {
    color: #0d6efd;

    font-size: 12px;
    font-weight: 700;

    margin-bottom: 8px;
}

.home-product-name {
    font-size: 18px;

    font-weight: 800;

    color: #071a35;

    line-height: 1.5;

    min-height: 54px;

    margin-bottom: 10px;
}

.product-store {
    color: #6b7280;

    font-size: 13px;

    margin-bottom: 15px;
}

.product-store i {
    color: #0d6efd;

    margin-left: 5px;
}

.product-price-box {
    display: flex;

    align-items: center;

    gap: 10px;

    margin-bottom: 18px;
}

.product-price {
    font-size: 21px;

    font-weight: 900;

    color: #0d6efd;
}

.product-price span {
    font-size: 12px;

    font-weight: 600;
}

.product-old-price {
    font-size: 13px;

    color: #9ca3af;

    text-decoration: line-through;
}

.home-product-btn {
    width: 100%;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    background:
        linear-gradient(
            135deg,
            #0d6efd,
            #084298
        );

    color: #fff;

    padding: 13px 15px;

    border-radius: 13px;

    text-decoration: none;

    font-size: 14px;

    font-weight: 800;

    transition: .3s ease;
}

.home-product-btn:hover {
    color: #fff;

    transform: translateY(-2px);

    box-shadow:
        0 8px 20px rgba(13, 110, 253, .25);
}

.home-carousel-control {
    width: 50px;
    height: 50px;

    top: 50%;

    transform: translateY(-50%);

    opacity: 1;
}

.carousel-control-prev {
    right: -25px;
    left: auto;
}

.carousel-control-next {
    left: -25px;
    right: auto;
}

.carousel-control-icon {
    width: 48px;
    height: 48px;

    display: flex;

    align-items: center;
    justify-content: center;

    background: #fff;

    color: #071a35;

    border-radius: 50%;

    box-shadow:
        0 8px 25px rgba(0,0,0,.12);

    font-size: 18px;
}

.all-products-btn {
    display: inline-flex;

    align-items: center;

    gap: 10px;

    color: #071a35;

    border: 2px solid #071a35;

    padding: 12px 25px;

    border-radius: 50px;

    text-decoration: none;

    font-weight: 800;

    transition: .3s ease;
}

.all-products-btn:hover {
    background: #071a35;
    color: #fff;
}

@media (max-width: 991px) {

    .products-title {
        font-size: 31px;
    }

    .home-product-image {
        height: 220px;
    }

}

@media (max-width: 767px) {

    .products-title {
        font-size: 27px;
    }

    .home-carousel-control {
        display: none;
    }

    .home-product-card {
        max-width: 420px;
        margin: auto;
    }

}

</style>

@endif