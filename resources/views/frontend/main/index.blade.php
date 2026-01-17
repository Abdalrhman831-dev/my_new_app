@extends('frontend.main.layout')

@section('content') 
 
   <div class="stars" id="stars-container"></div>
    <div class="magic-clouds" id="clouds-container"></div>
    <div class="floating-items" id="floating-container"></div>

    <section class="magic-hero">
        <div class="container">
            <div class="hero-content">
                <h2>اكتشف عالمًا من السحر والتقنية</h2>
                <p>في بازار الأثير، نقدم لك أدوات تجميل سحرية من عالم الجنيات وأجهزة إلكترونية متطورة من مستقبل الخيال. كل منتج يحمل قصة سحرية خاصة به.</p>
                <button class="magic-btn" id="explore-btn"><i class="fas fa-compass"></i> ابدأ رحلتك السحرية</button>
            </div>
        </div>
    </section>

    {{-- ... باقي الأقسام ... --}}
 <section style="margin-top:5%; ">
        <div class="container">
            <h2 class="section-title"><i class="fas fa-paint-brush"></i> أدوات التجميل السحرية</h2>
            <p>استكشف مجموعتنا الفريدة من مستحضرات التجميل المستوحاة من عالم الخيال. كل منتج مصنوع بمكونات سحرية ليعطيك إطلالة خيالية.</p>
            
            <div class="magic-products">
    @if($stor)
    <div class="product-card" data-category="electronics">
        <div class="product-img">
            <img src="{{asset('uploads/blogs/'.$stor['image']) }}" style="width:100%; height: 200px;" alt="منتج الكتروني">
        </div>
        <div class="product-info">
            <div class="product-category"> {{$stor['name']}}</div>
            <h3 class="product-name">{{$stor['title']}}</h3>
            <div class="product-price">
                <span class="currency">ذهب سحري</span>
                {{$stor['pric']}}
            </div>
            <div class="product-actions">
                <button class="add-to-cart" data-product="7"><i class="fas fa-magic"></i> أضف للسلة</button>
                <button class="wishlist-btn active"><i class="fas fa-heart"></i></button>
            </div>
        </div>
    </div>
    @endif
      </div>
    </section>

    <section >
        <div class="container">
            <h2 class="section-title"><i class="fas fa-robot"></i> الإلكترونيات الخيالية</h2>
            <p>تكنولوجيا من مستقبل الخيال. أجهزة ذكية تعمل بالسحر والتقنية المتطورة لتحقيق المستحيل.</p>
            
            <div class="magic-products">
                <!-- منتج 1 -->
                @if($stor1)
    <div class="product-card" data-category="electronics">
        <div class="product-img">
            <img src="{{asset('uploads/blogs/'.$stor1['image']) }}" style="width:100%; height: 200px;" alt="منتج الكتروني">
        </div>
        <div class="product-info">
            <div class="product-category"> {{$stor1['name']}}</div>
            <h3 class="product-name">{{$stor1['title']}}</h3>
            <div class="product-price">
                <span class="currency">ذهب سحري</span>
                {{$stor1['pric']}}
            </div>
            <div class="product-actions">
                <button class="add-to-cart" data-product="7"><i class="fas fa-magic"></i> أضف للسلة</button>
                <button class="wishlist-btn active"><i class="fas fa-heart"></i></button>
            </div>
        </div>
    </div>
    @endif

         </div>
</section>


@endsection