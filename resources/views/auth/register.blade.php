
 
   <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب - لوحة التحكم</title>
      <link rel="stylesheet" href="{{asset('assest/css/styleregis.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="auth-page">
    <div class="auth-container">
        <div class="auth-box">
            <div class="auth-header">
                <div class="logo">
                    <i class="fas fa-chart-line"></i>
                    <h1>لوحة التحكم</h1>
                </div>
                <h2>إنشاء حساب جديد</h2>
                <p>انشئ حسابك في دقائق</p>
            </div>

            <form method="POST" action="{{ route('auth.register') }}">
                        @csrf
                <div class="form-group">
                    <label>الاسم الكامل</label>
 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                </div>

                <div class="form-group">
                    <label>البريد الإلكتروني</label>
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                </div>

                <div class="form-group">
                    <label>كلمة المرور</label>
                    <div class="password-field">
 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                        <button type="button" class="show-password">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <label>تأكيد كلمة المرور</label>
                     <div class="col-md-6">
 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">                      
   <button type="button" class="show-password">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

               

                <button type="submit" class="auth-btn">
                    إنشاء حساب
                </button>

             

    <script>
        // عرض/إخفاء كلمة المرور
        document.querySelectorAll('.show-password').forEach(button => {
            button.addEventListener('click', function() {
                const passwordField = this.parentElement.querySelector('input');
                const icon = this.querySelector('i');
                
                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    passwordField.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        });

        // عند إرسال النموذج
        document.querySelector('.auth-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const password = this.querySelector('input[name="password"]').value;
            const confirmPassword = this.querySelector('input[name="password_confirmation"]').value;
            
            if (password !== confirmPassword) {
                alert('كلمات المرور غير متطابقة');
                return;
            }
            
            if (password.length < 6) {
                alert('كلمة المرور يجب أن تكون 6 أحرف على الأقل');
                return;
            }
            
            // هنا يمكنك إرسال البيانات للسيرفر
            alert('تم إنشاء الحساب بنجاح!');
            window.location.href = 'login.html';
        });
    </script>
</body>
</html>