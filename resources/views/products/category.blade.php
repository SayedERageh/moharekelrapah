@extends('layouts.app')

@section('content')

<style>
/* =========================================
   PRODUCT CATEGORY PAGE
========================================= */

.category-page{
    direction:rtl;
    background:#f7f9fc;
    padding:70px 0 90px;
}

/* =========================================
   HERO
========================================= */

.category-hero{
    position:relative;
    overflow:hidden;
    background:
        radial-gradient(circle at 85% 15%,rgba(0,180,255,.18),transparent 30%),
        radial-gradient(circle at 10% 90%,rgba(13,110,253,.18),transparent 30%),
        linear-gradient(135deg,#071a35,#0d3b66);
    border-radius:30px;
    padding:48px 45px;
    color:#fff;
    margin-bottom:35px;
    box-shadow:0 20px 50px rgba(7,26,53,.15);
}

.category-hero:before{
    content:"";
    position:absolute;
    width:420px;
    height:420px;
    border:1px solid rgba(255,255,255,.07);
    border-radius:50%;
    left:-180px;
    bottom:-230px;
}

.category-hero:after{
    content:"";
    position:absolute;
    width:220px;
    height:220px;
    border:1px solid rgba(255,255,255,.06);
    border-radius:50%;
    right:-100px;
    top:-100px;
}

.category-breadcrumb{
    position:relative;
    z-index:2;
    margin-bottom:18px;
}

.category-breadcrumb a{
    color:#bcd5ec;
    text-decoration:none;
    font-size:13px;
}

.category-breadcrumb a:hover{
    color:#fff;
}

.category-breadcrumb span{
    color:#7894ad;
    margin:0 7px;
}

.category-label{
    display:inline-flex;
    align-items:center;
    gap:7px;
    background:rgba(255,255,255,.1);
    border:1px solid rgba(255,255,255,.12);
    color:#d9efff;
    padding:8px 15px;
    border-radius:30px;
    font-size:12px;
    font-weight:800;
    margin-bottom:17px;
    backdrop-filter:blur(10px);
}

.category-hero h1{
    position:relative;
    z-index:2;
    font-size:40px;
    font-weight:900;
    margin-bottom:14px;
    line-height:1.3;
}

.category-hero-description{
    position:relative;
    z-index:2;
    color:#d6e6f4;
    max-width:720px;
    line-height:1.9;
    font-size:16px;
    margin-bottom:0;
}

/* =========================================
   SEARCH
========================================= */

.category-search-box{
    position:relative;
    z-index:2;
}

.category-search{
    width:100%;
    height:54px;
    border:0;
    outline:0;
    border-radius:15px;
    padding:0 20px 0 58px;
    background:#fff;
    color:#172b4d;
    box-shadow:0 12px 35px rgba(0,0,0,.14);
    font-size:14px;
}

.category-search:focus{
    box-shadow:0 12px 35px rgba(0,0,0,.18),0 0 0 3px rgba(13,110,253,.15);
}

.category-search-btn{
    position:absolute;
    left:7px;
    top:7px;
    width:40px;
    height:40px;
    border:0;
    border-radius:11px;
    background:#0d6efd;
    color:#fff;
}

/* =========================================
   SUBCATEGORIES
========================================= */

.subcategories-section{
    margin-bottom:42px;
}

.section-heading{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:15px;
    margin-bottom:20px;
}

.section-title{
    font-weight:900;
    color:#10243e;
    margin:0;
    font-size:25px;
}

.section-title i{
    margin-left:7px;
}

.subcategory-card{
    position:relative;
    display:flex;
    align-items:center;
    gap:13px;
    background:#fff;
    border:1px solid #edf1f6;
    border-radius:17px;
    padding:15px 17px;
    height:100%;
    text-decoration:none;
    color:#172b4d;
    transition:.3s;
    overflow:hidden;
}

.subcategory-card:before{
    content:"";
    position:absolute;
    width:70px;
    height:70px;
    background:rgba(13,110,253,.05);
    border-radius:50%;
    left:-25px;
    bottom:-30px;
    transition:.3s;
}

.subcategory-card:hover{
    transform:translateY(-5px);
    color:#0d6efd;
    border-color:rgba(13,110,253,.15);
    box-shadow:0 15px 35px rgba(13,42,76,.09);
}

.subcategory-card:hover:before{
    transform:scale(1.5);
}

.subcategory-icon{
    position:relative;
    z-index:1;
    flex:0 0 45px;
    width:45px;
    height:45px;
    border-radius:13px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(135deg,#0d6efd,#00b4d8);
    color:#fff;
    font-size:19px;
}

.subcategory-content{
    position:relative;
    z-index:1;
    min-width:0;
}

.subcategory-content strong{
    display:block;
    font-size:14px;
    font-weight:800;
    margin-bottom:3px;
}

.subcategory-content small{
    display:block;
    color:#8a96a5;
    font-size:11px;
}

.subcategory-arrow{
    position:relative;
    z-index:1;
    margin-right:auto;
    color:#a0adbb;
    transition:.3s;
}

.subcategory-card:hover .subcategory-arrow{
    color:#0d6efd;
    transform:translateX(-4px);
}

/* =========================================
   PRODUCTS HEADER
========================================= */

.products-header{
    background:#fff;
    border:1px solid #edf1f6;
    border-radius:20px;
    padding:17px 20px;
    margin-bottom:24px;
}

.products-count{
    color:#8491a1;
    font-size:13px;
}

.products-count strong{
    color:#172b4d;
    font-weight:900;
}

/* =========================================
   PRODUCT CARD
========================================= */

.product-card{
    background:#fff;
    border-radius:24px;
    overflow:hidden;
    height:100%;
    border:1px solid #edf0f5;
    transition:.35s;
    position:relative;
}

.product-card:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 45px rgba(13,42,76,.12);
}

.product-image{
    height:245px;
    background:#f8fafc;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:20px;
    position:relative;
}

.product-image img{
    width:100%;
    height:100%;
    object-fit:contain;
    transition:.4s;
}

.product-card:hover .product-image img{
    transform:scale(1.04);
}

.featured-badge{
    position:absolute;
    top:15px;
    right:15px;
    background:#ffc107;
    color:#17202a;
    padding:6px 12px;
    border-radius:30px;
    font-size:12px;
    font-weight:800;
    z-index:2;
}

.discount-badge{
    position:absolute;
    top:15px;
    left:15px;
    background:#e63946;
    color:#fff;
    padding:6px 10px;
    border-radius:30px;
    font-size:11px;
    font-weight:900;
    z-index:2;
}

.product-body{
    padding:22px;
}

.product-title{
    font-size:18px;
    font-weight:800;
    color:#14263d;
    line-height:1.6;
    margin-bottom:10px;
}

.product-description{
    font-size:14px;
    color:#718096;
    line-height:1.7;
    height:48px;
    overflow:hidden;
    margin-bottom:14px;
}

.price{
    font-size:21px;
    font-weight:900;
    color:#0d6efd;
}

.old-price{
    text-decoration:line-through;
    color:#9aa5b1;
    font-size:13px;
    margin-right:8px;
}

.store-box{
    display:flex;
    align-items:center;
    gap:9px;
    background:#f7f9fc;
    border-radius:12px;
    padding:9px 11px;
    margin:17px 0;
}

.store-logo{
    width:32px;
    height:32px;
    object-fit:contain;
    background:#fff;
    border-radius:7px;
    padding:4px;
}

.store-box small{
    color:#8a96a5;
    display:block;
    font-size:11px;
}

.store-box strong{
    font-size:13px;
    color:#25364d;
}

.product-btn{
    display:block;
    text-align:center;
    background:#ffb703;
    color:#111827;
    border-radius:12px;
    padding:12px;
    font-weight:900;
    text-decoration:none;
    transition:.3s;
}

.product-btn:hover{
    background:#f59e0b;
    color:#111827;
}

.external-note{
    text-align:center;
    color:#8a96a5;
    font-size:11px;
    margin-top:9px;
}

/* =========================================
   EMPTY
========================================= */

.empty-products{
    background:#fff;
    border-radius:20px;
    padding:65px 20px;
    text-align:center;
    color:#7b8794;
    border:1px solid #edf1f6;
}

.empty-products i{
    color:#b7c2ce;
}

/* =========================================
   PAGINATION
========================================= */

.category-pagination{
    margin-top:45px;
}

.category-pagination .pagination{
    gap:6px;
}

.category-pagination .page-link{
    border:0;
    border-radius:10px !important;
    min-width:40px;
    height:40px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#536579;
    font-weight:700;
    background:#fff;
    box-shadow:0 4px 15px rgba(13,42,76,.05);
}

.category-pagination .page-item.active .page-link{
    background:#0d6efd;
    color:#fff;
}

/* =========================================
   RESPONSIVE
========================================= */

@media(max-width:991px){

    .category-hero{
        padding:40px 30px;
    }

    .category-hero h1{
        font-size:34px;
    }

}

@media(max-width:768px){

    .category-page{
        padding:45px 0 65px;
    }

    .category-hero{
        padding:35px 23px;
        border-radius:24px;
    }

    .category-hero h1{
        font-size:29px;
    }

    .category-hero-description{
        font-size:14px;
    }

    .section-title{
        font-size:21px;
    }

    .product-image{
        height:215px;
    }

    .products-header{
        padding:15px;
    }

}

@media(max-width:480px){

    .category-hero h1{
        font-size:25px;
    }

    .category-label{
        font-size:11px;
    }

    .product-body{
        padding:18px;
    }

    .product-title{
        font-size:16px;
    }

}
</style>

<section class="category-page">

<div class="container">

```
{{-- =========================================
     CATEGORY HERO
========================================== --}}
<div class="category-hero">

    <div class="row align-items-center g-4">

        <div class="col-lg-7">

            {{-- Breadcrumb --}}
            <div class="category-breadcrumb">

                <a href="{{ route('products.index') }}">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                    المنتجات
                </a>

                <span>
                    <i class="bi bi-chevron-left"></i>
                </span>

                <span class="text-white">
                    {{ $category->name }}
                </span>

            </div>


            <div class="category-label">

                <i class="bi bi-stars"></i>

                قسم المنتجات

            </div>


            <h1>
                {{ $category->name }}
            </h1>


            @if($category->description)

                <p class="category-hero-description">
                    {{ $category->description }}
                </p>

            @else

                <p class="category-hero-description">
                    اكتشف مجموعة مميزة من المنتجات في قسم
                    {{ $category->name }}
                    واختر المنتج المناسب لك من المتاجر الخارجية.
                </p>

            @endif

        </div>


        {{-- Search --}}
        <div class="col-lg-5">

            <div class="category-search-box">

                <form
                    action="{{ route('products.category', $category->slug) }}"
                    method="GET">

                    <input
                        type="search"
                        name="search"
                        class="category-search"
                        placeholder="ابحث داخل هذا القسم..."
                        value="{{ request('search') }}"
                    >

                    <button
                        type="submit"
                        class="category-search-btn">

                        <i class="bi bi-search"></i>

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>


{{-- =========================================
     SUBCATEGORIES
========================================== --}}

@if($subcategories->count())

    <div class="subcategories-section">

        <div class="section-heading">

            <h2 class="section-title">

                <i class="bi bi-diagram-3-fill text-primary"></i>

                تصفح الفروع

            </h2>

            <span class="text-muted small">
                {{ $subcategories->count() }} فرع
            </span>

        </div>


        <div class="row g-3">

            @foreach($subcategories as $subcategory)

                <div class="col-xl-3 col-lg-4 col-md-6">

                    <a
                        href="{{ route('products.subcategory', $subcategory->slug) }}"
                        class="subcategory-card">

                        <div class="subcategory-icon">

                            <i class="bi bi-lightning-charge-fill"></i>

                        </div>


                        <div class="subcategory-content">

                            <strong>
                                {{ $subcategory->name }}
                            </strong>

                            @if(isset($subcategory->products_count))

                                <small>
                                    {{ $subcategory->products_count }} منتج
                                </small>

                            @else

                                <small>
                                    استكشف المنتجات
                                </small>

                            @endif

                        </div>


                        <div class="subcategory-arrow">

                            <i class="bi bi-arrow-left"></i>

                        </div>

                    </a>

                </div>

            @endforeach

        </div>

    </div>

@endif


{{-- =========================================
     PRODUCTS
========================================== --}}

<div>

    <div class="products-header">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

            <h2 class="section-title mb-0">

                <i class="bi bi-box-seam-fill text-primary"></i>

                منتجات {{ $category->name }}

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

                    {{-- Product Image --}}
                    <div class="product-image">

                        @if($product->is_featured)

                            <span class="featured-badge">

                                <i class="bi bi-stars"></i>

                                مميز

                            </span>

                        @endif


                        @if($product->discount_percentage > 0)

                            <span class="discount-badge">

                                خصم {{ $product->discount_percentage }}%

                            </span>

                        @endif


                        @if($product->first_image)

                            <img
                                src="{{ asset('uploads/' . $product->first_image) }}"
                                alt="{{ $product->name }}"
                                loading="lazy">

                        @else

                            <i class="bi bi-image text-muted fs-1"></i>

                        @endif

                    </div>


                    {{-- Product Body --}}
                    <div class="product-body">

                        <h3 class="product-title">

                            {{ $product->name }}

                        </h3>


                        <p class="product-description">

                            {{ Str::limit($product->description, 90) }}

                        </p>


                        {{-- Price --}}
                        <div class="mb-2">

                            @if($product->price)

                                <span class="price">

                                    {{ number_format($product->price, 0) }}

                                    جنيه

                                </span>

                            @endif


                            @if($product->old_price)

                                <span class="old-price">

                                    {{ number_format($product->old_price, 0) }}

                                    جنيه

                                </span>

                            @endif

                        </div>


                        {{-- Store --}}
                        @if($product->store)

                            <div class="store-box">

                                @if($product->store->logo)

                                    <img
                                        src="{{ asset('uploads/' . $product->store->logo) }}"
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
                            href="{{ route('products.show', $product->slug) }}"
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

                        لا توجد منتجات في هذا القسم

                    </h4>

                    @if(request('search'))

                        <p class="mb-3">

                            لم نجد منتجات تطابق:
                            <strong>
                                "{{ request('search') }}"
                            </strong>

                        </p>

                        <a
                            href="{{ route('products.category', $category->slug) }}"
                            class="btn btn-primary rounded-pill px-4">

                            <i class="bi bi-arrow-counterclockwise"></i>

                            عرض كل المنتجات

                        </a>

                    @else

                        <p>

                            سيتم إضافة منتجات جديدة إلى هذا القسم قريبًا.

                        </p>

                    @endif

                </div>

            </div>

        @endforelse

    </div>


    {{-- Pagination --}}
    @if($products->hasPages())

        <div class="category-pagination d-flex justify-content-center">

            {{ $products->withQueryString()->links() }}

        </div>

    @endif

</div>
```

</div>

</section>

@endsection
