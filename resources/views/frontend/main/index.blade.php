
@endsection
@extends('layout')
 
 
   <div class="stars" id="stars-container"></div>
    <div class="magic-clouds" id="clouds-container"></div>
    <div class="floating-items" id="floating-container"></div>
 
 


  <!-- قسم الهيرو -->
    <section class="magic-hero">
        <div class="container">
            <div class="hero-content">
                <h2>اكتشف عالمًا من السحر والتقنية</h2>
                <p>في بازار الأثير، نقدم لك أدوات تجميل سحرية من عالم الجنيات وأجهزة إلكترونية متطورة من مستقبل الخيال. كل منتج يحمل قصة سحرية خاصة به.</p>
                <button class="magic-btn" id="explore-btn"><i class="fas fa-compass"></i> ابدأ رحلتك السحرية</button>
            </div>
        </div>
    </section>

    <!-- قسم أدوات التجميل السحرية -->
    <section class="magic-section cosmetics">
        <div class="container">
            <h2 class="section-title"><i class="fas fa-paint-brush"></i> أدوات التجميل السحرية</h2>
            <p>استكشف مجموعتنا الفريدة من مستحضرات التجميل المستوحاة من عالم الخيال. كل منتج مصنوع بمكونات سحرية ليعطيك إطلالة خيالية.</p>
            
            <div class="magic-products">
                <!-- منتج 1 -->
                <div class="product-card" data-category="cosmetics">
                    <div class="product-img">
                        <i class="fas fa-lipstick"></i>
                        <div class="product-badge">جديد</div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">أحمر شفاه سحري</div>
                        <h3 class="product-name">لمعان جنيات الضوء</h3>
                        <p class="product-description">أحمر شفاه يتلألأ كأجنحة الجنيات، يتغير لونه مع حالتك المزاجية.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span>
                            45
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart" data-product="1"><i class="fas fa-magic"></i> أضف للسلة</button>
                            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
                
                <!-- منتج 2 -->
                <div class="product-card" data-category="cosmetics">
                    <div class="product-img">
                        <i class="fas fa-spray-can"></i>
                        <div class="product-badge">الأكثر مبيعاً</div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">عطر أسطوري</div>
                        <h3 class="product-name">نسمات وحيد القرن</h3>
                        <p class="product-description">عطر يحمل رائحة الزهور السحرية من غابة الأساطير، يدوم طوال اليوم.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span>
                            120
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart" data-product="2"><i class="fas fa-magic"></i> أضف للسلة</button>
                            <button class="wishlist-btn active"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                </div>
                
                <!-- منتج 3 -->
                <div class="product-card" data-category="cosmetics">
                    <div class="product-img">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">ظلال عيون</div>
                        <h3 class="product-name">ألوان تنين القمر</h3>
                        <p class="product-description">ظلال عيون تلمع في الظلام، مستوحاة من قشور تنانين القمر الأسطورية.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span>
                            68
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart" data-product="3"><i class="fas fa-magic"></i> أضف للسلة</button>
                            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
                
                <!-- منتج 4 -->
                <div class="product-card" data-category="cosmetics">
                    <div class="product-img">
                        <i class="fas fa-spa"></i>
                        <div class="product-badge">عرض محدود</div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">العناية بالبشرة</div>
                        <h3 class="product-name">مصل نبع الشباب</h3>
                        <p class="product-description">مصل سحري مصنوع من مياه النبع الأسطوري الذي يمنح الشباب الأبدي.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span>
                            200
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart" data-product="4"><i class="fas fa-magic"></i> أضف للسلة</button>
                            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- قسم الإلكترونيات الخيالية -->
    <section class="magic-section electronics">
        <div class="container">
            <h2 class="section-title"><i class="fas fa-robot"></i> الإلكترونيات الخيالية</h2>
            <p>تكنولوجيا من مستقبل الخيال. أجهزة ذكية تعمل بالسحر والتقنية المتطورة لتحقيق المستحيل.</p>
            
            <div class="magic-products">
                <!-- منتج 1 -->
                <div class="product-card" data-category="electronics">
                    <div class="product-img">
                        <i class="fas fa-headphones"></i>
                        <div class="product-badge">جديد</div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">سماعات ذكية</div>
                        <h3 class="product-name">سماعات سحر الأصوات</h3>
                        <p class="product-description">سماعات تسمع بها أصوات الجنيات وتترجم لغات المخلوقات الأسطورية.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span>
                            350
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart" data-product="5"><i class="fas fa-magic"></i> أضف للسلة</button>
                            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
                
                <!-- منتج 2 -->
                <div class="product-card" data-category="electronics">
                    <div class="product-img">
                        <i class="fas fa-mobile-alt"></i>
                        <div class="product-badge">الأكثر مبيعاً</div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">هاتف ذكي</div>
                        <h3 class="product-name">مرآة المستقبل الذكية</h3>
                        <p class="product-description">هاتف بشاشة مرآة سحرية تظهر لك صوراً من المستقبل القريب.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span>
                            1200
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart" data-product="6"><i class="fas fa-magic"></i> أضف للسلة</button>
                            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
                
                <!-- منتج 3 -->
                 @foreach($stor as  $blog)
                <div class="product-card" data-category="electronics">
                    <div class="product-img">
                        <img  src="{{asset('uploads/blogs/'.$blog['image']) }}"   style="width:100%; height: 200px;" alt="منتج الكتروني">
                    </div>
                    <div class="product-info">
                        <div class="product-category"> {{$blog['name']}}</div>
                        <h3 class="product-name">{{$blog['title']}}</h3>
                        <p class="product-description">ساعة تقرأ مشاعر من حولك وتحذرك من النوايا السيئة.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span>
                            ${{$blog['pric']}}
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart" data-product="7"><i class="fas fa-magic"></i> أضف للسلة</button>
                            <button class="wishlist-btn active"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <!-- منتج 4 -->
                <div class="product-card" data-category="electronics">
                    <div class="product-img">
                        <i class="fas fa-tablet-alt"></i>
                        <div class="product-badge">عرض حصري</div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">تابلت سحري</div>
                        <h3 class="product-name">لوح تعاويذ المستقبل</h3>
                        <p class="product-description">تابلت يسجل تعاويذك السحرية ويحللها لتحسين فعاليتها.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span>
                            850
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart" data-product="8"><i class="fas fa-magic"></i> أضف للسلة</button>
                            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

<script src="{{asset('assest/js/Script.js')}}"></script>
@endsection