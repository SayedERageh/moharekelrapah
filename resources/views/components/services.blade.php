
<div class="row g-4 profit-benefits" dir="rtl">

    <!-- 01 -->
    <div class="col-lg-3 col-md-6">
        <div class="benefit-card h-100">

            <span class="benefit-number">01</span>

            <div class="benefit-icon">
                <i class="bi bi-award-fill"></i>
            </div>

            <h4>جودة مضمونة</h4>

            <p>
                منتجات مختارة بعناية لنقدم لك جودة موثوقة وأداءً
                يستحق ثقتك.
            </p>

        </div>
    </div>


    <!-- 02 -->
    <div class="col-lg-3 col-md-6">
        <div class="benefit-card h-100">

            <span class="benefit-number">02</span>

            <div class="benefit-icon">
                <i class="bi bi-tags-fill"></i>
            </div>

            <h4>أسعار ذكية</h4>

            <p>
                أسعار تنافسية وعروض مميزة تمنحك أفضل قيمة
                مقابل ما تدفعه.
            </p>

        </div>
    </div>


    <!-- 03 -->
    <div class="col-lg-3 col-md-6">
        <div class="benefit-card h-100">

            <span class="benefit-number">03</span>

            <div class="benefit-icon">
                <i class="bi bi-grid-3x3-gap-fill"></i>
            </div>

            <h4>اختيارات متنوعة</h4>

            <p>
                تشكيلة متنوعة من المنتجات لتجد كل ما تحتاجه
                بسهولة وفي مكان واحد.
            </p>

        </div>
    </div>


    <!-- 04 -->
    <div class="col-lg-3 col-md-6">
        <div class="benefit-card h-100">

            <span class="benefit-number">04</span>

            <div class="benefit-icon">
                <i class="bi bi-headset"></i>
            </div>

            <h4>دعم مستمر</h4>

            <p>
                فريق جاهز لمساعدتك والإجابة عن استفساراتك
                قبل وبعد إتمام عملية الشراء.
            </p>

        </div>
    </div>

</div>


<style>

.profit-benefits{
    direction:rtl;
}

.benefit-card{
    position:relative;
    overflow:hidden;
    padding:30px 22px;
    text-align:center;
    background:#fff;
    border:1px solid #e8eef7;
    border-radius:22px;
    box-shadow:0 8px 28px rgba(15,23,42,.045);
    transition:.35s ease;
}

.benefit-card::before{
    content:"";
    position:absolute;
    top:0;
    right:0;
    width:100%;
    height:3px;
    background:linear-gradient(90deg,#2563eb,#0ea5e9);
}

.benefit-card::after{
    content:"";
    position:absolute;
    width:130px;
    height:130px;
    left:-70px;
    bottom:-70px;
    border-radius:50%;
    background:#2563eb08;
    transition:.4s;
}

.benefit-card:hover{
    transform:translateY(-8px);
    border-color:#bfdbfe;
    box-shadow:0 20px 45px rgba(37,99,235,.11);
}

.benefit-card:hover::after{
    transform:scale(2);
}

.benefit-number{
    position:absolute;
    top:14px;
    left:17px;
    color:#e2e8f0;
    font-size:11px;
    font-weight:900;
}

.benefit-icon{
    position:relative;
    z-index:1;
    width:65px;
    height:65px;
    margin:5px auto 18px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:19px;
    color:#2563eb;
    font-size:26px;
    background:linear-gradient(135deg,#eff6ff,#e0f2fe);
    border:1px solid #dbeafe;
    transition:.35s;
}

.benefit-card:hover .benefit-icon{
    color:#fff;
    background:linear-gradient(135deg,#2563eb,#0ea5e9);
    transform:translateY(-4px) rotate(-5deg);
    box-shadow:0 12px 25px rgba(37,99,235,.25);
}

.benefit-card h4{
    position:relative;
    z-index:1;
    margin:0 0 10px;
    color:#0f172a;
    font-size:17px;
    font-weight:900;
}

.benefit-card p{
    position:relative;
    z-index:1;
    margin:0;
    color:#64748b;
    font-size:12.5px;
    line-height:1.9;
}

@media(max-width:576px){
    .benefit-card{
        padding:25px 20px;
        border-radius:19px;
    }

    .benefit-icon{
        width:58px;
        height:58px;
        font-size:23px;
    }
}

</style>
