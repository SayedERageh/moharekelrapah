<section class="profit-about-section" dir="rtl">
    <div class="profit-about-container">

        <!-- Content -->
        <div class="profit-about-content">

            <span class="about-badge">
                <i class="bi bi-stars"></i>
                لماذا محرك الأرباح؟
            </span>

            <h3>
                اختيارات أذكى،
                <strong>وأرباح أكثر.</strong>
            </h3>

            <p>
                في <strong>محرك الأرباح</strong> نوفر منتجات مختارة بعناية،
                تجمع بين الجودة والسعر المناسب وتجربة التسوق السهلة.
            </p>

            <a href="https://wa.me/201128555985"
               target="_blank"
               class="about-whatsapp">
                <i class="bi bi-whatsapp"></i>
                تواصل معنا
            </a>

        </div>


        <!-- 3D Fan -->
        <div class="fan-visual">

            <div class="fan-glow"></div>

            <div class="fan-orbit orbit-1"></div>
            <div class="fan-orbit orbit-2"></div>

            <div class="fan">

                <div class="fan-head">

                    <div class="fan-blades">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="fan-center">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>

                </div>

                <div class="fan-neck"></div>
                <div class="fan-base"></div>

            </div>


            <!-- Floating Card -->
            <div class="fan-card card-one">
                <i class="bi bi-lightning-charge-fill"></i>
                <div>
                    <small>محرك قوي</small>
                    <strong>أداء أعلى</strong>
                </div>
            </div>

            <div class="fan-card card-two">
                <i class="bi bi-stars"></i>
                <div>
                    <small>اختيار ذكي</small>
                    <strong>قيمة أفضل</strong>
                </div>
            </div>

        </div>

    </div>
</section>


<style>

/* =========================
   MAIN SECTION
========================= */

.profit-about-section{
    width:100%;
    padding:70px 20px;
    overflow:hidden;
    background:#fff;
}

.profit-about-container{
    width:100%;
    max-width:1200px;
    min-height:470px;
    margin:auto;
    display:grid;
    grid-template-columns:1fr 1fr;
    align-items:center;
    gap:50px;
}


/* =========================
   CONTENT
========================= */

.profit-about-content{
    direction:rtl;
    max-width:520px;
    margin-right:auto;
}

.about-badge{
    display:inline-flex;
    align-items:center;
    gap:7px;
    padding:7px 14px;
    border-radius:50px;
    background:#eff6ff;
    color:#2563eb;
    font-size:11px;
    font-weight:800;
}

.profit-about-content h3{
    margin:16px 0 15px;
    color:#0f172a;
    font-size:clamp(34px,4vw,52px);
    line-height:1.25;
    font-weight:900;
}

.profit-about-content h3 strong{
    display:block;
    color:#2563eb;
}

.profit-about-content p{
    max-width:500px;
    margin:0 0 25px;
    color:#64748b;
    font-size:14px;
    line-height:2;
}

.profit-about-content p strong{
    color:#2563eb;
}

.about-whatsapp{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:8px;
    padding:13px 20px;
    border-radius:13px;
    background:linear-gradient(135deg,#16a34a,#22c55e);
    color:#fff!important;
    text-decoration:none!important;
    font-size:13px;
    font-weight:800;
    box-shadow:0 10px 25px rgba(22,163,74,.20);
    transition:.3s;
}

.about-whatsapp:hover{
    transform:translateY(-4px);
    box-shadow:0 15px 30px rgba(22,163,74,.28);
}


/* =========================
   FAN AREA
========================= */

.fan-visual{
    position:relative;
    width:100%;
    height:470px;
    display:flex;
    align-items:center;
    justify-content:center;
    direction:ltr;
}

.fan-glow{
    position:absolute;
    width:300px;
    height:300px;
    border-radius:50%;
    background:#2563eb16;
    filter:blur(35px);
}


/* Orbit */

.fan-orbit{
    position:absolute;
    border:1px solid #2563eb18;
    border-radius:50%;
}

.orbit-1{
    width:390px;
    height:390px;
    animation:spin 18s linear infinite;
}

.orbit-2{
    width:315px;
    height:315px;
    border-color:#0ea5e918;
    animation:spin 12s linear infinite reverse;
}


/* =========================
   FAN
========================= */

.fan{
    position:relative;
    z-index:3;
    width:270px;
    height:365px;
    filter:drop-shadow(0 25px 30px rgba(15,23,42,.13));
    animation:fanFloat 4s ease-in-out infinite;
}

.fan-head{
    position:absolute;
    top:20px;
    left:25px;
    width:220px;
    height:220px;
    border-radius:50%;
    background:linear-gradient(
        145deg,
        #fff,
        #dbeafe
    );
    border:9px solid #e2e8f0;
    box-shadow:
        inset -15px -15px 30px rgba(148,163,184,.20),
        10px 20px 40px rgba(37,99,235,.14);
    overflow:hidden;
}

.fan-head::after{
    content:"";
    position:absolute;
    inset:14px;
    border:2px solid rgba(148,163,184,.20);
    border-radius:50%;
}


/* =========================
   BLADES
========================= */

.fan-blades{
    position:absolute;
    inset:38px;
    animation:bladeSpin 2.2s linear infinite;
}

.fan-blades span{
    position:absolute;
    top:50%;
    left:50%;
    width:82px;
    height:35px;
    border-radius:100% 15% 15% 100%;
    background:linear-gradient(
        135deg,
        #60a5fa,
        #2563eb
    );
    transform-origin:0 50%;
    box-shadow:0 5px 12px rgba(37,99,235,.25);
}

.fan-blades span:nth-child(1){
    transform:rotate(0deg);
}

.fan-blades span:nth-child(2){
    transform:rotate(90deg);
}

.fan-blades span:nth-child(3){
    transform:rotate(180deg);
}

.fan-blades span:nth-child(4){
    transform:rotate(270deg);
}


/* Center */

.fan-center{
    position:absolute;
    z-index:5;
    top:50%;
    left:50%;
    width:62px;
    height:62px;
    transform:translate(-50%,-50%);
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    background:radial-gradient(
        circle at 30% 25%,
        #60a5fa,
        #1d4ed8
    );
    color:#fff;
    font-size:25px;
    box-shadow:0 8px 20px rgba(37,99,235,.35);
}


/* =========================
   FAN STAND
========================= */

.fan-neck{
    position:absolute;
    top:230px;
    left:108px;
    width:55px;
    height:78px;
    border-radius:10px;
    background:linear-gradient(
        90deg,
        #cbd5e1,
        #fff,
        #94a3b8
    );
    box-shadow:5px 10px 20px rgba(15,23,42,.12);
}

.fan-base{
    position:absolute;
    bottom:0;
    left:50px;
    width:170px;
    height:38px;
    border-radius:50% 50% 25% 25%;
    background:linear-gradient(
        180deg,
        #f8fafc,
        #cbd5e1
    );
    box-shadow:0 12px 20px rgba(15,23,42,.14);
}


/* =========================
   FLOATING CARDS
========================= */

.fan-card{
    position:absolute;
    z-index:6;
    display:flex;
    align-items:center;
    gap:9px;
    padding:11px 14px;
    background:rgba(255,255,255,.94);
    border:1px solid #e8eef7;
    border-radius:15px;
    box-shadow:0 15px 35px rgba(15,23,42,.10);
    backdrop-filter:blur(12px);
    animation:cardFloat 4s ease-in-out infinite;
}

.fan-card i{
    width:36px;
    height:36px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:10px;
    background:#eff6ff;
    color:#2563eb;
}

.fan-card small,
.fan-card strong{
    display:block;
}

.fan-card small{
    color:#94a3b8;
    font-size:9px;
}

.fan-card strong{
    margin-top:2px;
    color:#1e293b;
    font-size:11px;
}

.card-one{
    top:70px;
    right:10px;
}

.card-two{
    bottom:70px;
    left:10px;
    animation-delay:1s;
}


/* =========================
   ANIMATIONS
========================= */

@keyframes bladeSpin{
    from{
        transform:rotate(0);
    }

    to{
        transform:rotate(360deg);
    }
}

@keyframes spin{
    from{
        transform:rotate(0);
    }

    to{
        transform:rotate(360deg);
    }
}

@keyframes fanFloat{
    50%{
        transform:translateY(-10px);
    }
}

@keyframes cardFloat{
    50%{
        transform:translateY(-8px);
    }
}


/* =========================
   TABLET
========================= */

@media(max-width:991px){

    .profit-about-section{
        padding:55px 20px;
    }

    .profit-about-container{
        grid-template-columns:1fr;
        gap:20px;
        max-width:700px;
    }

    .profit-about-content{
        max-width:600px;
        margin:auto;
        text-align:center;
    }

    .profit-about-content p{
        margin-left:auto;
        margin-right:auto;
    }

    .fan-visual{
        height:400px;
    }

}


/* =========================
   MOBILE
========================= */

@media(max-width:576px){

    .profit-about-section{
        padding:45px 15px;
    }

    .profit-about-content h3{
        font-size:34px;
    }

    .fan-visual{
        height:330px;
    }

    .fan{
        transform:scale(.76);
    }

    .orbit-1{
        width:280px;
        height:280px;
    }

    .orbit-2{
        width:220px;
        height:220px;
    }

    .fan-card{
        transform:scale(.78);
    }

    .card-one{
        right:-5px;
    }

    .card-two{
        left:-5px;
    }

}

</style>