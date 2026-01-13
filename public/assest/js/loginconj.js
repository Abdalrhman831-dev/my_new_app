// تفعيل وضع الليل/النهار
const themeToggle = document.getElementById('theme-toggle');
const themeIcon = themeToggle.querySelector('i');

// التحقق من تفضيلات المستخدم
const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
const currentTheme = localStorage.getItem('theme');

if (currentTheme === 'dark' || (!currentTheme && prefersDarkScheme.matches)) {
    document.body.classList.add('dark-mode');
    themeIcon.classList.remove('fa-moon');
    themeIcon.classList.add('fa-sun');
}

themeToggle.addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    
    if (document.body.classList.contains('dark-mode')) {
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
        localStorage.setItem('theme', 'dark');
    } else {
        themeIcon.classList.remove('fa-sun');
        themeIcon.classList.add('fa-moon');
        localStorage.setItem('theme', 'light');
    }
});

// تغيير اللغة
const languageSelect = document.getElementById('login-language');
languageSelect.addEventListener('change', function() {
    // في Laravel، يمكن إرسال طلب AJAX لتغيير اللغة
    const selectedLanguage = this.value;
    console.log('اللغة المختارة:', selectedLanguage);
    
    // إرسال طلب لتغيير اللغة
    fetch('/change-language', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ language: selectedLanguage })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload(); // إعادة تحميل الصفحة بعد تغيير اللغة
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

// عرض/إخفاء كلمة المرور
const togglePassword = document.getElementById('toggle-password');
if (togglePassword) {
    const passwordInput = document.getElementById('password');
    const eyeIcon = togglePassword.querySelector('i');
    
    togglePassword.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    });
}

// كاروسيل الجانب الأيمن
const indicators = document.querySelectorAll('.indicator');
const slides = document.querySelectorAll('.carousel-slide');
let currentSlide = 0;
let slideInterval;

function goToSlide(n) {
    if (slides.length > 0) {
        slides[currentSlide].classList.remove('active');
        indicators[currentSlide].classList.remove('active');
        
        currentSlide = (n + slides.length) % slides.length;
        
        slides[currentSlide].classList.add('active');
        indicators[currentSlide].classList.add('active');
    }
}

function nextSlide() {
    goToSlide(currentSlide + 1);
}

// تفعيل النقر على المؤشرات
indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        clearInterval(slideInterval);
        goToSlide(index);
        startCarousel();
    });
});

// بدء الكاروسيل تلقائياً
function startCarousel() {
    if (slides.length > 0) {
        slideInterval = setInterval(nextSlide, 4000);
    }
}

startCarousel();

// إدارة النوافذ المنبثقة
const forgotPasswordLink = document.querySelector('.forgot-password');
const passwordModal = document.getElementById('password-modal');
const registerLink = document.getElementById('register-link');
const registerModal = document.getElementById('register-modal');
const closeModalButtons = document.querySelectorAll('.close-modal');
const sendResetBtn = document.getElementById('send-reset');
const createAccountBtn = document.getElementById('create-account');

// فتح نافذة استعادة كلمة المرور
if (forgotPasswordLink) {
    forgotPasswordLink.addEventListener('click', function(e) {
        e.preventDefault();
        if (passwordModal) passwordModal.classList.add('active');
    });
}

// فتح نافذة إنشاء حساب
if (registerLink) {
    registerLink.addEventListener('click', function(e) {
        e.preventDefault();
        if (registerModal) registerModal.classList.add('active');
    });
}

// إغلاق النوافذ المنبثقة
closeModalButtons.forEach(button => {
    button.addEventListener('click', function() {
        if (passwordModal) passwordModal.classList.remove('active');
        if (registerModal) registerModal.classList.remove('active');
    });
});

// إغلاق النوافذ بالضغط خارج المحتوى
window.addEventListener('click', function(e) {
    if (passwordModal && e.target === passwordModal) {
        passwordModal.classList.remove('active');
    }
    if (registerModal && e.target === registerModal) {
        registerModal.classList.remove('active');
    }
});

// إرسال رابط استعادة كلمة المرور
if (sendResetBtn) {
    sendResetBtn.addEventListener('click', function() {
        const resetEmail = document.getElementById('reset-email').value;
        
        // Laravel يتولى التحقق من المدخلات
        console.log('طلب استعادة كلمة المرور للبريد:', resetEmail);
        
        // هنا يمكنك إضافة طلب AJAX لـ Laravel
        // fetch('/password/email', {
        //     method: 'POST',
        //     headers: {
        //         'Content-Type': 'application/json',
        //         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        //     },
        //     body: JSON.stringify({ email: resetEmail })
        // })
        
        // للإظهار فقط - إغلاق النافذة بعد "إرسال" الرابط
        setTimeout(() => {
            if (passwordModal) passwordModal.classList.remove('active');
            alert('إذا كان البريد الإلكتروني مسجلاً في نظامنا، ستتلقى رابط استعادة كلمة المرور قريباً.');
        }, 500);
    });
}

// إنشاء حساب جديد
if (createAccountBtn) {
    createAccountBtn.addEventListener('click', function() {
        const firstName = document.getElementById('first-name').value;
        const lastName = document.getElementById('last-name').value;
        const registerEmail = document.getElementById('register-email').value;
        const registerPassword = document.getElementById('register-password').value;
        const confirmPassword = document.getElementById('confirm-password').value;
        const agreeTerms = document.getElementById('agree-terms').checked;
        
        // Laravel يتولى التحقق من المدخلات
        console.log('بيانات إنشاء حساب جديد:', {
            firstName,
            lastName,
            registerEmail,
            registerPassword,
            confirmPassword,
            agreeTerms
        });
        
        // هنا يمكنك إضافة طلب AJAX للتسجيل في Laravel
        // fetch('/register', {
        //     method: 'POST',
        //     headers: {
        //         'Content-Type': 'application/json',
        //         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        //     },
        //     body: JSON.stringify({
        //         first_name: firstName,
        //         last_name: lastName,
        //         email: registerEmail,
        //         password: registerPassword,
        //         password_confirmation: confirmPassword
        //     })
        // })
        
        // للإظهار فقط - إغلاق النافذة
        setTimeout(() => {
            if (registerModal) registerModal.classList.remove('active');
            alert('تم إنشاء حسابك بنجاح! يمكنك الآن تسجيل الدخول.');
        }, 500);
    });
}

// مصادقة نموذج تسجيل الدخول
const loginForm = document.getElementById('login-form');
const submitBtn = document.getElementById('submit-btn');

// في Laravel، لا نحتاج للتحقق من المدخلات في الجافاسكريبت لأن Laravel يتولى ذلك
// يمكننا فقط إضافة تأثيرات وتحسينات واجهة المستخدم

if (loginForm) {
    loginForm.addEventListener('submit', function(e) {
        // لا نمنع الإرسال لأن Laravel سيتولى التحقق
        // نحن فقط نضيف تأثيرات للزر
        
        if (submitBtn) {
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري تسجيل الدخول...';
            submitBtn.disabled = true;
            
            // إعادة تمكين الزر بعد 3 ثواني (في حالة فشل الإرسال)
            setTimeout(() => {
                if (submitBtn) {
                    submitBtn.innerHTML = '<span>تسجيل الدخول</span><i class="fas fa-sign-in-alt"></i>';
                    submitBtn.disabled = false;
                }
            }, 3000);
        }
    });
}

// تسجيل الدخول عبر وسائل التواصل الاجتماعي
const socialButtons = document.querySelectorAll('.social-btn');
socialButtons.forEach(button => {
    button.addEventListener('click', function() {
        const platform = this.classList.contains('google-btn') ? 'google' : 'microsoft';
        
        // في Laravel، يمكن استخدام Socialite للدخول عبر وسائل التواصل الاجتماعي
        console.log('تسجيل الدخول عبر:', platform);
        
        // توجيه المستخدم إلى رابط المصادقة
        // window.location.href = `/auth/${platform}`;
        
        alert(`سيتم توجيهك إلى صفحة تسجيل الدخول عبر ${platform === 'google' ? 'Google' : 'Microsoft'}`);
    });
});

// تحميل البريد الإلكتروني المحفوظ إذا كان موجوداً
window.addEventListener('DOMContentLoaded', function() {
    const rememberedEmail = localStorage.getItem('rememberedEmail');
    const emailInput = document.getElementById('email');
    const rememberMeCheckbox = document.getElementById('remember-me');
    
    if (rememberedEmail && emailInput) {
        emailInput.value = rememberedEmail;
        if (rememberMeCheckbox) {
            rememberMeCheckbox.checked = true;
        }
    }
});

// حفظ البريد الإلكتروني عند اختيار "تذكرني"
const rememberMeCheckbox = document.getElementById('remember-me');
if (rememberMeCheckbox) {
    rememberMeCheckbox.addEventListener('change', function() {
        const emailInput = document.getElementById('email');
        if (this.checked && emailInput.value) {
            localStorage.setItem('rememberedEmail', emailInput.value);
        } else {
            localStorage.removeItem('rememberedEmail');
        }
    });
}

// تأثيرات إضافية عند التحميل
window.addEventListener('load', function() {
    // إضافة تأثيرات للعناصر
    const formElements = document.querySelectorAll('.form-group, .login-btn, .social-btn');
    formElements.forEach((el, index) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
        }, 100 + index * 100);
    });
    
    // تأثير للشعار
    const logo = document.querySelector('.logo');
    if (logo) {
        logo.style.opacity = '0';
        logo.style.transform = 'scale(0.9)';
        
        setTimeout(() => {
            logo.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            logo.style.opacity = '1';
            logo.style.transform = 'scale(1)';
        }, 300);
    }
    
    // إضافة CSRF token لجميع طلبات AJAX
    // هذا مهم لـ Laravel
    const csrfToken = document.querySelector('meta[name="csrf-token"]');
    if (!csrfToken) {
        console.warn('CSRF token meta tag not found!');
    }
});

// دالة مساعدة لإرسال طلبات AJAX مع Laravel
function sendAjaxRequest(url, method, data, callback) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]');
    
    const headers = {
        'Content-Type': 'application/json',
    };
    
    if (csrfToken) {
        headers['X-CSRF-TOKEN'] = csrfToken.getAttribute('content');
    }
    
    fetch(url, {
        method: method,
        headers: headers,
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (callback) callback(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// مثال: دالة تسجيل الدخول مع AJAX
function loginWithAjax(email, password, remember) {
    sendAjaxRequest('/login', 'POST', {
        email: email,
        password: password,
        remember: remember
    }, function(response) {
        if (response.redirect) {
            window.location.href = response.redirect;
        } else if (response.errors) {
            // عرض أخطاء Laravel
            displayLaravelErrors(response.errors);
        }
    });
}

// دالة لعرض أخطاء Laravel
function displayLaravelErrors(errors) {
    // مسح الأخطاء القديمة
    const errorElements = document.querySelectorAll('.error-message');
    errorElements.forEach(el => {
        el.textContent = '';
        el.style.display = 'none';
    });
    
    // عرض الأخطاء الجديدة
    for (const field in errors) {
        const errorElement = document.getElementById(`${field}-error`);
        if (errorElement) {
            errorElement.textContent = errors[field][0];
            errorElement.style.display = 'block';
        }
    }
}

// تفعيل التأثيرات عند التركيز على حقول الإدخال
const inputFields = document.querySelectorAll('input[type="text"], input[type="email"], input[type="password"]');
inputFields.forEach(input => {
    input.addEventListener('focus', function() {
        this.parentElement.style.transform = 'scale(1.02)';
    });
    
    input.addEventListener('blur', function() {
        this.parentElement.style.transform = 'scale(1)';
    });
});