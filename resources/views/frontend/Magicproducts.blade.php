@extends('frontend.main.layout')

@section('content') 

   

    <section class="magic-hero" style="padding: 100px 0 50px 0; background: linear-gradient(to bottom, rgba(30, 10, 55, 0.8), transparent);">
        <div class="container text-center">
            <h2 class="section-title" style="font-size: 3rem; margin-bottom: 10px;">خزانة التعاويذ والأدوات</h2>
            <p style="max-width: 700px; margin: 0 auto; color: #b8a3ff;">تحذير: هذه المنتجات تتطلب طاقة روحية عالية للاستخدام. الرجاء قراءة كتيب التعاويذ المرفق بعناية.</p>
        </div>
    </section>

    <section class="magic-section">
        <div class="container">
            <div class="magic-products">
                
                <div class="product-card" data-category="magic">
                    <div class="product-img">
                        <i class="fas fa-wand-magic-sparkles"></i>
                        <div class="product-badge">نادر جداً</div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">أدوات التركيز</div>
                        <h3 class="product-name">عصا خشب البلوط القديم</h3>
                        <p class="product-description">مصنوعة من قلب شجر البلوط الذي شهد العصر الأول. مثالية لتعاويذ الطيران والتحويل.</p>
                        <div class="product-price">
                            <span class="currency">ياقوتة زرقاء</span> 15
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart"><i class="fas fa-bolt"></i> شراء الآن</button>
                            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="magic">
                    <div class="product-img">
                        <i class="fas fa-flask-vial"></i>
                        <div class="product-badge">الأكثر طلباً</div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">جرعات وخيمياء</div>
                        <h3 class="product-name">ترياق الحظ السائل</h3>
                        <p class="product-description">قطرة واحدة تمنحك يوماً من المصادفات السعيدة. مفعوله ينتهي عند غروب الشمس.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span> 320
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart"><i class="fas fa-flask"></i> أضف للحقيبة</button>
                            <button class="wishlist-btn active"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="magic">
                    <div class="product-img">
                        <i class="fas fa-book-dead"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">مخطوطات</div>
                        <h3 class="product-name">كتاب النجوم المفقودة</h3>
                        <p class="product-description">يحتوي على خرائط لمجرات اختفت من الوجود. الكتاب يتحدث بصوت منخفض لمن يفتحه.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span> 950
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart"><i class="fas fa-magic"></i> فك الختم</button>
                            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="magic">
                    <div class="product-img">
                        <i class="fas fa-rug"></i>
                        <div class="product-badge">مستعمل ملكي</div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">وسائل نقل</div>
                        <h3 class="product-name">سجادة الريح الشمالية</h3>
                        <p class="product-description">تتسع لشخصين وقطة. تعمل بالطاقة الشمسية وصوت الموسيقى الهادئة.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span> 2500
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart"><i class="fas fa-wind"></i> طيران!</button>
                            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="magic">
                    <div class="product-img">
                        <i class="fas fa-crystal-ball"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">تنبؤ</div>
                        <h3 class="product-name">الكرة البلورية الضبابية</h3>
                        <p class="product-description">تظهر لك ما يفعله أصدقاؤك الآن (يتطلب إذنهم الروحاني مسبقاً).</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span> 580
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart"><i class="fas fa-eye"></i> استبصار</button>
                            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="magic">
                    <div class="product-img">
                        <i class="fas fa-oil-can"></i>
                        <div class="product-badge">مسكون</div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">إنارة أثرية</div>
                        <h3 class="product-name">مصباح الجني المحبوس</h3>
                        <p class="product-description">لا يمنح أمنيات، لكنه يقدم نصائح ممتازة في الطبخ والتدبير المنزلي.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span> 120
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart"><i class="fas fa-hand-sparkles"></i> مسح المصباح</button>
                            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection