@extends('layouts.app')

@section('content')
  <main class="main-content">
        
            <!-- المحتوى -->
            <div class="content">
                <!-- بطاقات الإحصائيات -->
                <div class="stats-cards">
                    <div class="card">
                        <div class="card-icon" style="background-color: #4a6cf7;">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-info">
                            <h3>1,245</h3>
                            <p>إجمالي المستخدمين</p>
                        </div>
                        <div class="card-trend up">
                            <i class="fas fa-arrow-up"></i>
                            <span>12%</span>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-icon" style="background-color: #10b981;">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="card-info">
                            <h3>358</h3>
                            <p>الطلبات الجديدة</p>
                        </div>
                        <div class="card-trend up">
                            <i class="fas fa-arrow-up"></i>
                            <span>8%</span>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-icon" style="background-color: #f59e0b;">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="card-info">
                            <h3>$12,540</h3>
                            <p>الإيرادات</p>
                        </div>
                        <div class="card-trend down">
                            <i class="fas fa-arrow-down"></i>
                            <span>3%</span>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-icon" style="background-color: #ef4444;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="card-info">
                            <h3>89.5%</h3>
                            <p>معدل النمو</p>
                        </div>
                        <div class="card-trend up">
                            <i class="fas fa-arrow-up"></i>
                            <span>5%</span>
                        </div>
                    </div>
                </div>
                
                <!-- مخططات وإحصائيات -->
                <div class="charts-section">
                    <div class="chart-container">
                        <div class="chart-header">
                            <h2>إحصائيات المبيعات</h2>
                            <select class="chart-period">
                                <option>الأسبوع الحالي</option>
                                <option>الشهر الحالي</option>
                                <option>السنة الحالية</option>
                            </select>
                        </div>
                        <div class="chart-placeholder">
                            <div class="chart-bars">
                                <div class="bar" style="height: 70%;" data-value="700"></div>
                                <div class="bar" style="height: 85%;" data-value="850"></div>
                                <div class="bar" style="height: 60%;" data-value="600"></div>
                                <div class="bar" style="height: 90%;" data-value="900"></div>
                                <div class="bar" style="height: 75%;" data-value="750"></div>
                                <div class="bar" style="height: 95%;" data-value="950"></div>
                                <div class="bar" style="height: 80%;" data-value="800"></div>
                            </div>
                            <div class="chart-labels">
                                <span>السبت</span>
                                <span>الأحد</span>
                                <span>الإثنين</span>
                                <span>الثلاثاء</span>
                                <span>الأربعاء</span>
                                <span>الخميس</span>
                                <span>الجمعة</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="recent-orders">
                        <div class="orders-header">
                            <h2>الطلبات الأخيرة</h2>
                            <a href="#" class="view-all">عرض الكل</a>
                        </div>
                        <div class="orders-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>رقم الطلب</th>
                                        <th>العميل</th>
                                        <th>التاريخ</th>
                                        <th>المبلغ</th>
                                        <th>الحالة</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#ORD-001</td>
                                        <td>أحمد محمد</td>
                                        <td>12 مايو 2023</td>
                                        <td>$250</td>
                                        <td><span class="status delivered">مكتمل</span></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-002</td>
                                        <td>سارة عبدالله</td>
                                        <td>11 مايو 2023</td>
                                        <td>$180</td>
                                        <td><span class="status pending">قيد الانتظار</span></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-003</td>
                                        <td>خالد علي</td>
                                        <td>10 مايو 2023</td>
                                        <td>$420</td>
                                        <td><span class="status delivered">مكتمل</span></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-004</td>
                                        <td>نورة سعيد</td>
                                        <td>9 مايو 2023</td>
                                        <td>$95</td>
                                        <td><span class="status cancelled">ملغى</span></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-005</td>
                                        <td>فهد عبدالعزيز</td>
                                        <td>8 مايو 2023</td>
                                        <td>$310</td>
                                        <td><span class="status processing">قيد التجهيز</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- قسم آخر -->
                <div class="bottom-section">
                    <div class="activity-feed">
                        <h2>النشاطات الأخيرة</h2>
                        <div class="activities">
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <div class="activity-details">
                                    <p>تمت إضافة مستخدم جديد: علي أحمد</p>
                                    <span class="activity-time">منذ 10 دقائق</span>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="activity-details">
                                    <p>تم إنشاء طلب جديد برقم #ORD-006</p>
                                    <span class="activity-time">منذ 45 دقيقة</span>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="activity-details">
                                    <p>تم تحديث تقرير المبيعات لشهر أبريل</p>
                                    <span class="activity-time">منذ ساعتين</span>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-cog"></i>
                                </div>
                                <div class="activity-details">
                                    <p>تم تحديث إعدادات النظام</p>
                                    <span class="activity-time">منذ 5 ساعات</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="quick-actions">
                        <h2>إجراءات سريعة</h2>
                        <div class="actions-grid">
                            <a class="action-btn" href="{{route('stor.create')}}">
                                <i class="fas fa-plus-circle"></i>
                                <span>إضافة منتج</span>
</a>
                            <button class="action-btn">
                                <i class="fas fa-file-invoice-dollar"></i>
                                <span>إنشاء فاتورة</span>
                            </button>
                            <button class="action-btn">
                                <i class="fas fa-chart-pie"></i>
                                <span>تقرير إحصائي</span>
                            </button>
                            <button class="action-btn">
                                <i class="fas fa-user-cog"></i>
                                <span>إدارة المستخدمين</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- تذييل الصفحة -->
            <footer class="footer">
                <p>© 2023 لوحة التحكم. جميع الحقوق محفوظة.</p>
                <div class="footer-links">
                    <a href="#">الشروط والأحكام</a>
                    <a href="#">سياسة الخصوصية</a>
                    <a href="#">الدعم الفني</a>
                </div>
            </footer>
        </main>
    </div>
@endsection
