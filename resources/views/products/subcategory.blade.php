@extends('layouts.app')

@section('content')

<style> /* ========================================= SUBCATEGORY PAGE ========================================= */ .subcategory-page{ direction:rtl; background:#f7f9fc; padding:70px 0 90px; } /* ========================================= HERO ========================================= */ .subcategory-hero{ position:relative; overflow:hidden; background: radial-gradient(circle at 85% 15%,rgba(0,180,255,.18),transparent 30%), radial-gradient(circle at 10% 90%,rgba(13,110,253,.18),transparent 30%), linear-gradient(135deg,#071a35,#0d3b66); border-radius:30px; padding:45px; color:#fff; margin-bottom:35px; box-shadow:0 20px 50px rgba(7,26,53,.14); } .subcategory-hero:before{ content:""; position:absolute; width:420px; height:420px; border:1px solid rgba(255,255,255,.06); border-radius:50%; left:-180px; bottom:-240px; } .subcategory-breadcrumb{ position:relative; z-index:2; margin-bottom:18px; font-size:13px; } .subcategory-breadcrumb a{ color:#bcd5ec; text-decoration:none; } .subcategory-breadcrumb a:hover{ color:#fff; } .subcategory-breadcrumb span{ color:#7894ad; margin:0 7px; } .subcategory-label{ display:inline-flex; align-items:center; gap:7px; background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.12); color:#d9efff; padding:8px 15px; border-radius:30px; font-size:12px; font-weight:800; margin-bottom:15px; backdrop-filter:blur(10px); } .subcategory-hero h1{ position:relative; z-index:2; font-size:40px; font-weight:900; line-height:1.35; margin-bottom:12px; } .subcategory-description{ position:relative; z-index:2; color:#d6e6f4; max-width:700px; font-size:15px; line-height:1.9; margin:0; } /* ========================================= SEARCH ========================================= */ .subcategory-search-wrapper{ position:relative; z-index:2; } .subcategory-search{ width:100%; height:54px; border:0; border-radius:15px; outline:0; padding:0 20px 0 58px; font-size:14px; box-shadow:0 12px 35px rgba(0,0,0,.14); } .subcategory-search:focus{ box-shadow:0 12px 35px rgba(0,0,0,.18), 0 0 0 3px rgba(13,110,253,.15); } .subcategory-search-btn{ position:absolute; left:7px; top:7px; width:40px; height:40px; border:0; border-radius:11px; background:#0d6efd; color:#fff; } /* ========================================= PRODUCTS HEADER ========================================= */ .products-header{ background:#fff; border:1px solid #edf1f6; border-radius:20px; padding:18px 20px; margin-bottom:25px; } .section-title{ font-weight:900; color:#10243e; margin:0; font-size:25px; } .section-title i{ margin-left:7px; } .products-count{ color:#8491a1; font-size:13px; } .products-count strong{ color:#172b4d; font-weight:900; } /* ========================================= PRODUCT CARD ========================================= */ .product-card{ background:#fff; border-radius:24px; overflow:hidden; height:100%; border:1px solid #edf0f5; transition:.35s; position:relative; } .product-card:hover{ transform:translateY(-8px); box-shadow:0 20px 45px rgba(13,42,76,.12); } .product-image{ height:245px; background:#f8fafc; display:flex; align-items:center; justify-content:center; padding:20px; position:relative; } .product-image img{ width:100%; height:100%; object-fit:contain; transition:.4s; } .product-card:hover .product-image img{ transform:scale(1.04); } .featured-badge{ position:absolute; top:15px; right:15px; background:#ffc107; color:#17202a; padding:6px 12px; border-radius:30px; font-size:12px; font-weight:800; z-index:2; } .discount-badge{ position:absolute; top:15px; left:15px; background:#e63946; color:#fff; padding:6px 10px; border-radius:30px; font-size:11px; font-weight:900; z-index:2; } .product-body{ padding:22px; } .product-title{ font-size:18px; font-weight:800; color:#14263d; line-height:1.6; margin-bottom:10px; } .product-description{ font-size:14px; color:#718096; line-height:1.7; height:48px; overflow:hidden; margin-bottom:14px; } .price{ font-size:21px; font-weight:900; color:#0d6efd; } .old-price{ text-decoration:line-through; color:#9aa5b1; font-size:13px; margin-right:8px; } .store-box{ display:flex; align-items:center; gap:9px; background:#f7f9fc; border-radius:12px; padding:9px 11px; margin:17px 0; } .store-logo{ width:32px; height:32px; object-fit:contain; background:#fff; border-radius:7px; padding:4px; } .store-box small{ color:#8a96a5; display:block; font-size:11px; } .store-box strong{ font-size:13px; color:#25364d; } .product-btn{ display:block; text-align:center; background:#ffb703; color:#111827; border-radius:12px; padding:12px; font-weight:900; text-decoration:none; transition:.3s; } .product-btn:hover{ background:#f59e0b; color:#111827; } .external-note{ text-align:center; color:#8a96a5; font-size:11px; margin-top:9px; } /* ========================================= EMPTY ========================================= */ .empty-products{ background:#fff; border-radius:20px; padding:65px 20px; text-align:center; color:#7b8794; border:1px solid #edf1f6; } .empty-products i{ color:#b7c2ce; } /* ========================================= PAGINATION ========================================= */ .subcategory-pagination{ margin-top:45px; } .subcategory-pagination .pagination{ gap:6px; } .subcategory-pagination .page-link{ border:0; border-radius:10px !important; min-width:40px; height:40px; display:flex; align-items:center; justify-content:center; color:#536579; font-weight:700; background:#fff; box-shadow:0 4px 15px rgba(13,42,76,.05); } .subcategory-pagination .page-item.active .page-link{ background:#0d6efd; color:#fff; } /* ========================================= RESPONSIVE ========================================= */ @media(max-width:991px){ .subcategory-hero{ padding:40px 30px; } .subcategory-hero h1{ font-size:34px; } } @media(max-width:768px){ .subcategory-page{ padding:45px 0 65px; } .subcategory-hero{ padding:35px 23px; border-radius:24px; } .subcategory-hero h1{ font-size:29px; } .subcategory-description{ font-size:14px; } .section-title{ font-size:21px; } .product-image{ height:215px; } } @media(max-width:480px){ .subcategory-hero h1{ font-size:25px; } .product-body{ padding:18px; } .product-title{ font-size:16px; } } </style>

<section class="subcategory-page">

<div class="container">

{{-- =========================================
     HERO
========================================== --}}

<div class="subcategory-hero">

    <div class="row align-items-center g-4">

        <div class="col-lg-7">

            {{-- Breadcrumb --}}
            <div class="subcategory-breadcrumb">

                <a href="{{ route('products.index') }}">

                    <i class="bi bi-grid-3x3-gap-fill"></i>

                    المنتجات

                </a>

                <span>
                    <i class="bi bi-chevron-left"></i>
                </span>


                @if($subcategory->productCategory)

                    <a href="{{ route(
                        'products.category',
                        $subcategory->productCategory->slug
                    ) }}">

                        {{ $subcategory->productCategory->name }}

                    </a>

                    <span>
                        <i class="bi bi-chevron-left"></i>
                    </span>

                @endif


                <span class="text-white">

                    {{ $subcategory->name }}

                </span>

            </div>


            <div class="subcategory-label">

                <i class="bi bi-diagram-3-fill"></i>

                فرع المنتجات

            </div>


            <h1>

                {{ $subcategory->name }}

            </h1>


            @if($subcategory->description)

                <p class="subcategory-description">

                    {{ $subcategory->description }}

                </p>

            @else

                <p class="subcategory-description">

                    اكتشف أفضل المنتجات في
                    {{ $subcategory->name }}
                    واختر المنتج المناسب لك من المتاجر الخارجية.

                </p>

            @endif

        </div>


        {{-- Search --}}
        <div class="col-lg-5">

            <div class="subcategory-search-wrapper">

                <form
                    action="{{ route(
                        'products.subcategory',
                        $subcategory->slug
                    ) }}"
                    method="GET">

                    <input
                        type="search"
                        name="search"
                        class="subcategory-search"
                        placeholder="ابحث داخل هذا الفرع..."
                        value="{{ request('search') }}">

                    <button
                        type="submit"
                        class="subcategory-search-btn">

                        <i class="bi bi-search"></i>

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>


{{-- =========================================
     PRODUCTS
========================================== --}}

<div>

    <div class="products-header">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

            <h2 class="section-title">

                <i class="bi bi-box-seam-fill text-primary"></i>

                منتجات {{ $subcategory->name }}

            </h2>


            <div class="products-count">

                إجمالي المنتجات:

                <strong>

                    {{ $products->total() }}

                </strong>

            </div>

        </div>

    </div>


    <div class="row g-4">

        @forelse($products as $product)

            <div
                class="col-xl-3 col-lg-4 col-md-6"
                data-aos="fade-up">

                <div class="product-card">

                    {{-- Image --}}
                    <div class="product-image">

                        @if($product->is_featured)

                            <span class="featured-badge">

                                <i class="bi bi-stars"></i>

                                مميز

                            </span>

                        @endif


                        @if($product->discount_percentage > 0)

                            <span class="discount-badge">

                                خصم
                                {{ $product->discount_percentage }}%

                            </span>

                        @endif


                        @if($product->first_image)

                            <img
                                src="{{ asset(
                                    'uploads/' . $product->first_image
                                ) }}"
                                alt="{{ $product->name }}"
                                loading="lazy">

                        @else

                            <i class="bi bi-image text-muted fs-1"></i>

                        @endif

                    </div>


                    {{-- Body --}}
                    <div class="product-body">

                        <h3 class="product-title">

                            {{ $product->name }}

                        </h3>


                        <p class="product-description">

                            {{ Str::limit(
                                $product->description,
                                90
                            ) }}

                        </p>


                        {{-- Price --}}
                        <div class="mb-2">

                            @if($product->price)

                                <span class="price">

                                    {{ number_format(
                                        $product->price,
                                        0
                                    ) }}

                                    جنيه

                                </span>

                            @endif


                            @if($product->old_price)

                                <span class="old-price">

                                    {{ number_format(
                                        $product->old_price,
                                        0
                                    ) }}

                                    جنيه

                                </span>

                            @endif

                        </div>


                        {{-- Store --}}
                        @if($product->store)

                            <div class="store-box">

                                @if($product->store->logo)

                                    <img
                                        src="{{ asset(
                                            'uploads/' .
                                            $product->store->logo
                                        ) }}"
                                        class="store-logo"
                                        alt="{{ $product->store->name }}"
                                        loading="lazy">

                                @else

                                    <div class="store-logo d-flex align-items-center justify-content-center">

                                        <i class="bi bi-shop"></i>

                                    </div>

                                @endif


                                <div>

                                    <small>
                                        متوفر عبر
                                    </small>

                                    <strong>

                                        {{ $product->store->name }}

                                    </strong>

                                </div>

                            </div>

                        @endif


                        {{-- Product Details --}}
                        <a
                            href="{{ route(
                                'products.show',
                                $product->slug
                            ) }}"
                            class="product-btn">

                            <i class="bi bi-eye"></i>

                            عرض المنتج

                        </a>


                        <div class="external-note">

                            سيتم تحويلك إلى المتجر الخارجي لإتمام الشراء

                        </div>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12">

                <div class="empty-products">

                    <i class="bi bi-search fs-1"></i>

                    <h4 class="mt-3">

                        لا توجد منتجات في هذا الفرع

                    </h4>


                    @if(request('search'))

                        <p class="mb-3">

                            لم نجد منتجات تطابق:

                            <strong>
                                "{{ request('search') }}"
                            </strong>

                        </p>


                        <a
                            href="{{ route(
                                'products.subcategory',
                                $subcategory->slug
                            ) }}"
                            class="btn btn-primary rounded-pill px-4">

                            <i class="bi bi-arrow-counterclockwise"></i>

                            عرض كل المنتجات

                        </a>

                    @else

                        <p>

                            سيتم إضافة منتجات جديدة إلى هذا الفرع قريبًا.

                        </p>

                    @endif

                </div>

            </div>

        @endforelse

    </div>


    {{-- Pagination --}}
    @if($products->hasPages())

        <div class="subcategory-pagination d-flex justify-content-center">

            {{ $products->withQueryString()->links() }}

        </div>

    @endif

</div>

</div>

</section>

@endsection