<section class="home-products-section" dir="rtl">

    <div class="container">


        {{-- =====================================================
            HEADER
        ====================================================== --}}

        <div class="products-main-header text-center">

            <span class="products-badge">
                <i class="bi bi-stars"></i>
                محرك الأرباح
            </span>

            <h2>
                اكتشف أفضل المنتجات
                <strong>والعروض</strong>
            </h2>

            <p>
                مجموعة مختارة من المنتجات من المتاجر المختلفة،
                قارن واكتشف أفضل العروض وانتقل مباشرة إلى المتجر.
            </p>

        </div>


        {{-- =====================================================
            CATEGORIES
        ====================================================== --}}

        @if($categories->count())

            <div class="home-categories">

                <div class="categories-header">

                    <div>
                        <span>تصفح بسهولة</span>

                        <h3>
                            تسوق حسب القسم
                        </h3>
                    </div>

                    <a href="{{ route('products.index') }}">
                        كل الأقسام
                        <i class="bi bi-arrow-left"></i>
                    </a>

                </div>


                <div class="row g-3">

                    @foreach($categories->take(8) as $category)

                        <div class="col-xl-3 col-lg-3 col-md-4 col-6">

                            <a
                                href="{{ route('products.category', $category->slug) }}"
                                class="home-category-card"
                            >

                                <div class="category-icon">

                                    @if($category->image)

                                        <img
                                            src="{{ asset('uploads/' . $category->image) }}"
                                            alt="{{ $category->name }}"
                                            loading="lazy"
                                        >

                                    @else

                                        <i class="bi bi-grid"></i>

                                    @endif

                                </div>


                                <div class="category-content">

                                    <h4>
                                        {{ $category->name }}
                                    </h4>

                                    <span>
                                        {{ $category->subcategories->count() }}
                                        أقسام فرعية
                                    </span>

                                </div>


                                <i class="bi bi-arrow-left category-arrow"></i>

                            </a>

                        </div>

                    @endforeach

                </div>

            </div>

        @endif



        {{-- =====================================================
            FEATURED PRODUCTS
        ====================================================== --}}

        @if($featuredProducts->count())

            <div class="products-block">

                <div class="products-block-header">

                    <div>

                        <span class="block-label featured-label">
                            <i class="bi bi-stars"></i>
                            مختاراتنا
                        </span>

                        <h3>
                            منتجات مميزة
                        </h3>

                        <p>
                            منتجات اخترناها لك بعناية
                        </p>

                    </div>


                    <a href="{{ route('products.index', ['featured' => 1]) }}">
                        عرض الكل
                        <i class="bi bi-arrow-left"></i>
                    </a>

                </div>


                <div class="row g-4">

                    @foreach($featuredProducts as $product)

                        @include(
                            'components.product-card',
                            ['product' => $product]
                        )

                    @endforeach

                </div>

            </div>

        @endif



        {{-- =====================================================
            OFFERS
        ====================================================== --}}

        @if($offerProducts->count())

            <div class="offers-section">

                <div class="offers-header">

                    <div>

                        <span>
                            <i class="bi bi-fire"></i>
                            عروض تستحق المشاهدة
                        </span>

                        <h3>
                            أفضل الخصومات
                        </h3>

                        <p>
                            وفر أكثر مع أفضل الأسعار المتاحة
                        </p>

                    </div>


                    <a href="{{ route('products.index', ['sort' => 'price_low']) }}">
                        اكتشف المزيد
                        <i class="bi bi-arrow-left"></i>
                    </a>

                </div>


                <div class="row g-4">

                    @foreach($offerProducts as $product)

                        @include(
                            'components.product-card',
                            ['product' => $product]
                        )

                    @endforeach

                </div>

            </div>

        @endif



        {{-- =====================================================
            LATEST PRODUCTS
        ====================================================== --}}

        @if($latestProducts->count())

            <div class="products-block">

                <div class="products-block-header">

                    <div>

                        <span class="block-label latest-label">
                            <i class="bi bi-clock-history"></i>
                            وصل حديثًا
                        </span>

                        <h3>
                            أحدث المنتجات
                        </h3>

                        <p>
                            آخر المنتجات المضافة إلى محرك الأرباح
                        </p>

                    </div>


                    <a href="{{ route('products.index') }}">
                        جميع المنتجات
                        <i class="bi bi-arrow-left"></i>
                    </a>

                </div>


                <div class="row g-4">

                    @foreach($latestProducts as $product)

                        @include(
                            'components.product-card',
                            ['product' => $product]
                        )

                    @endforeach

                </div>

            </div>

        @endif



        {{-- =====================================================
            ALL PRODUCTS BUTTON
        ====================================================== --}}

        <div class="all-products-area">

            <div>

                <span>
                    اكتشف المزيد
                </span>

                <h3>
                    لم تجد ما تبحث عنه؟
                </h3>

                <p>
                    تصفح جميع المنتجات واستخدم الفلاتر للوصول إلى المنتج المناسب.
                </p>

            </div>


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

/* =========================================================
   MAIN
========================================================= */

.home-products-section{
    direction:rtl;
    background:
        linear-gradient(
            180deg,
            #f7faff 0%,
            #ffffff 100%
        );
    padding:90px 0;
    overflow:hidden;
}


/* =========================================================
   HEADER
========================================================= */

.products-main-header{
    margin-bottom:65px;
}

.products-badge{
    display:inline-flex;
    align-items:center;
    gap:8px;

    padding:8px 17px;

    border-radius:50px;

    background:#eff6ff;
    color:#2563eb;

    font-size:12px;
    font-weight:800;

    margin-bottom:16px;
}

.products-main-header h2{
    color:#071a35;
    font-size:clamp(30px,4vw,48px);
    font-weight:900;
    margin:0 0 15px;
}

.products-main-header h2 strong{
    color:#2563eb;
}

.products-main-header p{
    max-width:650px;
    margin:auto;

    color:#64748b;

    font-size:15px;
    line-height:2;
}


/* =========================================================
   CATEGORIES
========================================================= */

.home-categories{
    margin-bottom:75px;
}

.categories-header{
    display:flex;
    justify-content:space-between;
    align-items:end;

    margin-bottom:25px;
}

.categories-header span{
    color:#2563eb;
    font-size:11px;
    font-weight:800;
}

.categories-header h3{
    margin:4px 0 0;

    color:#0f172a;

    font-size:25px;
    font-weight:900;
}

.categories-header a{
    display:flex;
    align-items:center;
    gap:7px;

    color:#2563eb;

    text-decoration:none;

    font-size:13px;
    font-weight:800;
}


/* CATEGORY CARD */

.home-category-card{
    height:100%;

    display:flex;
    align-items:center;

    gap:14px;

    position:relative;

    padding:18px;

    background:#fff;

    border:1px solid #e7edf5;

    border-radius:18px;

    text-decoration:none!important;

    transition:.3s ease;

    box-shadow:0 7px 25px rgba(15,23,42,.035);
}

.home-category-card:hover{
    transform:translateY(-5px);

    border-color:#bfdbfe;

    box-shadow:
        0 15px 35px rgba(37,99,235,.10);
}

.category-icon{
    width:55px;
    height:55px;

    flex:0 0 55px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:15px;

    background:#eff6ff;

    color:#2563eb;

    font-size:24px;

    overflow:hidden;
}

.category-icon img{
    width:100%;
    height:100%;

    object-fit:contain;

    padding:7px;
}

.category-content{
    min-width:0;
}

.category-content h4{
    color:#0f172a;

    font-size:14px;
    font-weight:900;

    margin:0 0 5px;

    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
}

.category-content span{
    color:#94a3b8;

    font-size:10px;
}

.category-arrow{
    margin-right:auto;

    color:#cbd5e1;

    transition:.3s;
}

.home-category-card:hover .category-arrow{
    color:#2563eb;
    transform:translateX(-4px);
}


/* =========================================================
   PRODUCTS BLOCK
========================================================= */

.products-block{
    margin-bottom:80px;
}

.products-block-header{
    display:flex;

    align-items:end;
    justify-content:space-between;

    gap:20px;

    margin-bottom:28px;
}

.products-block-header h3{
    color:#0f172a;

    font-size:28px;
    font-weight:900;

    margin:5px 0;
}

.products-block-header p{
    color:#64748b;

    font-size:13px;

    margin:0;
}

.products-block-header > a{
    display:flex;
    align-items:center;
    gap:7px;

    color:#2563eb;

    text-decoration:none;

    font-size:12px;
    font-weight:800;

    white-space:nowrap;
}

.block-label{
    display:inline-flex;
    align-items:center;
    gap:5px;

    font-size:10px;
    font-weight:800;
}

.featured-label{
    color:#2563eb;
}

.latest-label{
    color:#059669;
}


/* =========================================================
   OFFERS
========================================================= */

.offers-section{
    position:relative;

    padding:35px;

    margin-bottom:80px;

    border-radius:28px;

    background:
        linear-gradient(
            135deg,
            #071a35,
            #0b3d68
        );

    overflow:hidden;
}

.offers-section::before{
    content:"";

    position:absolute;

    width:300px;
    height:300px;

    border-radius:50%;

    background:#2563eb20;

    left:-100px;
    top:-150px;
}

.offers-section::after{
    content:"";

    position:absolute;

    width:250px;
    height:250px;

    border-radius:50%;

    background:#0ea5e920;

    right:-100px;
    bottom:-150px;
}

.offers-header{
    position:relative;
    z-index:2;

    display:flex;
    align-items:end;
    justify-content:space-between;

    margin-bottom:30px;
}

.offers-header span{
    display:inline-flex;
    align-items:center;
    gap:6px;

    color:#fbbf24;

    font-size:11px;
    font-weight:800;
}

.offers-header h3{
    color:#fff;

    font-size:28px;
    font-weight:900;

    margin:5px 0;
}

.offers-header p{
    color:#cbd5e1;

    font-size:13px;

    margin:0;
}

.offers-header > a{
    color:#fff;

    text-decoration:none;

    display:flex;
    align-items:center;

    gap:7px;

    font-size:12px;
    font-weight:800;
}


/* =========================================================
   ALL PRODUCTS
========================================================= */

.all-products-area{
    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:30px;

    padding:35px;

    border-radius:25px;

    background:#fff;

    border:1px solid #e5eaf1;

    box-shadow:0 10px 35px rgba(15,23,42,.05);
}

.all-products-area span{
    color:#2563eb;

    font-size:11px;
    font-weight:800;
}

.all-products-area h3{
    color:#0f172a;

    font-size:24px;
    font-weight:900;

    margin:5px 0;
}

.all-products-area p{
    color:#64748b;

    font-size:13px;

    margin:0;
}

.all-products-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    gap:10px;

    flex-shrink:0;

    padding:14px 25px;

    border-radius:13px;

    background:#2563eb;

    color:#fff!important;

    text-decoration:none!important;

    font-size:13px;
    font-weight:800;

    transition:.3s;
}

.all-products-btn:hover{
    background:#1d4ed8;

    transform:translateY(-3px);

    box-shadow:
        0 10px 25px rgba(37,99,235,.25);
}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    .home-products-section{
        padding:60px 0;
    }

    .categories-header,
    .products-block-header,
    .offers-header,
    .all-products-area{
        flex-direction:column;
        align-items:flex-start;
    }

    .products-block-header h3,
    .offers-header h3{
        font-size:23px;
    }

    .offers-section{
        padding:25px 18px;
        border-radius:22px;
    }

    .all-products-area{
        padding:25px 20px;
    }

    .all-products-btn{
        width:100%;
    }

}

</style>