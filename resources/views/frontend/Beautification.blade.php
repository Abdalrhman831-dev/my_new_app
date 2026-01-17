
@extends('frontend.main.layout')

@section('content') 

 

    <!-- قسم أدوات التجميل السحرية -->
    <section class="magic-section cosmetics">
        <div class="container">
            <h2 class="section-title"><i class="fas fa-paint-brush"></i> أدوات التجميل السحرية</h2>
            <p>استكشف مجموعتنا الفريدة من مستحضرات التجميل المستوحاة من عالم الخيال. كل منتج مصنوع بمكونات سحرية ليعطيك إطلالة خيالية.</p>
            
            <div class="magic-products">
                <!-- منتج 1 -->
                @foreach($products as $blog)
    <div class="product-card" data-category="electronics">
        <div class="product-img">
            <img src="{{asset('uploads/blogs/'.$blog['image']) }}" style="width:100%; height: 200px;" alt="منتج الكتروني">
        </div>
        <div class="product-info">
            <div class="product-category"> {{$blog['name']}}</div>
            <h3 class="product-name">{{$blog['title']}}</h3>
            <div class="product-price">
                <span class="currency">ذهب سحري</span>
                {{$blog['pric']}}
            </div>
            <div class="product-actions">
                <button class="add-to-cart" data-product="7"><i class="fas fa-magic"></i> أضف للسلة</button>
                <button class="wishlist-btn active"><i class="fas fa-heart"></i></button>
            </div>
        </div>
    </div>
    @endforeach
                
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
 

 

   @endsection