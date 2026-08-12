@php

    $discount = $product->discount_percentage;

@endphp


<div class="col-xl-3 col-lg-4 col-md-6">

    <div class="home-product-card">


        {{-- IMAGE --}}

        <div class="home-product-image">

            @if($product->is_featured)

                <span class="product-featured">

                    <i class="bi bi-star-fill"></i>

                    مميز

                </span>

            @endif


            @if($discount)

                <span class="product-discount">

                    خصم {{ $discount }}%

                </span>

            @endif


            @if($product->first_image)

                <img
                    src="{{ asset('uploads/' . $product->first_image) }}"
                    alt="{{ $product->name }}"
                    loading="lazy"
                >

            @else

                <div class="product-no-image">

                    <i class="bi bi-image"></i>

                </div>

            @endif

        </div>



        {{-- CONTENT --}}

        <div class="home-product-content">


            {{-- CATEGORY --}}

            @if($product->subcategory)

                <div class="product-category">

                    {{ $product->subcategory->name }}

                </div>

            @endif


            {{-- NAME --}}

            <h3 class="home-product-name">

                {{ $product->name }}

            </h3>


            {{-- STORE --}}

            @if($product->store)

                <div class="product-store">

                    @if($product->store->logo)

                        <img
                            src="{{ asset('uploads/' . $product->store->logo) }}"
                            alt="{{ $product->store->name }}"
                            class="product-store-logo"
                        >

                    @else

                        <i class="bi bi-shop"></i>

                    @endif

                    <span>
                        {{ $product->store->name }}
                    </span>

                </div>

            @endif


            {{-- PRICE --}}

            <div class="product-price-box">

                <div class="product-price">

                    {{ number_format($product->price, 0) }}

                    <span>
                        جنيه
                    </span>

                </div>


                @if($product->old_price)

                    <div class="product-old-price">

                        {{ number_format($product->old_price, 0) }}

                        جنيه

                    </div>

                @endif

            </div>


            {{-- BUTTON --}}

            @if($product->affiliate_url && $product->store)

                <a
                    href="{{ $product->affiliate_url }}"
                    target="_blank"
                    rel="nofollow sponsored noopener"
                    class="home-product-btn"
                >

                    <i class="bi bi-box-arrow-up-left"></i>

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


            <div class="external-note">

                <i class="bi bi-shield-check"></i>

                الشراء يتم من المتجر الخارجي

            </div>


        </div>

    </div>

</div>



<style>

.home-product-card{
    height:100%;

    background:#fff;

    border:1px solid #e7edf5;

    border-radius:22px;

    overflow:hidden;

    transition:.35s ease;

    box-shadow:
        0 8px 30px rgba(15,23,42,.05);
}

.home-product-card:hover{
    transform:translateY(-8px);

    box-shadow:
        0 20px 45px rgba(15,23,42,.11);

    border-color:#bfdbfe;
}


/* IMAGE */

.home-product-image{
    height:235px;

    position:relative;

    display:flex;
    align-items:center;
    justify-content:center;

    background:#f8fafc;

    overflow:hidden;
}

.home-product-image img{
    width:100%;
    height:100%;

    padding:20px;

    object-fit:contain;

    transition:.4s;
}

.home-product-card:hover
.home-product-image img{
    transform:scale(1.07);
}


/* BADGES */

.product-featured,
.product-discount{
    position:absolute;

    z-index:3;

    top:13px;

    padding:6px 10px;

    border-radius:50px;

    font-size:10px;

    font-weight:900;
}

.product-featured{
    right:13px;

    background:#071a35;

    color:#fff;
}

.product-featured i{
    color:#fbbf24;
}

.product-discount{
    left:13px;

    background:#dc3545;

    color:#fff;
}


/* NO IMAGE */

.product-no-image{
    color:#cbd5e1;

    font-size:50px;
}


/* CONTENT */

.home-product-content{
    padding:19px;
}

.product-category{
    color:#2563eb;

    font-size:10px;

    font-weight:800;

    margin-bottom:7px;
}

.home-product-name{
    color:#0f172a;

    font-size:16px;

    font-weight:900;

    line-height:1.6;

    min-height:51px;

    margin:0 0 10px;
}


/* STORE */

.product-store{
    display:flex;

    align-items:center;

    gap:7px;

    color:#64748b;

    font-size:11px;

    margin-bottom:15px;
}

.product-store-logo{
    width:25px;
    height:25px;

    object-fit:contain;

    border-radius:6px;

    background:#fff;

    border:1px solid #e5e7eb;

    padding:3px;
}


/* PRICE */

.product-price-box{
    display:flex;

    align-items:center;

    flex-wrap:wrap;

    gap:8px;

    margin-bottom:16px;
}

.product-price{
    color:#2563eb;

    font-size:20px;

    font-weight:900;
}

.product-price span{
    font-size:10px;

    font-weight:600;
}

.product-old-price{
    color:#9ca3af;

    font-size:11px;

    text-decoration:line-through;
}


/* BUTTON */

.home-product-btn{
    width:100%;

    display:flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    padding:12px;

    border-radius:12px;

    background:
        linear-gradient(
            135deg,
            #2563eb,
            #1d4ed8
        );

    color:#fff!important;

    text-decoration:none!important;

    font-size:11px;

    font-weight:900;

    transition:.3s;
}

.home-product-btn:hover{
    transform:translateY(-2px);

    box-shadow:
        0 8px 20px rgba(37,99,235,.25);
}

.external-note{
    text-align:center;

    color:#94a3b8;

    font-size:9px;

    margin-top:8px;
}

</style>