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

// تفعيل التنبيهات
const notificationBtn = document.querySelector('.notification-btn');
notificationBtn.addEventListener('click', function() {
    alert('لديك 3 تنبيهات غير مقروءة');
});

// تأثير للأشرطة في المخطط
const bars = document.querySelectorAll('.bar');
bars.forEach(bar => {
    bar.style.height = '0%';
    
    setTimeout(() => {
        const targetHeight = bar.style.height;
        bar.style.height = targetHeight;
    }, 300);
});

// تأثير عند التمرير على البطاقات
const cards = document.querySelectorAll('.card');
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

cards.forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    observer.observe(card);
});

// تأثير زر الإجراءات السريعة
const actionButtons = document.querySelectorAll('.action-btn');
actionButtons.forEach(button => {
    button.addEventListener('click', function() {
        const buttonText = this.querySelector('span').textContent;
        alert(`سيتم فتح صفحة: ${buttonText}`);
    });
});

// إضافة تأثير للمفاتيح النشطة
const menuItems = document.querySelectorAll('.menu li a');
menuItems.forEach(item => {
    item.addEventListener('click', function(e) {
      
        
        // إزالة النشاط من جميع العناصر
        menuItems.forEach(i => i.parentElement.classList.remove('active'));
        
        // إضافة النشاط للعنصر الحالي
        this.parentElement.classList.add('active');
        
        // عرض رسالة مؤقتة (بدلاً من الانتقال لصفحة جديدة)
       
    });
});

// تفعيل البحث
const searchInput = document.querySelector('.search-bar input');
searchInput.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        if (this.value.trim() !== '') {
            alert(`سيتم البحث عن: ${this.value}`);
            this.value = '';
        }
    }
});

// تأثير للجدول عند التمرير
const tableRows = document.querySelectorAll('tbody tr');
tableRows.forEach(row => {
    row.addEventListener('mouseenter', function() {
        this.style.backgroundColor = document.body.classList.contains('dark-mode') 
            ? '#374151' 
            : '#f9fafb';
    });
    
    row.addEventListener('mouseleave', function() {
        this.style.backgroundColor = '';
    });
});