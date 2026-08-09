```html
<div class="row gy-5 gx-lg-5">

  <!-- معلومات المشروع -->
  <div class="col-lg-4">

    <div class="info">
      <h3>محرك الأرباح</h3>

      <p>
        منصة متخصصة في تقديم الحلول والخدمات التي تساعدك على تطوير أعمالك،
        زيادة أرباحك وتحقيق أفضل النتائج من خلال استراتيجيات وأدوات فعّالة.
      </p>

      <div class="info-item d-flex">
        <i class="bi bi-geo-alt flex-shrink-0"></i>
        <div>
          <h4>العنوان</h4>
          <p>تواصل معنا لمعرفة المزيد عن خدماتنا وطريقة العمل.</p>
        </div>
      </div>

      <div class="info-item d-flex">
        <i class="bi bi-phone flex-shrink-0"></i>
        <div>
          <h4>رقم الهاتف</h4>
          <p dir="ltr">01044946388</p>
        </div>
      </div>

      <div class="info-item d-flex">
        <i class="bi bi-facebook flex-shrink-0"></i>
        <div>
          <h4>صفحة فيسبوك</h4>
          <p>
            <a href="https://www.facebook.com/profile.php?id=61591562046753" target="_blank">
              متابعة الصفحة
            </a>
          </p>
        </div>
      </div>

    </div>

  </div>

  <!-- نموذج التواصل -->
  <div class="col-lg-8">

    <form action="{{ route('contact.store') }}" method="POST">

      @csrf

      <div class="row">

        <div class="col-md-6 form-group">
          <input
            type="text"
            name="name"
            class="form-control"
            placeholder="الاسم"
            required
          >
        </div>

        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input
            type="text"
            name="phone"
            class="form-control"
            placeholder="رقم الهاتف"
            required
          >
        </div>

      </div>

      <div class="form-group mt-3">
        <textarea
          name="message"
          class="form-control"
          rows="5"
          placeholder="اكتب استفسارك أو الخدمة التي تحتاج إليها..."
          required
        ></textarea>
      </div>

      <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary">
          إرسال الطلب
        </button>
      </div>

    </form>

  </div>

</div>
