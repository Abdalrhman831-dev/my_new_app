@extends('frontend.main.layout')

@section('content') 


       
     

    <div class="stars" id="stars-container"></div>

  

    <section class="magic-hero" style="padding: 80px 0 40px 0;">
        <div class="container">
            <div class="hero-content" style="background: rgba(45, 15, 85, 0.6); padding: 40px; border-radius: 30px; border: 1px solid var(--magic-gold);">
                <h2 style="color: var(--magic-gold);">ينتهي مهرجان "كسوف القمر" خلال:</h2>
                <div class="timer-container">
                    <div class="timer-display">
                        <div class="timer-segment"><span class="timer-num">02</span><span class="timer-label">يوم</span></div>
                        <div class="timer-segment"><span class="timer-num">14</span><span class="timer-label">ساعة</span></div>
                        <div class="timer-segment"><span class="timer-num">35</span><span class="timer-label">دقيقة</span></div>
                        <div class="timer-segment"><span class="timer-num">10</span><span class="timer-label">ثانية</span></div>
                    </div>
                </div>
                <p style="margin-top: 20px;">اقتنِ القطع الأثرية بأسعار لن تتكرر حتى المحاق القادم!</p>
            </div>
        </div>
    </section>

    <section class="magic-section">
        <div class="container">
            <div class="magic-products">
                
                <div class="product-card offer-card">
                    <div class="discount-tag">30% خصم</div>
                    <div class="product-img">
                        <i class="fas fa-ring" style="color: #ffd700;"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">مجوهرات مسحورة</div>
                        <h3 class="product-name">خاتم الإخفاء الجزئي</h3>
                        <p class="product-description">يخفيك عن أعين الفضوليين بنسبة 70% (قد تظل قدماك ظاهرتين).</p>
                        <div class="product-price">
                            <span class="old-price">600 ذهب</span>
                            <span class="currency">ذهب سحري</span> 420
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart"><i class="fas fa-shopping-cart"></i> اغتنم العرض</button>
                        </div>
                    </div>
                </div>

                <div class="product-card offer-card">
                    <div class="discount-tag">50% خصم</div>
                    <div class="product-img">
                        <i class="fas fa-bolt" style="color: #00fbff;"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">إلكترونيات خيالية</div>
                        <h3 class="product-name">شاحن البرق الأزرق</h3>
                        <p class="product-description">يشحن هاتفك السحري في أقل من رمشة عين باستخدام طاقة العواصف.</p>
                        <div class="product-price">
                            <span class="old-price">150 ذهب</span>
                            <span class="currency">ذهب سحري</span> 75
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart"><i class="fas fa-bolt"></i> شراء فوري</button>
                        </div>
                    </div>
                </div>

                <div class="product-card offer-card">
                    <div class="discount-tag">هدية</div>
                    <div class="product-img">
                        <i class="fas fa-box-open" style="color: #ff8c00;"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">باقة التوفير</div>
                        <h3 class="product-name">صندوق المفاجآت الأثيري</h3>
                        <p class="product-description">اشترِ جرعتين واحصل على صندوق عشوائي يحتوي على أداة سحرية مخفية.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span> 200
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart"><i class="fas fa-gift"></i> اختر حظك</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <script>
        // كود بسيط لتحديث الثواني في التايمر (لأغراض العرض فقط)
        setInterval(() => {
            const sec = document.querySelectorAll('.timer-num')[3];
            let val = parseInt(sec.innerText);
            if(val > 0) sec.innerText = (val - 1).toString().padStart(2, '0');
            else sec.innerText = "59";
        }, 1000);
    </script>

    @endsection
