<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="{{asset('assest/css/stylecon.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
      <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- الشريط الجانبي -->
        <aside class="sidebar">
            <div class="logo">
                <i class="fas fa-chart-line"></i>
                <h1>لوحة التحكم</h1>
            </div>
            
            <nav class="menu">
                <ul>
                    <li class="active">
                        <a href="{{route('home')}}">
                            <i class="fas fa-home"></i>
                            <span>الرئيسية</span>
                        </a>
                    </li>
                    <li >
                        <a href="#">
                            <i class="fas fa-chart-bar"></i>
                            <span>الإحصائيات</span>
                        </a>
                    </li>
                    <li >
                       <a href="{{route('users')}}">
                            <i class="fas fa-users"></i>
                          <span> المستخدمين</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('contr.index')}}">
                            <i class="fas fa-box"></i>
                            <span>المنتجات</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span>الطلبات</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-cog"></i>
                            <span>الإعدادات</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-question-circle"></i>
                            <span>المساعدة</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <div class="user-info">
                <div class="avatar">
                    <img src="https://ui-avatars.com/api/?name=مدير+النظام&background=4a6cf7&color=fff" alt="صورة المستخدم">
                </div>
                <div class="user-details">
                    <h3>{{ Auth::User()->name }}</h3>
                    <p>{{ Auth::User()->email }}</p>
                </div>
                <a href="{{ route('logout') }}" class="logout-btn"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                        
                    <i class="fas fa-sign-out-alt"></i>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </a>
            </div>
        </aside>
        
        <!-- المحتوى الرئيسي -->
       <main class="py-4">
            <!-- شريط العنوان العلوي -->
            <header class="top-bar">
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="ابحث هنا...">
                </div>
                
                <div class="header-actions">
                    <button class="notification-btn">
                        <i class="fas fa-bell"></i>
                        <span class="notification-count">3</span>
                    </button>
                    <button class="theme-toggle" id="theme-toggle">
                        <i class="fas fa-moon"></i>
                    </button>
                    <div class="language-selector">
                        <select>
                            <option value="ar">العربية</option>
                            <option value="en">English</option>
                        </select>
                    </div>
                </div>
            </header>
            
            @yield('content')
        </main>
           

    <script src="{{asset('assest/js/conjs.js')}}"></script>
</body>
</html>