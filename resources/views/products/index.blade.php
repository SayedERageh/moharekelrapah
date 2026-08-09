@extends('layouts.app')

@section('content')

<style>
.products-page{direction:rtl;background:#f7f9fc;padding:70px 0;min-height:100vh}
.products-hero{background:linear-gradient(135deg,#061a35,#0b3d68 55%,#075985);border-radius:28px;padding:50px 40px;color:#fff;position:relative;overflow:hidden;margin-bottom:30px}
.products-hero:before,.products-hero:after{content:"";position:absolute;border-radius:50%;pointer-events:none}
.products-hero:before{width:300px;height:300px;background:rgba(0,180,255,.13);left:-100px;top:-120px}
.products-hero:after{width:220px;height:220px;background:rgba(37,99,235,.15);right:-80px;bottom:-100px}
.products-hero h1{font-size:clamp(30px,4vw,48px);font-weight:900;margin:15px 0;position:relative}
.products-hero p{font-size:16px;line-height:2;color:#d7e8f5;max-width:650px;position:relative}
.hero-search{position:relative;z-index:2}
.product-search{height:58px;width:100%;border:0;border-radius:16px;padding:0 20px 0 65px;outline:0;box-shadow:0 15px 40px rgba(0,0,0,.15);font-size:15px}
.search-btn{position:absolute;left:7px;top:7px;width:44px;height:44px;border:0;border-radius:12px;background:#0d6efd;color:#fff}
.filter-box{background:#fff;border:1px solid #e9eef5;border-radius:22px;padding:22px;margin-bottom:40px;box-shadow:0 10px 35px rgba(15,35,60,.05)}
.filter-title{font-weight:900;color:#10243e;margin-bottom:18px}
.filter-label{font-size:12px;font-weight:800;color:#64748b;margin-bottom:7px;display:block}
.filter-control{height:48px;border:1px solid #e2e8f0;border-radius:12px;background:#f8fafc;font-size:14px}
.filter-control:focus{border-color:#0d6efd;box-shadow:0 0 0 3px rgba(13,110,253,.08)}
.filter-btn{height:48px;border:0;border-radius:12px;background:#0d6efd;color:#fff;font-weight:800;width:100%}
.reset-btn{height:48px;border-radius:12px;display:flex;align-items:center;justify-content:center;text-decoration:none;font-weight:800;background:#f1f5f9;color:#475569}
.category-card{background:#fff;border-radius:20px;padding:23px;text-align:center;height:100%;transition:.3s;border:1px solid #edf1f6}
.category-card:hover{transform:translateY(-6px);box-shadow:0 15px 35px rgba(15,35,60,.1)}
.category-icon{width:65px;height:65px;border-radius:18px;background:linear-gradient(135deg,#0d6efd,#00b4d8);color:#fff;display:flex;align-items:center;justify-content:center;font-size:28px;margin:0 auto 15px;overflow:hidden}
.category-icon img{width:100%;height:100%;object-fit:contain}
.category-card h5{font-weight:800;color:#172b4d;margin:0;font-size:15px}
.section-title{font-weight:900;color:#10243e;margin-bottom:25px}
.product-card{background:#fff;border-radius:23px;overflow:hidden;height:100%;border:1px solid #edf0f5;transition:.35s;position:relative}
.product-card:hover{transform:translateY(-8px);box-shadow:0 20px 45px rgba(13,42,76,.12)}
.product-image{height:235px;background:#f8fafc;display:flex;align-items:center;justify-content:center;padding:20px;position:relative}
.product-image img{width:100%;height:100%;object-fit:contain}
.featured-badge,.discount-badge{position:absolute;top:14px;padding:6px 10px;border-radius:30px;font-size:11px;font-weight:900;z-index:2}
.featured-badge{right:14px;background:#ffc107;color:#17202a}
.discount-badge{left:14px;background:#ef4444;color:#fff}
.product-body{padding:20px}
.product-title{font-size:17px;font-weight:900;color:#14263d;line-height:1.6;margin-bottom:8px}
.product-description{font-size:13px;color:#718096;line-height:1.7;height:45px;overflow:hidden;margin-bottom:10px}
.price{font-size:20px;font-weight:900;color:#0d6efd}
.old-price{text-decoration:line-through;color:#9aa5b1;font-size:12px;margin-right:7px}
.discount-percent{display:inline-block;background:#ecfdf5;color:#059669;font-size:10px;font-weight:900;padding:4px 7px;border-radius:8px;margin-right:5px}
.store-box{display:flex;align-items:center;gap:9px;background:#f7f9fc;border-radius:12px;padding:9px 11px;margin:15px 0}
.store-logo{width:34px;height:34px;object-fit:contain;background:#fff;border-radius:8px;padding:4px}
.store-box small{color:#8a96a5;display:block;font-size:10px}
.store-box strong{font-size:12px;color:#25364d}
.product-btn{display:flex;align-items:center;justify-content:center;gap:8px;text-align:center;background:#ffb703;color:#111827;border-radius:12px;padding:12px;font-weight:900;text-decoration:none;transition:.3s}
.product-btn:hover{background:#f59e0b;color:#111827;transform:translateY(-2px)}
.external-note{text-align:center;color:#8a96a5;font-size:10px;margin-top:8px}
.empty-products{background:#fff;border-radius:20px;padding:60px 20px;text-align:center;color:#7b8794}
.result-info{color:#64748b;font-size:13px}
@media(max-width:768px){.products-page{padding:40px 0}.products-hero{padding:35px 22px}.products-hero h1{font-size:30px}.filter-box{padding:17px}.product-image{height:210px}}
</style>

<section class="products-page">
<div class="container">

    {{-- HERO --}}
    <div class="products-hero">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-light text-primary px-3 py-2">
                    <i class="bi bi-stars"></i>
                    محرك الأرباح
                </span>

                <h1>اكتشف المنتجات التي تستحق الشراء</h1>

                <p>
                    اكتشف مجموعة مختارة من أفضل المنتجات والعروض من المتاجر
                    الإلكترونية الموثوقة، وقارن بينها ثم انتقل مباشرة للشراء.
                </p>
            </div>

            <div class="col-lg-5">
                <form action="{{ route('products.index') }}" method="GET" class="hero-search">
                    <input
                        type="search"
                        name="search"
                        class="product-search"
                        placeholder="ابحث عن منتج أو كلمة..."
                        value="{{ request('search') }}">

                    <button class="search-btn" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>


    {{-- FILTERS --}}
    <div class="filter-box">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
            <h5 class="filter-title mb-0">
                <i class="bi bi-sliders2 text-primary"></i>
                تصفية المنتجات
            </h5>

            @if(request()->hasAny(['search','category','store','min_price','max_price','featured','sort']))
                <a href="{{ route('products.index') }}" class="reset-btn px-3">
                    <i class="bi bi-arrow-counterclockwise ms-1"></i>
                    إعادة ضبط
                </a>
            @endif
        </div>

        <form action="{{ route('products.index') }}" method="GET" class="mt-4">

            <div class="row g-3">

                {{-- Search --}}
                <div class="col-lg-3 col-md-6">
                    <label class="filter-label">البحث</label>
                    <input
                        type="text"
                        name="search"
                        class="form-control filter-control"
                        placeholder="اسم المنتج..."
                        value="{{ request('search') }}">
                </div>

                {{-- Category --}}
                <div class="col-lg-2 col-md-6">
                    <label class="filter-label">القسم</label>

                    <select name="category" class="form-select filter-control">
                        <option value="">كل الأقسام</option>

                        @foreach($categories as $category)
                            <option
                                value="{{ $category->slug }}"
                                @selected(request('category') == $category->slug)>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Store --}}
                <div class="col-lg-2 col-md-6">
                    <label class="filter-label">المتجر</label>

                    <select name="store" class="form-select filter-control">
                        <option value="">كل المتاجر</option>

                        @foreach($stores as $store)
                            <option
                                value="{{ $store->id }}"
                                @selected(request('store') == $store->id)>
                                {{ $store->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Min Price --}}
                <div class="col-lg-1 col-md-6">
                    <label class="filter-label">من</label>

                    <input
                        type="number"
                        name="min_price"
                        class="form-control filter-control"
                        placeholder="0"
                        value="{{ request('min_price') }}">
                </div>

                {{-- Max Price --}}
                <div class="col-lg-1 col-md-6">
                    <label class="filter-label">إلى</label>

                    <input
                        type="number"
                        name="max_price"
                        class="form-control filter-control"
                        placeholder="∞"
                        value="{{ request('max_price') }}">
                </div>

                {{-- Sort --}}
                <div class="col-lg-2 col-md-6">
                    <label class="filter-label">ترتيب</label>

                    <select name="sort" class="form-select filter-control">
                        <option value="">الأحدث</option>

                        <option value="price_low"
                            @selected(request('sort') == 'price_low')>
                            السعر: من الأقل
                        </option>

                        <option value="price_high"
                            @selected(request('sort') == 'price_high')>
                            السعر: من الأعلى
                        </option>

                        <option value="featured"
                            @selected(request('sort') == 'featured')>
                            المنتجات المميزة
                        </option>
                    </select>
                </div>

                {{-- Submit --}}
                <div class="col-lg-1 col-md-6 d-flex align-items-end">
                    <button class="filter-btn" type="submit">
                        <i class="bi bi-funnel"></i>
                    </button>
                </div>

            </div>

            {{-- Featured --}}
            <div class="mt-3">
                <label class="d-inline-flex align-items-center gap-2 small fw-bold text-muted">
                    <input
                        type="checkbox"
                        name="featured"
                        value="1"
                        @checked(request('featured'))>
                    عرض المنتجات المميزة فقط
                </label>
            </div>

        </form>
    </div>


    {{-- CATEGORIES --}}
    <div class="mb-5">

        <h2 class="section-title">
            <i class="bi bi-grid-3x3-gap-fill text-primary"></i>
            تصفح الأقسام
        </h2>

        <div class="row g-4">

            @forelse($categories as $category)

                <div class="col-lg-3 col-md-4 col-6">

                    <a
                        href="{{ route('products.category',$category->slug) }}"
                        class="text-decoration-none">

                        <div class="category-card">

                            <div class="category-icon">

                                @if($category->image)
                                    <img
                                        src="{{ asset('uploads/'.$category->image) }}"
                                        alt="{{ $category->name }}">
                                @else
                                    <i class="bi bi-lightning-charge-fill"></i>
                                @endif

                            </div>

                            <h5>{{ $category->name }}</h5>

                        </div>

                    </a>

                </div>

            @empty

                <div class="col-12">
                    <div class="empty-products">
                        <i class="bi bi-grid fs-1"></i>
                        <h5 class="mt-3">لا توجد أقسام حاليًا</h5>
                    </div>
                </div>

            @endforelse

        </div>
    </div>


    {{-- PRODUCTS --}}
    <div>

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="section-title mb-0">
                <i class="bi bi-box-seam text-primary"></i>
                المنتجات
            </h2>

            <span class="result-info">
                تم العثور على {{ $products->total() }} منتج
            </span>

        </div>


        <div class="row g-4">

            @forelse($products as $product)

                @php
                    $discount = null;

                    if ($product->old_price && $product->price && $product->old_price > $product->price) {
                        $discount = round(
                            (($product->old_price - $product->price) / $product->old_price) * 100
                        );
                    }
                @endphp

                <div class="col-xl-3 col-lg-4 col-md-6">

                    <div class="product-card">

                        {{-- Image --}}
                        <div class="product-image">

                            @if($product->is_featured)
                                <span class="featured-badge">
                                    <i class="bi bi-stars"></i>
                                    مميز
                                </span>
                            @endif

                            @if($discount)
                                <span class="discount-badge">
                                    خصم {{ $discount }}%
                                </span>
                            @endif

                            @if($product->first_image)

                                <img
                                    src="{{ asset('uploads/'.$product->first_image) }}"
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
                                {{ Str::limit($product->description,90) }}
                            </p>


                            {{-- Price --}}
                            <div class="mb-2">

                                @if($product->price)

                                    <span class="price">
                                        {{ number_format($product->price,0) }}
                                        جنيه
                                    </span>

                                @endif

                                @if($product->old_price)

                                    <span class="old-price">
                                        {{ number_format($product->old_price,0) }}
                                        جنيه
                                    </span>

                                @endif

                                @if($discount)

                                    <span class="discount-percent">
                                        وفر {{ $discount }}%
                                    </span>

                                @endif

                            </div>


                            {{-- Store --}}
                            @if($product->store)

                                <div class="store-box">

                                    @if($product->store->logo)

                                        <img
                                            src="{{ asset('uploads/'.$product->store->logo) }}"
                                            class="store-logo"
                                            alt="{{ $product->store->name }}">

                                    @else

                                        <div class="store-logo d-flex align-items-center justify-content-center">
                                            <i class="bi bi-shop"></i>
                                        </div>

                                    @endif

                                    <div>
                                        <small>متوفر عبر</small>
                                        <strong>{{ $product->store->name }}</strong>
                                    </div>

                                </div>

                            @endif


                            {{-- Details --}}
                            <a
                                href="{{ route('products.show',$product->slug) }}"
                                class="product-btn">

                                <i class="bi bi-eye"></i>
                                عرض التفاصيل

                            </a>

                            <div class="external-note">
                                <i class="bi bi-box-arrow-up-left"></i>
                                الشراء يتم من المتجر الخارجي
                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="empty-products">

                        <i class="bi bi-search fs-1"></i>

                        <h4 class="mt-3">
                            لم نجد منتجات مطابقة
                        </h4>

                        <p>
                            جرّب تغيير كلمات البحث أو خيارات الفلترة.
                        </p>

                        <a
                            href="{{ route('products.index') }}"
                            class="btn btn-primary mt-2">
                            عرض كل المنتجات
                        </a>

                    </div>

                </div>

            @endforelse

        </div>


        {{-- Pagination --}}
        @if($products->hasPages())

            <div class="d-flex justify-content-center mt-5">

                {{ $products->withQueryString()->links() }}

            </div>

        @endif

    </div>

</div>
</section>

@endsection