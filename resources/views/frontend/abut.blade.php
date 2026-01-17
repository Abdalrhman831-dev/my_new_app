
@extends('frontend.main.layout')

@section('content') 
    <div class="stars" id="stars-container"></div>
    <div class="magic-clouds" id="clouds-container"></div>

   

   

    <section class="magic-section">
        <div class="container">
            <div class="about-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; align-items: center;">
                
                <div class="about-text">
                    <h3 style="color: var(--magic-gold); font-family: 'Scheherazade New', serif; font-size: 2.5rem; margin-bottom: 20px;">رؤيتنا الأثيرية</h3>
                    <p style="line-height: 1.8; font-size: 1.1rem; color: #e0e0e0;">
                        بدأ **بازار الأثير** كحلم في ذهن خيميائي قديم ومهندس من المستقبل. أردنا كسر الحدود بين ما هو منطقي وما هو مستحيل. هنا، لا نبيع منتجات فقط، بل نبيع "شرارات من السحر" تعيد الألق لحياتكم اليومية.
                    </p>
                    <p style="line-height: 1.8; font-size: 1.1rem; color: #e0e0e0; margin-top: 15px;">
                        سواء كنتِ تبحثين عن جمال مستمد من ضوء القمر، أو تبحث عن تقنيات تسبق عصرها بقرون، فإن بوابتنا هي وجهتكم الأولى.
                    </p>
                </div>

                <div class="about-stats" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="stat-card" style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 15px; border: 1px solid var(--magic-gold); text-align: center;">
                        <i class="fas fa-hat-wizard" style="font-size: 2rem; color: var(--magic-gold);"></i>
                        <h4 style="margin-top: 10px;">+500</h4>
                        <p>تعويذة مفعلة</p>
                    </div>
                    <div class="stat-card" style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 15px; border: 1px solid var(--magic-gold); text-align: center;">
                        <i class="fas fa-users" style="font-size: 2rem; color: var(--magic-gold);"></i>
                        <h4 style="margin-top: 10px;">+10k</h4>
                        <p>مسافر عبر البوابة</p>
                    </div>
                    <div class="stat-card" style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 15px; border: 1px solid var(--magic-gold); text-align: center;">
                        <i class="fas fa-dragon" style="font-size: 2rem; color: var(--magic-gold);"></i>
                        <h4 style="margin-top: 10px;">99%</h4>
                        <p>رضا الكائنات</p>
                    </div>
                    <div class="stat-card" style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 15px; border: 1px solid var(--magic-gold); text-align: center;">
                        <i class="fas fa-shuttle-space" style="font-size: 2rem; color: var(--magic-gold);"></i>
                        <h4 style="margin-top: 10px;">مجرة</h4>
                        <p>نطاق التوصيل</p>
                    </div>
                </div>
            </div>

            <div class="values-section" style="margin-top: 80px; text-align: center;">
                <h2 class="section-title">لماذا نحن؟</h2>
                <div class="magic-products" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                    <div class="product-card">
                        <div class="product-info">
                            <i class="fas fa-shield-halved" style="font-size: 3rem; color: var(--magic-gold); margin-bottom: 15px;"></i>
                            <h3>جودة أسطورية</h3>
                            <p>جميع منتجاتنا تمر باختبارات في مختبرات "ألفا" السحرية لضمان ثبات المفعول.</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-info">
                            <i class="fas fa-bolt" style="font-size: 3rem; color: var(--magic-gold); margin-bottom: 15px;"></i>
                            <h3>شحن عبر الأبعاد</h3>
                            <p>نستخدم ثقوباً دودية آمنة لإيصال طلبك إلى باب منزلك في أي عالم كنت.</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-info">
                            <i class="fas fa-hand-sparkles" style="font-size: 3rem; color: var(--magic-gold); margin-bottom: 15px;"></i>
                            <h3>دعم روحاني</h3>
                            <p>فريق دعمنا متاح 24/7 للإجابة على استفساراتكم البشرية وغير البشرية.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 


@endsection