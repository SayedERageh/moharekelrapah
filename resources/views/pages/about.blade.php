@extends('layouts.app')

@section('title', 'محرك الأرباح | أفضل متجر إلكتروني')

@section('content')

{{-- =========================
HERO / ABOUT
========================= --}}

<section class="profit-about py-5">
    <div class="container">

```
    <div class="row align-items-center g-5">

        <div class="col-lg-6">
            <div class="profit-badge">
                <i class="bi bi-stars"></i>
                محرك الأرباح
            </div>

            <h2 class="profit-title mt-3">
                أفضل متجر إلكتروني
                <span>لاكتشاف أفضل المنتجات</span>
            </h2>

            <p class="profit-text">
                في <strong>محرك الأرباح</strong> نساعدك على الوصول إلى أفضل المنتجات
                والعروض من المتاجر المختلفة في مكان واحد، مع تجربة تصفح سهلة
                وسريعة تساعدك على اتخاذ قرار الشراء المناسب.
            </p>

            <div class="profit-actions mt-4">
                <a href="{{ route('products.index') }}" class="btn profit-btn">
                    <i class="bi bi-bag-check"></i>
                    تصفح المنتجات
                </a>

                <a href="#categories" class="btn profit-btn-outline">
                    استكشف الأقسام
                    <i class="bi bi-arrow-left"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="profit-visual">

                <div class="visual-glow"></div>

                <div class="visual-card main-card">
                    <div class="visual-icon">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>

                    <span>محرك الأرباح</span>

                    <h3>
                        اكتشف
                        <strong>الأفضل</strong>
                    </h3>

                    <p>
                        منتجات مميزة من متاجر مختلفة في مكان واحد
                    </p>
                </div>

                <div class="floating-card card-one">
                    <i class="bi bi-shop"></i>
                    <span>متاجر موثوقة</span>
                </div>

                <div class="floating-card card-two">
                    <i class="bi bi-tags-fill"></i>
                    <span>أفضل العروض</span>
                </div>

                <div class="floating-card card-three">
                    <i class="bi bi-search"></i>
                    <span>بحث سريع</span>
                </div>

            </div>
        </div>

    </div>

</div>
```

</section>

{{-- =========================
FEATURES
========================= --}}

<section class="profit-features py-5" id="about">
    <div class="container">

```
    <div class="section-heading text-center mb-5">
        <span>لماذا محرك الأرباح؟</span>
        <h2>كل ما تحتاجه للتسوق الذكي</h2>
        <p>
            نجمع لك المنتجات والعروض من مصادر مختلفة لتجد ما تبحث عنه بسهولة.
        </p>
    </div>

    <div class="row g-4">

        <div class="col-lg-3 col-md-6">
            <div class="profit-feature">
                <div class="feature-icon">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                </div>

                <h4>منتجات متنوعة</h4>

                <p>
                    تشكيلة واسعة من المنتجات في أقسام مختلفة تناسب احتياجاتك.
                </p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="profit-feature">
                <div class="feature-icon">
                    <i class="bi bi-shop-window"></i>
                </div>

                <h4>متاجر متعددة</h4>

                <p>
                    اكتشف منتجات من متاجر مختلفة من خلال منصة واحدة.
                </p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="profit-feature">
                <div class="feature-icon">
                    <i class="bi bi-lightning-charge-fill"></i>
                </div>

                <h4>تصفح سريع</h4>

                <p>
                    ابحث وتصفح المنتجات بسهولة دون تعقيد أو خطوات كثيرة.
                </p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="profit-feature">
                <div class="feature-icon">
                    <i class="bi bi-shield-check"></i>
                </div>

                <h4>اختيارات أفضل</h4>

                <p>
                    نساعدك على الوصول إلى المنتجات والعروض التي تستحق اهتمامك.
                </p>
            </div>
        </div>

    </div>

</div>
```

</section>

{{-- =========================
CATEGORIES
========================= --}}
@if(isset($categories) && $categories->count())

<section class="profit-categories py-5" id="categories">

```
<div class="container">

    <div class="section-heading text-center mb-5">
        <span>تصفح حسب القسم</span>
        <h2>اكتشف أقسام المنتجات</h2>
        <p>
            اختر القسم الذي تبحث عنه وابدأ رحلة التسوق.
        </p>
    </div>

    <div class="row g-4">

        @foreach($categories as $category)

            <div class="col-lg-3 col-md-6">

                <a href="{{ route('products.category', $category->slug) }}"
                   class="category-card">

                    <div class="category-icon">
                        <i class="bi bi-grid-fill"></i>
                    </div>

                    <div>
                        <h4>{{ $category->name }}</h4>

                        @if($category->description)
                            <p>
                                {{ Str::limit($category->description, 70) }}
                            </p>
                        @else
                            <p>استكشف المنتجات المتاحة في هذا القسم</p>
                        @endif
                    </div>

                    <span class="category-arrow">
                        <i class="bi bi-arrow-left"></i>
                    </span>

                </a>

            </div>

        @endforeach

    </div>

</div>
```

</section>

@endif

{{-- =========================
CTA
========================= --}}

<section class="profit-cta py-5" id="contact">

```
<div class="container">

    <div class="cta-box">

        <div>
            <span>محرك الأرباح</span>

            <h2>
                جاهز لاكتشاف
                <strong>أفضل المنتجات؟</strong>
            </h2>

            <p>
                تصفح المنتجات واكتشف العروض المتاحة من المتاجر المختلفة.
            </p>
        </div>

        <a href="{{ route('products.index') }}" class="cta-btn">
            ابدأ التسوق الآن
            <i class="bi bi-arrow-left"></i>
        </a>

    </div>

</div>
```

</section>

<style>

/* =========================
   GLOBAL
========================= */

.profit-about,
.profit-features,
.profit-categories {
    background: #f7f9fc;
    direction: rtl;
}

.section-heading span {
    color: #0d6efd;
    font-weight: 700;
    font-size: 14px;
}

.section-heading h2 {
    color: #071a35;
    font-size: 34px;
    font-weight: 800;
    margin: 8px 0 12px;
}

.section-heading p {
    color: #687386;
    max-width: 650px;
    margin: auto;
}


/* =========================
   HERO
========================= */

.profit-about {
    padding-top: 90px !important;
    padding-bottom: 100px !important;
}

.profit-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(13,110,253,.08);
    color: #0d6efd;
    padding: 9px 17px;
    border-radius: 50px;
    font-weight: 700;
}

.profit-title {
    color: #071a35;
    font-size: clamp(38px, 5vw, 64px);
    line-height: 1.15;
    font-weight: 900;
}

.profit-title span {
    display: block;
    color: #0d6efd;
}

.profit-text {
    color: #667085;
    font-size: 17px;
    line-height: 2;
    max-width: 650px;
}

.profit-text strong {
    color: #071a35;
}


/* =========================
   BUTTONS
========================= */

.profit-actions {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.profit-btn {
    background: linear-gradient(135deg,#0d6efd,#4dabf7);
    color: #fff;
    padding: 13px 25px;
    border-radius: 12px;
    font-weight: 700;
    border: 0;
    box-shadow: 0 10px 25px rgba(13,110,253,.22);
}

.profit-btn:hover {
    color: #fff;
    transform: translateY(-2px);
}

.profit-btn-outline {
    border: 1px solid #dbe3ef;
    background: #fff;
    color: #071a35;
    padding: 13px 22px;
    border-radius: 12px;
    font-weight: 700;
}

.profit-btn-outline:hover {
    color: #0d6efd;
    border-color: #0d6efd;
}


/* =========================
   HERO VISUAL
========================= */

.profit-visual {
    position: relative;
    min-height: 430px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.visual-glow {
    position: absolute;
    width: 320px;
    height: 320px;
    border-radius: 50%;
    background: #0d6efd;
    filter: blur(100px);
    opacity: .15;
}

.main-card {
    position: relative;
    z-index: 2;
    width: 360px;
    min-height: 330px;
    border-radius: 35px;
    background: linear-gradient(145deg,#071a35,#0d6efd);
    color: #fff;
    padding: 45px 35px;
    text-align: center;
    box-shadow: 0 30px 70px rgba(7,26,53,.25);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.visual-icon {
    width: 75px;
    height: 75px;
    border-radius: 22px;
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 36px;
    margin-bottom: 18px;
}

.main-card span {
    opacity: .8;
    font-weight: 600;
}

.main-card h3 {
    font-size: 35px;
    margin: 8px 0;
    font-weight: 900;
}

.main-card h3 strong {
    color: #7fc5ff;
}

.main-card p {
    opacity: .8;
    line-height: 1.8;
    margin: 0;
}

.floating-card {
    position: absolute;
    z-index: 3;
    background: #fff;
    padding: 13px 18px;
    border-radius: 15px;
    box-shadow: 0 15px 35px rgba(0,0,0,.12);
    display: flex;
    align-items: center;
    gap: 9px;
    font-weight: 700;
    color: #071a35;
}

.floating-card i {
    color: #0d6efd;
}

.card-one {
    top: 35px;
    right: 20px;
}

.card-two {
    bottom: 50px;
    left: 10px;
}

.card-three {
    bottom: 10px;
    right: 40px;
}


/* =========================
   FEATURES
========================= */

.profit-feature {
    height: 100%;
    background: #fff;
    padding: 30px 24px;
    border-radius: 20px;
    border: 1px solid #edf1f7;
    transition: .3s;
}

.profit-feature:hover {
    transform: translateY(-7px);
    box-shadow: 0 20px 45px rgba(7,26,53,.09);
}

.feature-icon {
    width: 55px;
    height: 55px;
    border-radius: 15px;
    background: rgba(13,110,253,.08);
    color: #0d6efd;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 20px;
}

.profit-feature h4 {
    color: #071a35;
    font-weight: 800;
}

.profit-feature p {
    color: #718096;
    line-height: 1.8;
    margin: 0;
}


/* =========================
   CATEGORIES
========================= */

.profit-categories {
    background: #fff;
}

.category-card {
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
    gap: 15px;
    background: #f7f9fc;
    padding: 25px 22px;
    border-radius: 20px;
    border: 1px solid #edf1f7;
    color: #071a35;
    text-decoration: none;
    transition: .3s;
}

.category-card:hover {
    transform: translateY(-6px);
    color: #071a35;
    background: #fff;
    box-shadow: 0 20px 40px rgba(7,26,53,.09);
}

.category-icon {
    min-width: 55px;
    width: 55px;
    height: 55px;
    border-radius: 15px;
    background: linear-gradient(135deg,#0d6efd,#4dabf7);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
}

.category-card h4 {
    font-size: 17px;
    font-weight: 800;
    margin: 0 0 5px;
}

.category-card p {
    color: #7b8794;
    font-size: 13px;
    margin: 0;
    line-height: 1.6;
}

.category-arrow {
    margin-right: auto;
    color: #0d6efd;
}


/* =========================
   CTA
========================= */

.profit-cta {
    background: #f7f9fc;
}

.cta-box {
    background: linear-gradient(135deg,#071a35,#0d6efd);
    border-radius: 28px;
    padding: 45px;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 30px;
    overflow: hidden;
}

.cta-box span {
    opacity: .7;
    font-weight: 700;
}

.cta-box h2 {
    font-size: 32px;
    font-weight: 900;
    margin: 8px 0;
}

.cta-box h2 strong {
    color: #8bd0ff;
}

.cta-box p {
    opacity: .75;
    margin: 0;
}

.cta-btn {
    white-space: nowrap;
    background: #fff;
    color: #071a35;
    padding: 14px 25px;
    border-radius: 12px;
    font-weight: 800;
    text-decoration: none;
}

.cta-btn:hover {
    color: #0d6efd;
}


/* =========================
   MOBILE
========================= */

@media (max-width: 991px) {

    .profit-about {
        padding-top: 60px !important;
    }

    .profit-visual {
        min-height: 380px;
    }

    .main-card {
        width: 320px;
    }

    .card-one {
        right: 0;
    }

    .card-two {
        left: 0;
    }

}

@media (max-width: 576px) {

    .profit-title {
        font-size: 38px;
    }

    .profit-visual {
        min-height: 330px;
    }

    .main-card {
        width: 280px;
        min-height: 280px;
        padding: 30px 20px;
    }

    .main-card h3 {
        font-size: 28px;
    }

    .floating-card {
        font-size: 12px;
        padding: 10px 12px;
    }

    .card-one {
        top: 10px;
        right: 0;
    }

    .card-two {
        bottom: 30px;
        left: 0;
    }

    .card-three {
        display: none;
    }

    .cta-box {
        padding: 30px 22px;
        flex-direction: column;
        align-items: flex-start;
    }

    .cta-box h2 {
        font-size: 25px;
    }

}

</style>

@endsection
