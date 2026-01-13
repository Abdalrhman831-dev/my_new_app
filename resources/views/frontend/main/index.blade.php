@extends('layout')

@section('content') {{-- تم تصحيح الإملاء هنا من contenet إلى content --}}
 
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

    @foreach($stor as $blog)
    <div class="product-card" data-category="electronics">
        <div class="product-img">
            <img src="{{asset('uploads/blogs/'.$blog['image']) }}" style="width:100%; height: 200px;" alt="منتج الكتروني">
        </div>
        <div class="product-info">
            <div class="product-category"> {{$blog['name']}}</div>
            <h3 class="product-name">{{$blog['title']}}</h3>
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

<script src="{{asset('assest/js/Script.js')}}"></script>
@endsection