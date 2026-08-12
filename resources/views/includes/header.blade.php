
<style>
.shop-nav{direction:rtl;display:flex;align-items:center;gap:18px;background:#fff;padding:10px 22px;border-bottom:1px solid #eee;box-shadow:0 3px 18px rgba(0,0,0,.06);position:relative;z-index:1000;font-family:Tajawal,Arial}.shop-logo{display:flex;align-items:center;gap:8px;text-decoration:none;color:#071a35;white-space:nowrap}.shop-logo>span{width:42px;height:42px;border-radius:12px;background:linear-gradient(135deg,#0d6efd,#00b4ff);display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;box-shadow:0 7px 18px rgba(13,110,253,.25)}.shop-logo div{display:flex;flex-direction:column;line-height:1}.shop-logo strong{font-size:20px;font-weight:900}.shop-logo small{font-size:11px;color:#0d6efd;font-weight:700;margin-top:5px}.shop-categories{position:relative}.categories-btn{border:1px solid #e7ebf2;background:#f8faff;border-radius:10px;padding:10px 14px;display:flex;align-items:center;gap:7px;color:#071a35;cursor:pointer}.categories-btn:hover{background:#0d6efd;color:#fff}.shop-categories .dropdown-menu{right:0;left:auto;border:0;border-radius:14px;padding:8px;min-width:210px;box-shadow:0 15px 40px rgba(0,0,0,.12)}.shop-categories .dropdown-menu a{display:flex;align-items:center;gap:9px;padding:10px 12px;border-radius:9px;color:#26354d;text-decoration:none;font-size:14px}.shop-categories .dropdown-menu a:hover{background:#f0f6ff;color:#0d6efd}.shop-search{height:44px;display:flex;flex:1;max-width:390px;background:#f6f8fb;border:1px solid #e7ebf0;border-radius:12px;overflow:hidden}.shop-search input{width:100%;border:0;outline:0;background:transparent;padding:0 15px;font-size:14px;direction:rtl}.shop-search button{width:48px;border:0;background:#0d6efd;color:#fff;font-size:17px;cursor:pointer}.shop-links{display:flex;align-items:center;gap:5px;margin-right:auto}.shop-links a{position:relative;text-decoration:none;color:#536176;font-size:14px;font-weight:700;padding:11px 10px;white-space:nowrap;border-radius:9px}.shop-links a:hover,.shop-links a.active{color:#0d6efd;background:#f0f6ff}.shop-links a.active:after{content:"";position:absolute;bottom:-12px;right:15%;width:70%;height:3px;border-radius:5px;background:#0d6efd}.shop-actions{display:flex;gap:7px}.shop-actions a{width:40px;height:40px;border-radius:11px;display:flex;align-items:center;justify-content:center;text-decoration:none;font-size:18px}.shop-actions .whatsapp{background:#eafaf1;color:#18a957}.shop-actions .call{background:#edf4ff;color:#0d6efd}@media(max-width:1100px){.shop-links{display:none}.shop-search{max-width:none}}@media(max-width:700px){.shop-nav{padding:9px 12px;gap:8px;flex-wrap:wrap}.shop-logo strong{font-size:17px}.shop-logo small{font-size:9px}.shop-logo>span{width:38px;height:38px}.shop-categories b{display:none}.categories-btn{padding:9px 11px}.shop-search{order:5;flex-basis:100%;max-width:none}.shop-actions{margin-right:auto}}
</style>

<div class="shop-nav">

    <a href="{{ route('home') }}" class="shop-logo">
        <span><i class="bi bi-lightning-charge-fill"></i></span>
        <div><strong>محرك</strong><small>الأرباح</small></div>
    </a>

    <div class="shop-categories dropdown">
        <button class="categories-btn" data-bs-toggle="dropdown">
            <i class="bi bi-grid-3x3-gap-fill"></i>
            <b>الأقسام</b>
            <i class="bi bi-chevron-down"></i>
        </button>

        <ul class="dropdown-menu">
            <li>
                <a href="{{ route('products.index') }}">
                    <i class="bi bi-grid"></i> جميع المنتجات
                </a>
            </li>

            @foreach($categories ?? [] as $category)
                <li>
                    <a href="{{ route('products.category',$category->slug) }}">
                        <i class="bi bi-box"></i> {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <form action="{{ route('products.index') }}" method="GET" class="shop-search">
        <input type="search" name="search" value="{{ request('search') }}" placeholder="ابحث عن منتج...">
        <button type="submit"><i class="bi bi-search"></i></button>
    </form>

    <div class="shop-links">

        <a href="{{ route('home') }}"
           class="{{ request()->routeIs('home') ? 'active' : '' }}">
            الرئيسية
        </a>

        <a href="{{ route('products.index') }}"
           class="{{ request()->routeIs('products.index') || request()->routeIs('products.show') || request()->routeIs('products.category') || request()->routeIs('products.subcategory') ? 'active' : '' }}">
            المنتجات
        </a>

        <a href="{{ route('about') }}"
           class="{{ request()->routeIs('about') ? 'active' : '' }}">
            من نحن
        </a>

        <a href="{{ route('contact') }}"
           class="{{ request()->routeIs('contact') ? 'active' : '' }}">
            تواصل معنا
        </a>

    </div>

    <div class="shop-actions">
        <a href="https://wa.me/201128555985" target="_blank" class="whatsapp" title="واتساب">
            <i class="bi bi-whatsapp"></i>
        </a>

        <a href="tel:01128555985" class="call" title="اتصال">
            <i class="bi bi-telephone-fill"></i>
        </a>
    </div>

</div>

