@extends('layouts.app')

@section('content')

<style>
/* =========================================
   PRODUCT DETAILS
========================================= */

.product-details-page{
    direction:rtl;
    background:#f7f9fc;
    padding:70px 0 90px;
}

/* =========================================
   BREADCRUMB
========================================= */

.product-breadcrumb{
    margin-bottom:25px;
    font-size:13px;
    color:#8a96a5;
}

.product-breadcrumb a{
    color:#0d6efd;
    text-decoration:none;
    font-weight:700;
}

.product-breadcrumb span{
    margin:0 8px;
    color:#b0bac5;
}

/* =========================================
   MAIN PRODUCT
========================================= */

.product-main{
    background:#fff;
    border-radius:30px;
    border:1px solid #edf1f6;
    overflow:hidden;
    box-shadow:0 15px 45px rgba(13,42,76,.06);
}

.product-gallery{
    padding:25px;
    background:
        radial-gradient(circle at 20% 20%,rgba(13,110,253,.05),transparent 30%),
        #fbfcfe;
}

/* =========================================
   MAIN IMAGE
========================================= */

.main-product-image{
    height:500px;
    background:#fff;
    border-radius:22px;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:35px;
    overflow:hidden;
    border:1px solid #edf1f6;
    position:relative;
}

.main-product-image img{
    width:100%;
    height:100%;
    object-fit:contain;
    transition:.4s;
}

.main-product-image img:hover{
    transform:scale(1.04);
}

.gallery-placeholder{
    color:#b4bec9;
    font-size:70px;
}

/* =========================================
   THUMBNAILS
========================================= */

.product-thumbnails{
    display:flex;
    gap:12px;
    margin-top:15px;
    overflow-x:auto;
    padding:3px;
}

.product-thumbnail{
    width:78px;
    height:78px;
    flex:0 0 78px;
    background:#fff;
    border:2px solid #edf1f6;
    border-radius:14px;
    padding:6px;
    cursor:pointer;
    transition:.3s;
}

.product-thumbnail:hover,
.product-thumbnail.active{
    border-color:#0d6efd;
    box-shadow:0 6px 20px rgba(13,110,253,.12);
}

.product-thumbnail img{
    width:100%;
    height:100%;
    object-fit:contain;
}

/* =========================================
   PRODUCT INFO
========================================= */

.product-info{
    padding:40px 35px;
}

.product-featured{
    display:inline-flex;
    align-items:center;
    gap:6px;
    background:#fff4c7;
    color:#9a7200;
    border-radius:30px;
    padding:7px 13px;
    font-size:11px;
    font-weight:900;
    margin-bottom:15px;
}

.product-info h1{
    font-size:34px;
    font-weight:900;
    line-height:1.45;
    color:#14263d;
    margin-bottom:15px;
}

.product-description-short{
    color:#718096;
    font-size:15px;
    line-height:1.9;
}

/* =========================================
   PRICE
========================================= */

.product-price-box{
    margin:25px 0;
    padding:20px;
    border-radius:18px;
    background:#f7f9fc;
    border:1px solid #edf1f6;
}

.product-current-price{
    color:#0d6efd;
    font-size:31px;
    font-weight:900;
}

.product-old-price{
    color:#9aa5b1;
    text-decoration:line-through;
    font-size:15px;
    margin-right:10px;
}

.product-discount{
    display:inline-block;
    background:#e63946;
    color:#fff;
    padding:5px 10px;
    border-radius:20px;
    font-size:11px;
    font-weight:900;
    margin-right:8px;
}

/* =========================================
   STORE
========================================= */

.product-store{
    display:flex;
    align-items:center;
    gap:13px;
    background:#fff;
    border:1px solid #edf1f6;
    border-radius:17px;
    padding:13px 15px;
    margin-bottom:18px;
}

.product-store-logo{
    width:52px;
    height:52px;
    object-fit:contain;
    background:#f7f9fc;
    border-radius:12px;
    padding:7px;
}

.product-store small{
    display:block;
    color:#8a96a5;
    font-size:11px;
    margin-bottom:3px;
}

.product-store strong{
    display:block;
    color:#172b4d;
    font-size:16px;
    font-weight:900;
}

/* =========================================
   CATEGORY META
========================================= */

.product-meta{
    display:flex;
    flex-wrap:wrap;
    gap:9px;
    margin-bottom:22px;
}

.product-meta-item{
    background:#f7f9fc;
    border:1px solid #edf1f6;
    border-radius:10px;
    padding:8px 12px;
    font-size:12px;
    color:#66778a;
}

.product-meta-item i{
    color:#0d6efd;
    margin-left:4px;
}

/* =========================================
   EXTERNAL WARNING
========================================= */

.external-warning{
    display:flex;
    gap:12px;
    align-items:flex-start;
    background:#eef7ff;
    border:1px solid #cfe8ff;
    border-radius:15px;
    padding:15px;
    margin-bottom:15px;
}

.external-warning-icon{
    width:38px;
    height:38px;
    flex:0 0 38px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:10px;
    background:#0d6efd;
    color:#fff;
}

.external-warning strong{
    display:block;
    color:#17324f;
    font-size:13px;
    margin-bottom:4px;
}

.external-warning p{
    color:#708196;
    font-size:11px;
    line-height:1.7;
    margin:0;
}

/* =========================================
   AFFILIATE BUTTON
========================================= */

.affiliate-btn{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:9px;
    width:100%;
    background:#ffb703;
    color:#111827;
    text-decoration:none;
    padding:16px 20px;
    border-radius:15px;
    font-size:15px;
    font-weight:900;
    transition:.3s;
    box-shadow:0 10px 25px rgba(255,183,3,.18);
}

.affiliate-btn:hover{
    background:#f59e0b;
    color:#111827;
    transform:translateY(-2px);
    box-shadow:0 15px 30px rgba(255,183,3,.25);
}

.affiliate-note{
    text-align:center;
    font-size:11px;
    color:#929eab;
    margin-top:9px;
}

/* =========================================
   DESCRIPTION
========================================= */

.description-section{
    margin-top:35px;
}

.content-card{
    background:#fff;
    border-radius:24px;
    border:1px solid #edf1f6;
    padding:30px;
}

.content-card-title{
    font-size:22px;
    font-weight:900;
    color:#10243e;
    margin-bottom:20px;
}

.content-card-title i{
    color:#0d6efd;
    margin-left:7px;
}

.product-full-description{
    color:#64748b;
    font-size:15px;
    line-height:2;
    white-space:pre-line;
}

/* =========================================
   RELATED PRODUCTS
========================================= */

.related-section{
    margin-top:50px;
}

.related-title{
    font-size:26px;
    font-weight:900;
    color:#10243e;
    margin-bottom:25px;
}

.related-title i{
    color:#0d6efd;
    margin-left:7px;
}

/* =========================================
   RELATED CARD
========================================= */

.related-card{
    background:#fff;
    border:1px solid #edf1f6;
    border-radius:20px;
    overflow:hidden;
    height:100%;
    transition:.3s;
}

.related-card:hover{
    transform:translateY(-7px);
    box-shadow:0 18px 40px rgba(13,42,76,.1);
}

.related-image{
    height:200px;
    background:#f8fafc;
    padding:18px;
    display:flex;
    align-items:center;
    justify-content:center;
}

.related-image img{
    width:100%;
    height:100%;
    object-fit:contain;
}

.related-body{
    padding:18px;
}

.related-product-name{
    font-size:16px;
    font-weight:800;
    color:#172b4d;
    line-height:1.6;
    height:51px;
    overflow:hidden;
    margin-bottom:10px;
}

.related-price{
    font-size:18px;
    font-weight:900;
    color:#0d6efd;
}

.related-store{
    display:flex;
    align-items:center;
    gap:7px;
    margin:12px 0;
}

.related-store img{
    width:28px;
    height:28px;
    object-fit:contain;
    background:#f7f9fc;
    border-radius:6px;
    padding:4px;
}

.related-store span{
    color:#8491a1;
    font-size:11px;
}

.related-btn{
    display:block;
    text-align:center;
    background:#f1f6ff;
    color:#0d6efd;
    text-decoration:none;
    border-radius:10px;
    padding:10px;
    font-size:12px;
    font-weight:900;
    transition:.3s;
}

.related-btn:hover{
    background:#0d6efd;
    color:#fff;
}

/* =========================================
   RESPONSIVE
========================================= */

@media(max-width:991px){

    .main-product-image{
        height:420px;
    }

    .product-info{
        padding:30px 25px;
    }

    .product-info h1{
        font-size:29px;
    }

}

@media(max-width:768px){

    .product-details-page{
        padding:45px 0 70px;
    }

    .product-gallery{
        padding:15px;
    }

    .main-product-image{
        height:330px;
        padding:20px;
    }

    .product-info{
        padding:25px 20px 30px;
    }

    .product-info h1{
        font-size:25px;
    }

    .product-current-price{
        font-size:26px;
    }

    .content-card{
        padding:22px;
    }

}

@media(max-width:480px){

    .main-product-image{
        height:280px;
    }

    .product-thumbnail{
        width:65px;
        height:65px;
        flex-basis:65px;
    }

    .product-info h1{
        font-size:22px;
    }

    .product-price-box{
        padding:15px;
    }

}
</style>


<section class="product-details-page">

<div class="container">

    {{-- =========================================
         BREADCRUMB
    ========================================== --}}

    <div class="product-breadcrumb">

        <a href="{{ route('products.index') }}">
            <i class="bi bi-grid-3x3-gap-fill"></i>
            المنتجات
        </a>

        <span>
            <i class="bi bi-chevron-left"></i>
        </span>

        @if($product->subcategory && $product->subcategory->productCategory)

            <a href="{{ route('products.category', $product->subcategory->productCategory->slug) }}">
                {{ $product->subcategory->productCategory->name }}
            </a>

            <span>
                <i class="bi bi-chevron-left"></i>
            </span>

        @endif

        @if($product->subcategory)

            <a href="{{ route('products.subcategory', $product->subcategory->slug) }}">
                {{ $product->subcategory->name }}
            </a>

            <span>
                <i class="bi bi-chevron-left"></i>
            </span>

        @endif

        <span>
            {{ $product->name }}
        </span>

    </div>


    {{-- =========================================
         MAIN PRODUCT
    ========================================== --}}

    <div class="product-main">

        <div class="row g-0">

            {{-- =================================
                 GALLERY
            ================================== --}}

            <div class="col-lg-6">

                <div class="product-gallery">

                    <div class="main-product-image">

                        @if($product->first_image)

                            <img
                                id="mainProductImage"
                                src="{{ asset('uploads/' . $product->first_image) }}"
                                alt="{{ $product->name }}">

                        @else

                            <i class="bi bi-image gallery-placeholder"></i>

                        @endif

                    </div>


                    @if($product->images && count($product->images) > 1)

                        <div class="product-thumbnails">

                            @foreach($product->images as $index => $image)

                                <button
                                    type="button"
                                    class="product-thumbnail {{ $index === 0 ? 'active' : '' }}"
                                    onclick="changeProductImage('{{ asset('uploads/' . $image) }}', this)">

                                    <img
                                        src="{{ asset('uploads/' . $image) }}"
                                        alt="{{ $product->name }} - صورة {{ $index + 1 }}"
                                        loading="lazy">

                                </button>

                            @endforeach

                        </div>

                    @endif

                </div>

            </div>


            {{-- =================================
                 PRODUCT INFO
            ================================== --}}

            <div class="col-lg-6">

                <div class="product-info">

                    @if($product->is_featured)

                        <div class="product-featured">

                            <i class="bi bi-stars"></i>

                            منتج مميز

                        </div>

                    @endif


                    <h1>
                        {{ $product->name }}
                    </h1>


                    @if($product->description)

                        <p class="product-description-short">

                            {{ Str::limit($product->description, 180) }}

                        </p>

                    @endif


                    {{-- Price --}}

                    @if($product->price || $product->old_price)

                        <div class="product-price-box">

                            @if($product->price)

                                <span class="product-current-price">

                                    {{ number_format($product->price, 0) }}

                                    جنيه

                                </span>

                            @endif


                            @if($product->old_price)

                                <span class="product-old-price">

                                    {{ number_format($product->old_price, 0) }}

                                    جنيه

                                </span>

                            @endif


                            @if($product->discount_percentage > 0)

                                <span class="product-discount">

                                    خصم {{ $product->discount_percentage }}%

                                </span>

                            @endif

                        </div>

                    @endif


                    {{-- Store --}}

                    @if($product->store)

                        <div class="product-store">

                            @if($product->store->logo)

                                <img
                                    src="{{ asset('uploads/' . $product->store->logo) }}"
                                    class="product-store-logo"
                                    alt="{{ $product->store->name }}">

                            @else

                                <div class="product-store-logo d-flex align-items-center justify-content-center">

                                    <i class="bi bi-shop text-primary"></i>

                                </div>

                            @endif


                            <div>

                                <small>
                                    المنتج متوفر عبر
                                </small>

                                <strong>
                                    {{ $product->store->name }}
                                </strong>

                            </div>

                        </div>

                    @endif


                    {{-- Meta --}}

                    <div class="product-meta">

                        @if($product->subcategory)

                            <div class="product-meta-item">

                                <i class="bi bi-diagram-3"></i>

                                {{ $product->subcategory->name }}

                            </div>

                        @endif


                        @if($product->subcategory && $product->subcategory->productCategory)

                            <div class="product-meta-item">

                                <i class="bi bi-grid"></i>

                                {{ $product->subcategory->productCategory->name }}

                            </div>

                        @endif

                    </div>


                    {{-- External Warning --}}

                    <div class="external-warning">

                        <div class="external-warning-icon">

                            <i class="bi bi-box-arrow-up-left"></i>

                        </div>

                        <div>

                            <strong>
                                الشراء يتم من المتجر الخارجي
                            </strong>

                            <p>
                                محرك الأرباح لا يبيع هذا المنتج مباشرة.
                                عند الضغط على الزر سيتم تحويلك إلى
                                {{ $product->store->name ?? 'المتجر الخارجي' }}
                                لإتمام عملية الشراء وفقًا لسياسات المتجر.
                            </p>

                        </div>

                    </div>


                    {{-- Affiliate Button --}}

                    @if($product->affiliate_url)

                        <a
                            href="{{ $product->affiliate_url }}"
                            target="_blank"
                            rel="nofollow sponsored noopener"
                            class="affiliate-btn">

                            <i class="bi bi-box-arrow-up-left"></i>

                            عرض المنتج على
                            {{ $product->store->name ?? 'المتجر' }}

                            ↗

                        </a>

                        <div class="affiliate-note">

                            <i class="bi bi-shield-check"></i>

                            سيتم فتح المتجر الخارجي في نافذة جديدة

                        </div>

                    @endif

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================
         FULL DESCRIPTION
    ========================================== --}}

    @if($product->description)

        <div class="description-section">

            <div class="content-card">

                <h2 class="content-card-title">

                    <i class="bi bi-file-text"></i>

                    وصف المنتج

                </h2>


                <div class="product-full-description">

                    {{ $product->description }}

                </div>

            </div>

        </div>

    @endif


    {{-- =========================================
         RELATED PRODUCTS
    ========================================== --}}

    @if(isset($relatedProducts) && $relatedProducts->count())

        <div class="related-section">

            <h2 class="related-title">

                <i class="bi bi-stars"></i>

                منتجات قد تهمك

            </h2>


            <div class="row g-4">

                @foreach($relatedProducts as $related)

                    <div
                        class="col-xl-3 col-lg-4 col-md-6"
                        data-aos="fade-up">

                        <div class="related-card">

                            <div class="related-image">

                                @if($related->first_image)

                                    <img
                                        src="{{ asset('uploads/' . $related->first_image) }}"
                                        alt="{{ $related->name }}"
                                        loading="lazy">

                                @else

                                    <i class="bi bi-image text-muted fs-1"></i>

                                @endif

                            </div>


                            <div class="related-body">

                                <h3 class="related-product-name">

                                    {{ $related->name }}

                                </h3>


                                @if($related->price)

                                    <div class="related-price">

                                        {{ number_format($related->price, 0) }}

                                        جنيه

                                    </div>

                                @endif


                                @if($related->store)

                                    <div class="related-store">

                                        @if($related->store->logo)

                                            <img
                                                src="{{ asset('uploads/' . $related->store->logo) }}"
                                                alt="{{ $related->store->name }}">

                                        @endif

                                        <span>

                                            متوفر عبر
                                            {{ $related->store->name }}

                                        </span>

                                    </div>

                                @endif


                                <a
                                    href="{{ route('products.show', $related->slug) }}"
                                    class="related-btn">

                                    <i class="bi bi-eye"></i>

                                    عرض المنتج

                                </a>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    @endif

</div>

</section>


<script>
function changeProductImage(image, element)
{
    const mainImage = document.getElementById('mainProductImage');

    if(mainImage){
        mainImage.style.opacity = '0';

        setTimeout(function(){

            mainImage.src = image;
            mainImage.style.opacity = '1';

        }, 150);
    }

    document.querySelectorAll('.product-thumbnail')
        .forEach(function(item){
            item.classList.remove('active');
        });

    element.classList.add('active');
}
</script>

@endsection