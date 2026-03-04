/**
 * <?= $domainTitle ?> - Core Engine v2.0
 * 2026 Edition
 */

document.addEventListener('DOMContentLoaded', () => {

    // --- 1. ВСПОМОГАТЕЛЬНЫЕ ФУНКЦИИ ---
    const initIcons = () => {
        if (typeof lucide !== 'undefined') lucide.createIcons();
    };
    initIcons();

    // --- 2. БИБЛИОТЕКИ (AOS) ---
    if (typeof AOS !== 'undefined') {
        AOS.init({ 
            duration: 1000, 
            once: true, 
            easing: 'ease-out-cubic',
            disable: 'mobile' // Опционально: можно отключить на слабых телефонах
        });
    }

    // --- 3. НАВИГАЦИЯ И МОБИЛЬНОЕ МЕНЮ ---
    const header = document.querySelector('#header');
    const burger = document.getElementById('burger');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-menu__link');

    // Эффект хедера при скролле
    window.addEventListener('scroll', () => {
        if (header) {
            header.classList.toggle('header--scrolled', window.scrollY > 50);
        }
    });

    // Логика бургера
    if (burger && mobileMenu) {
        burger.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        });

        // Закрытие при клике на ссылку
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                burger.classList.remove('active');
                mobileMenu.classList.remove('active');
                document.body.classList.remove('no-scroll');
            });
        });
    }

    // --- 4. АНИМАЦИИ (ANIME.JS) ---
    if (typeof anime !== 'undefined') {
        
        // Логотип: вращение и скругление
        const logoIcon = document.querySelector('.logo__icon');
        if (logoIcon) {
            logoIcon.addEventListener('mouseenter', () => {
                anime({ targets: '.logo__icon', rotate: '90deg', borderRadius: ['8px', '50%'], duration: 600 });
            });
            logoIcon.addEventListener('mouseleave', () => {
                anime({ targets: '.logo__icon', rotate: '0deg', borderRadius: ['50%', '8px'], duration: 600 });
            });
        }

        // Hero Title: Эффект прыгающих букв
        const heroTitleSpans = document.querySelectorAll('.hero__title span');
        heroTitleSpans.forEach(span => {
            span.addEventListener('mouseenter', () => {
                anime({ targets: span, translateY: -10, scale: 1.1, color: '#6366f1', duration: 300 });
            });
            span.addEventListener('mouseleave', () => {
                anime({ targets: span, translateY: 0, scale: 1, color: '#ffffff', duration: 500 });
            });
        });

        // Цифровой водопад (Binary Rain)
        const bgContainer = document.getElementById('hero-bg');
        if (bgContainer) {
            const columnCount = Math.floor(window.innerWidth / 40);
            for (let i = 0; i < columnCount; i++) {
                const col = document.createElement('div');
                col.classList.add('binary-column');
                let bin = ''; 
                for (let j = 0; j < 40; j++) bin += Math.round(Math.random()) + '<br>';
                col.innerHTML = bin;
                col.style.left = `${(i / columnCount) * 100}%`;
                bgContainer.appendChild(col);
            }
            anime({
                targets: '.binary-column',
                translateY: ['-100%', '100%'],
                duration: () => anime.random(15000, 30000),
                easing: 'linear', loop: true, delay: () => anime.random(0, 5000)
            });
        }
    }

    // --- 5. СТАТИСТИКА (ФИКС NaN%) ---
    const statsSection = document.querySelector('.features__stats');
    const statsNumbers = document.querySelectorAll('.stat-card__number');

    if (statsSection && statsNumbers.length > 0) {
        const startStats = () => {
            statsNumbers.forEach(stat => {
                // Извлекаем только цифры из атрибута data-target
                const rawData = stat.getAttribute('data-target');
                const target = parseInt(rawData ? rawData.replace(/\D/g, '') : "0", 10);
                
                if (isNaN(target)) return;

                anime({
                    targets: stat,
                    innerHTML: [0, target],
                    round: 1,
                    duration: 2500,
                    easing: 'easeOutExpo',
                    update: (anim) => {
                        const val = Math.round(anim.animations[0].currentValue);
                        // Добавляем спецсимволы в зависимости от целевого значения
                        if (target === 95) stat.innerHTML = val + '%';
                        else if (target === 50) stat.innerHTML = val + '+';
                        else stat.innerHTML = val.toLocaleString();
                    }
                });
            });
        };

        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                startStats();
                observer.unobserve(statsSection);
            }
        }, { threshold: 0.3 });
        observer.observe(statsSection);
    }

    // --- 6. SWIPER (ОТЗЫВЫ) ---
    const swiperEl = document.querySelector('.reviews-slider');
    if (swiperEl && typeof Swiper !== 'undefined') {
        new Swiper('.reviews-slider', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: { el: '.swiper-pagination', clickable: true },
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            },
            autoplay: { delay: 5000, disableOnInteraction: false }
        });
    }

    // --- 7. FAQ АККОРДЕОН ---
    const faqTriggers = document.querySelectorAll('.faq-item__trigger');
    faqTriggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const item = trigger.parentElement;
            const wasActive = item.classList.contains('active');
            
            // Закрываем остальные
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
            
            // Открываем текущий
            if (!wasActive) item.classList.add('active');
        });
    });

    // --- 8. ФОРМА КОНТАКТОВ И КАПЧА ---
    const mainForm = document.getElementById('main-form');
    if (mainForm) {
        // Валидация телефона (только цифры)
        const phone = document.getElementById('phone-input');
        if (phone) {
            phone.addEventListener('input', (e) => {
                e.target.value = e.target.value.replace(/[^0-9]/g, '');
            });
        }

        // Математическая капча
        let a = Math.floor(Math.random() * 9) + 1;
        let b = Math.floor(Math.random() * 9) + 1;
        const correctSum = a + b;
        const capLabel = document.getElementById('captcha-question');
        if (capLabel) capLabel.innerText = `${a} + ${b} = `;

        mainForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const userAns = document.getElementById('captcha-answer');
            
            if (parseInt(userAns.value) !== correctSum) {
                alert('Пожалуйста, решите пример правильно для отправки формы.');
                return;
            }

            const btn = mainForm.querySelector('button');
            btn.disabled = true;
            btn.innerText = 'Отправка...';

            // Имитация AJAX
            setTimeout(() => {
                const success = document.getElementById('form-success');
                if (success) {
                    success.style.display = 'flex';
                    anime({ targets: success, opacity: [0, 1], translateY: [20, 0], duration: 500 });
                }
                initIcons();
            }, 1500);
        });
    }

    // --- 9. COOKIE POPUP ---
    const cookie = document.getElementById('cookie-popup');
    const cookieBtn = document.getElementById('accept-cookies');
    
    if (cookie && !localStorage.getItem('cookies_accepted_v2')) {
        setTimeout(() => cookie.classList.add('visible'), 3000);
    }

    if (cookieBtn) {
        cookieBtn.addEventListener('click', () => {
            localStorage.setItem('cookies_accepted_v2', 'true');
            cookie.classList.remove('visible');
        });
    }

});