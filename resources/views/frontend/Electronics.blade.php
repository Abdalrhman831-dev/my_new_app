@extends('frontend.main.layout')

@section('content') 



    <!-- قسم أدوات التجميل السحرية -->
   

    <!-- قسم الإلكترونيات الخيالية -->
    <section class="magic-section electronics">
        <div class="container">
            <h2 class="section-title"><i class="fas fa-robot"></i> الإلكترونيات الخيالية</h2>
            <p>تكنولوجيا من مستقبل الخيال. أجهزة ذكية تعمل بالسحر والتقنية المتطورة لتحقيق المستحيل.</p>
            
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
                <div class="product-card" data-category="electronics">
                    <div class="product-img">
                        <i class="fas fa-smartwatch"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">ساعة ذكية</div>
                        <h3 class="product-name">ساعة نبضات القلب السحري</h3>
                        <p class="product-description">ساعة تقرأ مشاعر من حولك وتحذرك من النوايا السيئة.</p>
                        <div class="product-price">
                            <span class="currency">ذهب سحري</span>
                            450
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart" data-product="7"><i class="fas fa-magic"></i> أضف للسلة</button>
                            <button class="wishlist-btn active"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                </div>
                
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


  @endsection