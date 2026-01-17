@extends('frontend.main.layout')

@section('content') 



<section class="magic-section contact-page">
    <div class="container">
        <h2 class="section-title"><i class="fas fa-envelope-open-text"></i> تواصل مع عالمنا</h2>
        <p>هل لديك استفسار عن تعويذة معينة؟ أو ترغب في تتبع شحنة من وراء البوابات؟ أرسل رسالتك عبر الأثير وسيرد عليك حكماء المتجر فوراً.</p>

        <div class="contact-wrapper">
            <div class="contact-info-cards">
                <div class="info-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>موقعنا الأسطوري</h3>
                    <p>بوابة الأثير، شارع النجوم، عالم الخيال العالي</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-quill-pen"></i>
                    <h3>المراسلة الفورية</h3>
                    <p>info@bazaar-ether.com</p>
                    <p>support@ether-portal.magic</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-crystal-ball"></i>
                    <h3>ساعات العمل</h3>
                    <p>متاحون طوال فترات اكتمال القمر (24/7)</p>
                </div>
            </div>

            <div class="contact-form-container">
                <form id="magic-contact-form">
                    <div class="input-group">
                        <label>الاسم السحري</label>
                        <input type="text" placeholder="كيف نناديك؟" required>
                    </div>
                    <div class="input-group">
                        <label>بريد الأثير</label>
                        <input type="email" placeholder="example@magic.com" required>
                    </div>
                    <div class="input-group">
                        <label>نوع الاستفسار</label>
                        <select>
                            <option>طلب منتج سحري</option>
                            <option>مشكلة في البوابة (التوصيل)</option>
                            <option>تعاون بين العوالم</option>
                            <option>أخرى</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label>رسالتك</label>
                        <textarea rows="5" placeholder="اكتب تعويذتك هنا..." required></textarea>
                    </div>
                    <button type="submit" class="magic-btn">
                        <i class="fas fa-paper-plane"></i> إرسال عبر الأثير
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>




@endsection