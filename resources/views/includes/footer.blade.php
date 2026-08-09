
<footer dir="rtl">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">

                <!-- About -->
                <div class="col-lg-4 col-md-6 footer-about">

                    <a href="{{ route('home') }}" class="footer-logo">
                        <span class="footer-logo-icon">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </span>
                        <span>محرك الأرباح</span>
                    </a>

                    <p class="footer-desc">
                        محرك الأرباح هو متجرك الإلكتروني لاكتشاف منتجات مختارة
                        بعناية تجمع بين الجودة والسعر المناسب وتجربة التسوق السهلة.
                    </p>

                    <p class="footer-desc">
                        هدفنا أن نوفر لك تجربة شراء سريعة وموثوقة،
                        ونساعدك على الوصول للمنتج المناسب بأفضل قيمة.
                    </p>

                    <div class="footer-contact">
                        <div>
                            <i class="bi bi-telephone-fill"></i>
                            <span>011128555985</span>
                        </div>

                        <div>
                            <i class="bi bi-clock"></i>
                            <span>خدمة العملاء طوال أيام الأسبوع</span>
                        </div>
                    </div>

                </div>


                <!-- Links -->
                <div class="col-lg-2 col-md-3 footer-links">

                    <h4>روابط سريعة</h4>

                    <ul>
                        <li>
                            <a href="{{ route('home') }}">الرئيسية</a>
                        </li>

                        <li>
                            <a href="#products">المنتجات</a>
                        </li>

                        <li>
                            <a href="#categories">الأقسام</a>
                        </li>

                        <li>
                            <a href="#about">من نحن</a>
                        </li>

                        <li>
                            <a href="{{ route('contact') }}">تواصل معنا</a>
                        </li>
                    </ul>

                </div>


                <!-- Categories -->
                <div class="col-lg-2 col-md-3 footer-links">

                    <h4>أقسام المتجر</h4>

                    <ul>
                        <li><a href="#">منتجات مميزة</a></li>
                        <li><a href="#">الأكثر مبيعًا</a></li>
                        <li><a href="#">عروض خاصة</a></li>
                        <li><a href="#">وصل حديثًا</a></li>
                        <li><a href="#">كل المنتجات</a></li>
                    </ul>

                </div>


                <!-- CTA -->
                <div class="col-lg-4 col-md-12 footer-cta">

                    <div class="cta-box">

                        <span class="cta-badge">
                            <i class="bi bi-stars"></i>
                            تجربة تسوق أذكى
                        </span>

                        <h4>
                            خليك دايمًا
                            <strong>على طريق الأرباح</strong>
                        </h4>

                        <p>
                            اكتشف منتجاتنا المختارة وابدأ تجربة تسوق
                            مختلفة مع محرك الأرباح.
                        </p>

                        <div class="footer-buttons">

                            <a href="tel:011128555985" class="footer-call">
                                <i class="bi bi-telephone-fill"></i>
                                اتصل الآن
                            </a>

                            <a href="https://wa.me/2011128555985"
                               target="_blank"
                               class="footer-whatsapp">
                                <i class="bi bi-whatsapp"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- Copyright -->
    <div class="copyright">

        <div class="container d-flex flex-column flex-lg-row
                    justify-content-between align-items-center gap-3">

            <div>
                © جميع الحقوق محفوظة
                <strong>محرك الأرباح</strong>
            </div>

            <div class="footer-social">

                <a href="tel:011128555985" aria-label="اتصال">
                    <i class="bi bi-telephone-fill"></i>
                </a>

                <a href="https://wa.me/2011128555985"
                   target="_blank"
                   aria-label="واتساب">
                    <i class="bi bi-whatsapp"></i>
                </a>

            </div>

        </div>

    </div>

</footer>


<style>

footer{
    direction:rtl;
    background:#0f172a;
    color:#cbd5e1;
}

.footer-top{
    padding:70px 0 45px;
}

.footer-logo{
    display:flex;
    align-items:center;
    gap:10px;
    color:#fff!important;
    text-decoration:none!important;
    font-size:22px;
    font-weight:900;
}

.footer-logo-icon{
    width:42px;
    height:42px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:12px;
    background:linear-gradient(135deg,#2563eb,#0ea5e9);
    color:#fff;
}

.footer-desc{
    color:#94a3b8;
    font-size:13px;
    line-height:1.9;
    margin:20px 0 0;
    max-width:430px;
}

.footer-contact{
    margin-top:20px;
}

.footer-contact div{
    display:flex;
    align-items:center;
    gap:9px;
    color:#cbd5e1;
    font-size:13px;
    margin-top:10px;
}

.footer-contact i{
    color:#38bdf8;
}

.footer-links h4,
.footer-cta h4{
    color:#fff;
    font-size:15px;
    font-weight:900;
    margin-bottom:20px;
}

.footer-links ul{
    list-style:none;
    padding:0;
    margin:0;
}

.footer-links li{
    margin-bottom:12px;
}

.footer-links a{
    color:#94a3b8;
    text-decoration:none;
    font-size:13px;
    transition:.25s;
}

.footer-links a:hover{
    color:#38bdf8;
    padding-right:5px;
}

.cta-box{
    padding:25px;
    border-radius:20px;
    background:linear-gradient(135deg,#172554,#0f172a);
    border:1px solid rgba(96,165,250,.15);
}

.cta-badge{
    display:inline-flex;
    align-items:center;
    gap:7px;
    padding:6px 11px;
    border-radius:50px;
    background:#1e3a8a;
    color:#93c5fd;
    font-size:10px;
    font-weight:800;
}

.cta-box h4{
    font-size:25px;
    line-height:1.5;
    margin:15px 0 8px;
}

.cta-box h4 strong{
    display:block;
    color:#38bdf8;
}

.cta-box p{
    color:#94a3b8;
    font-size:13px;
    line-height:1.8;
}

.footer-buttons{
    display:flex;
    gap:8px;
    margin-top:18px;
}

.footer-call,
.footer-whatsapp{
    height:44px;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:8px;
    border-radius:12px;
    text-decoration:none!important;
    font-size:13px;
    font-weight:800;
}

.footer-call{
    flex:1;
    color:#fff!important;
    background:#2563eb;
}

.footer-whatsapp{
    width:44px;
    color:#22c55e!important;
    background:#fff;
    font-size:18px;
}

.copyright{
    padding:20px 0;
    border-top:1px solid rgba(255,255,255,.07);
    color:#64748b;
    font-size:12px;
}

.copyright strong{
    color:#cbd5e1;
}

.footer-social{
    display:flex;
    gap:8px;
}

.footer-social a{
    width:38px;
    height:38px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:11px;
    color:#94a3b8;
    background:#172033;
    text-decoration:none!important;
    transition:.25s;
}

.footer-social a:hover{
    color:#fff;
    background:#2563eb;
    transform:translateY(-3px);
}

@media(max-width:991px){
    .footer-top{
        padding:50px 0 35px;
    }

    .footer-about{
        margin-bottom:15px;
    }
}

@media(max-width:576px){
    .cta-box{
        padding:20px;
    }

    .cta-box h4{
        font-size:22px;
    }

    .copyright{
        text-align:center;
    }
}

</style>
    