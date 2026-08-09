
<div class="products-heading text-center mb-5" dir="rtl">
    <span>
        <i class="bi bi-stars"></i>
        محرك الأرباح
    </span>

    <h2>اكتشف <strong>منتجاتنا</strong></h2>

    <p>
        اختيارات مميزة تجمع بين الجودة والسعر المناسب لتجربة تسوق تستحقها.
    </p>
</div>

<div class="row g-4 products-grid" dir="rtl">

    @foreach($services as $service)

        <div class="col-lg-4 col-md-6">

            <div class="product-card h-100">

                <!-- Product Image -->
                <div class="product-image">

                    <span class="product-badge">
                        مميز
                    </span>

                    <img
                        src="{{ asset('uploads/' . $service->image) }}"
                        alt="{{ $service->title }}"
                        loading="lazy"
                    >

                </div>

                <!-- Content -->
                <div class="product-content">

                    <h4>{{ $service->title }}</h4>

                    <p>
                        {{ Str::limit($service->description, 90) }}
                    </p>

                    <a href="{{ route('services.show', $service->slug) }}"
                       class="product-btn">

                        <span>عرض التفاصيل</span>

                        <i class="bi bi-arrow-left"></i>

                    </a>

                </div>

            </div>

        </div>

    @endforeach

</div>


<style>

.products-heading{
    direction:rtl;
}

.products-heading span{
    display:inline-flex;
    align-items:center;
    gap:7px;
    padding:7px 14px;
    margin-bottom:12px;
    border-radius:50px;
    background:#eff6ff;
    color:#2563eb;
    font-size:11px;
    font-weight:800;
}

.products-heading h2{
    margin:0 0 10px;
    color:#0f172a;
    font-size:clamp(32px,4vw,48px);
    font-weight:900;
}

.products-heading h2 strong{
    color:#2563eb;
}

.products-heading p{
    margin:auto;
    max-width:600px;
    color:#64748b;
    font-size:14px;
    line-height:1.9;
}


/* Product Card */

.products-grid{
    direction:rtl;
}

.product-card{
    position:relative;
    overflow:hidden;
    background:#fff;
    border:1px solid #e8eef7;
    border-radius:22px;
    box-shadow:0 8px 30px rgba(15,23,42,.05);
    transition:.35s ease;
}

.product-card:hover{
    transform:translateY(-8px);
    border-color:#bfdbfe;
    box-shadow:0 20px 45px rgba(37,99,235,.12);
}


/* Image */

.product-image{
    position:relative;
    height:230px;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:25px;
    overflow:hidden;
    background:
        radial-gradient(
            circle at center,
            #eff6ff 0,
            #f8fafc 55%,
            #fff 100%
        );
}

.product-image::after{
    content:"";
    position:absolute;
    width:180px;
    height:180px;
    border-radius:50%;
    background:#2563eb0d;
    transition:.4s;
}

.product-card:hover .product-image::after{
    transform:scale(1.5);
}

.product-image img{
    position:relative;
    z-index:2;
    width:100%;
    height:100%;
    object-fit:contain;
    transition:.4s ease;
}

.product-card:hover .product-image img{
    transform:scale(1.08);
}


/* Badge */

.product-badge{
    position:absolute;
    z-index:3;
    top:14px;
    right:14px;
    padding:6px 11px;
    border-radius:50px;
    background:#2563eb;
    color:#fff;
    font-size:10px;
    font-weight:800;
    box-shadow:0 6px 15px #2563eb30;
}


/* Content */

.product-content{
    padding:22px;
    text-align:right;
}

.product-content h4{
    margin:0 0 9px;
    color:#0f172a;
    font-size:18px;
    font-weight:900;
}

.product-content p{
    min-height:48px;
    margin:0 0 18px;
    color:#64748b;
    font-size:13px;
    line-height:1.8;
}


/* Button */

.product-btn{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:11px 15px;
    border-radius:13px;
    color:#2563eb!important;
    background:#eff6ff;
    border:1px solid #dbeafe;
    text-decoration:none!important;
    font-size:12px;
    font-weight:800;
    transition:.3s;
}

.product-btn i{
    transition:.3s;
}

.product-btn:hover{
    color:#fff!important;
    background:#2563eb;
    border-color:#2563eb;
}

.product-btn:hover i{
    transform:translateX(-5px);
}


@media(max-width:576px){

    .product-image{
        height:210px;
    }

    .product-content{
        padding:18px;
    }

    .product-content h4{
        font-size:16px;
    }

}

</style>
