
        // إنشاء النجوم المتلألئة
        const starsContainer = document.getElementById('stars-container');
        for (let i = 0; i < 150; i++) {
            const star = document.createElement('div');
            star.classList.add('star');
            star.style.width = `${Math.random() * 3 + 1}px`;
            star.style.height = star.style.width;
            star.style.left = `${Math.random() * 100}%`;
            star.style.top = `${Math.random() * 100}%`;
            star.style.animationDelay = `${Math.random() * 3}s`;
            star.style.opacity = Math.random() * 0.5 + 0.2;
            starsContainer.appendChild(star);
        }

        // إنشاء السحب السحرية
        const cloudsContainer = document.getElementById('clouds-container');
        for (let i = 0; i < 8; i++) {
            const cloud = document.createElement('div');
            cloud.classList.add('cloud');
            cloud.style.width = `${Math.random() * 250 + 80}px`;
            cloud.style.height = `${Math.random() * 150 + 40}px`;
            cloud.style.left = `${Math.random() * 100}%`;
            cloud.style.top = `${Math.random() * 100}%`;
            cloudsContainer.appendChild(cloud);
        }

        // إنشاء العناصر العائمة
        const floatingContainer = document.getElementById('floating-container');
        const floatingIcons = ['fas fa-gem', 'fas fa-star', 'fas fa-moon', 'fas fa-crown', 'fas fa-feather-alt', 'fas fa-key'];
        for (let i = 0; i < 12; i++) {
            const item = document.createElement('div');
            item.classList.add('floating-item');
            item.style.left = `${Math.random() * 100}%`;
            item.style.top = `${Math.random() * 100 + 100}%`;
            item.style.fontSize = `${Math.random() * 20 + 15}px`;
            item.style.color = i % 3 === 0 ? 'var(--magic-pink)' : i % 3 === 1 ? 'var(--crystal-blue)' : 'var(--fairy-gold)';
            item.innerHTML = `<i class="${floatingIcons[i % floatingIcons.length]}"></i>`;
            item.style.animationDuration = `${Math.random() * 20 + 15}s`;
            item.style.animationDelay = `${Math.random() * 5}s`;
            floatingContainer.appendChild(item);
        }

        // القائمة المتنقلة
       

        // تصفية المنتجات حسب الفئة
       

        // أزرار المفضلة
        const wishlistButtons = document.querySelectorAll('.wishlist-btn');
        wishlistButtons.forEach(button => {
            button.addEventListener('click', function() {
                this.classList.toggle('active');
                const icon = this.querySelector('i');
                
                if (this.classList.contains('active')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    createSparkleEffect(this);
                    showMessage('تمت إضافة المنتج إلى المفضلات السحرية!');
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                }
            });
        });

        // إضافة المنتجات إلى السلة
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        const cartCount = document.querySelector('.cart-count');
        let cartItems = 3;
        
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function() {
                cartItems++;
                cartCount.textContent = cartItems;
                
                // تأثير سحري
                const productCard = this.closest('.product-card');
                createMagicEffect(productCard);
                
                // تغيير نص الزر مؤقتاً
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fas fa-check"></i> تمت الإضافة';
                this.style.background = 'linear-gradient(to right, var(--elf-green), var(--unicorn-purple))';
                
                // عرض رسالة
                const productName = productCard.querySelector('.product-name').textContent;
                showMessage(`تمت إضافة ${productName} إلى سلة التسوق السحرية!`);
                
                // إرجاع الزر لحالته الأصلية بعد ثانيتين
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.style.background = 'linear-gradient(to right, var(--elf-green), var(--wizard-blue))';
                }, 2000);
            });
        });

        // زر الاستكشاف
        const exploreBtn = document.getElementById('explore-btn');
        exploreBtn.addEventListener('click', function() {
            createMagicEffect(this);
            showMessage('مرحباً بك في رحلتك السحرية عبر بازار الأثير! استعد لاكتشاف العجائب.');
            
            // تمرير لأسفل إلى المنتجات
            document.querySelector('.cosmetics').scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        });

        // تأثير سحري
        function createMagicEffect(element) {
            const rect = element.getBoundingClientRect();
            const sparklesCount = 10;
            
            for (let i = 0; i < sparklesCount; i++) {
                setTimeout(() => {
                    const sparkle = document.createElement('div');
                    sparkle.style.position = 'fixed';
                    sparkle.style.left = `${rect.left + Math.random() * rect.width}px`;
                    sparkle.style.top = `${rect.top + Math.random() * rect.height}px`;
                    sparkle.style.width = '10px';
                    sparkle.style.height = '10px';
                    sparkle.style.background = i % 3 === 0 
                        ? 'var(--magic-pink)' 
                        : i % 3 === 1 
                        ? 'var(--crystal-blue)' 
                        : 'var(--fairy-gold)';
                    sparkle.style.borderRadius = '50%';
                    sparkle.style.zIndex = '9999';
                    sparkle.style.pointerEvents = 'none';
                    sparkle.style.boxShadow = `0 0 10px ${i % 3 === 0 ? 'var(--magic-pink)' : i % 3 === 1 ? 'var(--crystal-blue)' : 'var(--fairy-gold)'}`;
                    document.body.appendChild(sparkle);
                    
                    // حركة الشرر
                    const angle = Math.random() * Math.PI * 2;
                    const distance = Math.random() * 50 + 30;
                    const targetX = Math.cos(angle) * distance;
                    const targetY = Math.sin(angle) * distance;
                    
                    let progress = 0;
                    const duration = 800;
                    const startTime = Date.now();
                    
                    function animateSparkle() {
                        progress = (Date.now() - startTime) / duration;
                        
                        if (progress < 1) {
                            sparkle.style.transform = `translate(${targetX * progress}px, ${targetY * progress}px) scale(${1 - progress})`;
                            sparkle.style.opacity = 1 - progress;
                            requestAnimationFrame(animateSparkle);
                        } else {
                            document.body.removeChild(sparkle);
                        }
                    }
                    
                    animateSparkle();
                }, i * 50);
            }
        }

        // تأثير الشرر
        function createSparkleEffect(element) {
            const rect = element.getBoundingClientRect();
            
            for (let i = 0; i < 5; i++) {
                const sparkle = document.createElement('div');
                sparkle.style.position = 'absolute';
                sparkle.style.left = `${Math.random() * 100}%`;
                sparkle.style.top = `${Math.random() * 100}%`;
                sparkle.style.width = '8px';
                sparkle.style.height = '8px';
                sparkle.style.background = 'var(--fairy-gold)';
                sparkle.style.borderRadius = '50%';
                sparkle.style.zIndex = '1';
                element.appendChild(sparkle);
                
                // اختفاء الشرر
                setTimeout(() => {
                    sparkle.style.opacity = '0';
                    sparkle.style.transform = 'scale(2)';
                    
                    setTimeout(() => {
                        if (sparkle.parentNode) {
                            sparkle.parentNode.removeChild(sparkle);
                        }
                    }, 300);
                }, 500);
            }
        }

        // عرض رسالة سحرية
        function showMessage(message) {
            // إزالة الرسالة السابقة إذا كانت موجودة
            const existingMessage = document.querySelector('.magic-message');
            if (existingMessage) {
                existingMessage.remove();
            }
            
            // إنشاء رسالة جديدة
            const messageElement = document.createElement('div');
            messageElement.classList.add('magic-message');
            messageElement.textContent = message;
            messageElement.style.position = 'fixed';
            messageElement.style.top = '20px';
            messageElement.style.left = '50%';
            messageElement.style.transform = 'translateX(-50%)';
            messageElement.style.background = 'rgba(10, 0, 26, 0.9)';
            messageElement.style.color = 'var(--fairy-gold)';
            messageElement.style.padding = '15px 30px';
            messageElement.style.borderRadius = '30px';
            messageElement.style.border = '1px solid var(--crystal-blue)';
            messageElement.style.boxShadow = '0 5px 20px rgba(0, 229, 255, 0.5)';
            messageElement.style.zIndex = '10000';
            messageElement.style.fontWeight = 'bold';
            messageElement.style.backdropFilter = 'blur(10px)';
            messageElement.style.textAlign = 'center';
            messageElement.style.maxWidth = '80%';
            
            document.body.appendChild(messageElement);
            
            // إخفاء الرسالة بعد 3 ثواني
            setTimeout(() => {
                messageElement.style.opacity = '0';
                messageElement.style.transform = 'translateX(-50%) translateY(-20px)';
                messageElement.style.transition = 'all 0.5s';
                
                setTimeout(() => {
                    if (messageElement.parentNode) {
                        messageElement.parentNode.removeChild(messageElement);
                    }
                }, 500);
            }, 3000);
        }

        // تأثير عند التمرير
        let lastScrollY = window.scrollY;
        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;
            
            // إضافة شرر عشوائي أثناء التمرير
            if (Math.abs(currentScrollY - lastScrollY) > 10 && Math.random() > 0.9) {
                const sparkle = document.createElement('div');
                sparkle.style.position = 'fixed';
                sparkle.style.left = `${Math.random() * window.innerWidth}px`;
                sparkle.style.top = `${Math.random() * window.innerHeight}px`;
                sparkle.style.width = '5px';
                sparkle.style.height = '5px';
                sparkle.style.background = Math.random() > 0.5 ? 'var(--magic-pink)' : 'var(--crystal-blue)';
                sparkle.style.borderRadius = '50%';
                sparkle.style.zIndex = '9998';
                sparkle.style.pointerEvents = 'none';
                document.body.appendChild(sparkle);
                
                setTimeout(() => {
                    sparkle.style.opacity = '0';
                    sparkle.style.transform = 'scale(2)';
                    sparkle.style.transition = 'all 0.5s';
                    
                    setTimeout(() => {
                        if (sparkle.parentNode) {
                            sparkle.parentNode.removeChild(sparkle);
                        }
                    }, 500);
                }, 300);
            }
            
            lastScrollY = currentScrollY;
        });

        // تأثير عند تحميل الصفحة
        window.addEventListener('load', () => {
            setTimeout(() => {
                showMessage('✨ مرحباً بك في بازار الأثير - حيث الخيال يصبح حقيقة! ✨');
            }, 1000);
        });



        // contact us



        // تأثير إرسال النموذج السحري
const contactForm = document.getElementById('magic-contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // تشغيل تأثير الشرر على الزر
        const submitBtn = this.querySelector('button');
        createMagicEffect(submitBtn);
        
        // إظهار رسالة النجاح
        setTimeout(() => {
            showMessage('✨ تم إطلاق رسالتك عبر الأثير بنجاح! ترقب ردنا السحري قريباً. ✨');
            contactForm.reset();
        }, 500);
    });
}


