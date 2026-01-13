
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - لوحة التحكم</title>
    <link rel="stylesheet" href="{{asset('assest/css/logincon.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body class="login-page">
    <div class="login-container">
        <div class="login-left">
            <div class="login-content">
                <div class="logo">
                    <i class="fas fa-chart-line"></i>
                    <h1>لوحة التحكم</h1>
                </div>
                
                <h2>مرحباً بعودتك</h2>
                <p class="subtitle">سجل الدخول للوصول إلى حسابك</p>
                
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group">
                        <label for="email">البريد الإلكتروني</label>
                        <div class="input-with-icon" style="width:80%;">
                          
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                        </div>
                        <div class="error-message" id="email-error"></div>
                    </div>
                    
                    <div class="form-group ">
                        <label for="password">كلمة المرور</label>
                        <div class="input-with-icon"  style="width:80%;">
                            
  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            <button type="button" class="show-password" id="toggle-password">
                                
                            </button>
                        </div>
                        <div class="error-message" id="password-error"></div>
                    </div>
                    
                    <div class="form-options">
                        <label class="checkbox-container">
                            <input type="checkbox" id="remember-me">
                            <span class="checkmark"></span>
                            تذكرني
                        </label>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot">نسيت كلمة المرور؟</a>
                        @endif
                    </div>
                    
                    <button type="submit" class="login-btn" id="submit-btn">
                        <span>تسجيل الدخول</span>
                        <i class="fas fa-sign-in-alt"></i>
                    </button>
                    
                    <div class="divider">
                        <span>أو</span>
                    </div>
                    
                    
                    
                    <p class="register-link">
                        ليس لديك حساب؟ <a href="#" id="register-link">إنشاء حساب جديد</a>
                    </p>
                </form>
                
                <div class="login-footer">
                    <p>© 2023 لوحة التحكم. جميع الحقوق محفوظة.</p>
                    <div class="footer-links">
                        <a href="#">الشروط والأحكام</a>
                        <a href="#">سياسة الخصوصية</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="login-right">
            <div class="right-content">
                <div class="carousel">
                    <div class="carousel-slide active">
                        <div class="slide-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3>تحليلات متقدمة</h3>
                        <p>احصل على رؤى عميقة حول أداء أعمالك مع تقارير وتحليلات مفصلة</p>
                    </div>
                    <div class="carousel-slide">
                        <div class="slide-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>أمان على أعلى مستوى</h3>
                        <p>نحمي بياناتك بأحدث تقنيات التشفير وأساليب الحماية المتطورة</p>
                    </div>
                    <div class="carousel-slide">
                        <div class="slide-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>تصميم متجاوب</h3>
                        <p>استخدم لوحة التحكم على أي جهاز مع تصميم متكامل لكل أحجام الشاشات</p>
                    </div>
                </div>
                <div class="carousel-indicators">
                    <span class="indicator active" data-slide="0"></span>
                    <span class="indicator" data-slide="1"></span>
                    <span class="indicator" data-slide="2"></span>
                </div>
            </div>
        </div>
        
        <button class="theme-toggle login-theme-toggle" id="theme-toggle">
            <i class="fas fa-moon"></i>
        </button>
        
        <div class="language-selector login-language">
            <select id="login-language">
                <option value="ar" selected>العربية</option>
                <option value="en">English</option>
            </select>
        </div>
    </div>

    <!-- نافذة استعادة كلمة المرور -->
    

    <!-- نافذة إنشاء حساب -->
    <div class="modal" id="register-modal">
       
           
             
               
           
          @include('auth.register')
        </div>
    </div>

    <script src="{{asset('assest/js/loginconj.js')}}"></script>
</body>
</html>