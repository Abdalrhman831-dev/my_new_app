<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limit discounts</title>
    
    <link rel="stylesheet" href="{{asset('assest/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assest/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assest/css/bootstrap.css')}}" >
    <link rel="stylesheet" href="{{asset('assest/css/style.css')}}" >
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css')}}">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
     <link href="{{asset('https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&family=Almarai:wght@300;400;700&display=swap')}}" rel="stylesheet">
    
   
</head>
<body>



@include('frontend.holdfot.heder')
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
@include('frontend.holdfot.footer')



</body>
</html>