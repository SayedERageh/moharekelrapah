
<div class="row g-4 profit-features" dir="rtl">

    <!-- 1 -->
    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
        <div class="profit-card w-100">
            <div class="profit-icon">
                <i class="bi bi-stars"></i>
            </div>
            <h4>منتجات مختارة</h4>
            <p>نختار منتجاتنا بعناية لنقدم لك جودة مميزة وقيمة حقيقية مقابل السعر.</p>
            <span class="card-number">01</span>
        </div>
    </div>

    <!-- 2 -->
    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="profit-card w-100">
            <div class="profit-icon">
                <i class="bi bi-tags"></i>
            </div>
            <h4>أسعار وعروض مميزة</h4>
            <p>استمتع بأسعار تنافسية وعروض مميزة تساعدك على الحصول على أفضل قيمة.</p>
            <span class="card-number">02</span>
        </div>
    </div>

    <!-- 3 -->
    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="profit-card w-100">
            <div class="profit-icon">
                <i class="bi bi-grid"></i>
            </div>
            <h4>اختيارات متنوعة</h4>
            <p>مجموعة متنوعة من المنتجات لتجد ما يناسب احتياجاتك بسهولة.</p>
            <span class="card-number">03</span>
        </div>
    </div>

    <!-- 4 -->
    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
        <div class="profit-card w-100">
            <div class="profit-icon">
                <i class="bi bi-cart-check"></i>
            </div>
            <h4>تسوق بسهولة</h4>
            <p>تجربة شراء بسيطة وسريعة من تصفح المنتج وحتى إتمام طلبك.</p>
            <span class="card-number">04</span>
        </div>
    </div>

    <!-- 5 -->
    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="profit-card w-100">
            <div class="profit-icon">
                <i class="bi bi-headset"></i>
            </div>
            <h4>دعم ومساعدة</h4>
            <p>فريقنا جاهز لمساعدتك والإجابة عن استفساراتك قبل وبعد الشراء.</p>
            <span class="card-number">05</span>
        </div>
    </div>

    <!-- 6 -->
    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="profit-card w-100">
            <div class="profit-icon">
                <i class="bi bi-shield-check"></i>
            </div>
            <h4>ثقة وأمان</h4>
            <p>نهتم بتقديم تجربة تسوق موثوقة وآمنة من البداية وحتى استلام طلبك.</p>
            <span class="card-number">06</span>
        </div>
    </div>

</div>

<style>
.profit-features{direction:rtl}

.profit-card{
    position:relative;
    overflow:hidden;
    padding:30px 25px;
    min-height:230px;
    text-align:center;
    background:rgba(255,255,255,.85);
    border:1px solid #e8eef7;
    border-radius:24px;
    box-shadow:0 10px 35px rgba(15,23,42,.05);
    transition:.35s ease;
}

.profit-card::before{
    content:"";
    position:absolute;
    width:130px;
    height:130px;
    top:-65px;
    left:-65px;
    border-radius:50%;
    background:rgba(37,99,235,.07);
    transition:.4s;
}

.profit-card:hover{
    transform:translateY(-8px);
    border-color:#bfdbfe;
    box-shadow:0 20px 45px rgba(37,99,235,.12);
}

.profit-card:hover::before{
    transform:scale(2.2);
    background:rgba(37,99,235,.05);
}

.profit-icon{
    position:relative;
    z-index:1;
    width:62px;
    height:62px;
    margin:0 auto 18px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:18px;
    color:#2563eb;
    font-size:25px;
    background:linear-gradient(135deg,#eff6ff,#e0f2fe);
    border:1px solid #dbeafe;
    transition:.35s;
}

.profit-card:hover .profit-icon{
    color:#fff;
    background:linear-gradient(135deg,#2563eb,#0ea5e9);
    transform:rotate(-5deg) scale(1.08);
    box-shadow:0 10px 25px rgba(37,99,235,.25);
}

.profit-card h4{
    position:relative;
    z-index:1;
    margin:0 0 10px;
    color:#0f172a;
    font-size:18px;
    font-weight:900;
}

.profit-card p{
    position:relative;
    z-index:1;
    margin:0 auto;
    max-width:290px;
    color:#64748b;
    font-size:13px;
    line-height:1.9;
}

.card-number{
    position:absolute;
    bottom:12px;
    left:18px;
    color:#e2e8f0;
    font-size:12px;
    font-weight:900;
    letter-spacing:1px;
    transition:.3s;
}

.profit-card:hover .card-number{
    color:#bfdbfe;
}

@media(max-width:576px){
    .profit-card{
        min-height:210px;
        padding:25px 20px;
        border-radius:20px;
    }

    .profit-icon{
        width:56px;
        height:56px;
        font-size:22px;
    }

    .profit-card h4{
        font-size:16px;
    }

    .profit-card p{
        font-size:12px;
    }
}
</style>
