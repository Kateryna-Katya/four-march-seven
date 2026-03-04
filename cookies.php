<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — IT-школа нового поколения
    </title>

<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect x='4' y='12' width='12' height='12' rx='2' transform='rotate(-15 4 12)' fill='%236366F1'/%3E%3Crect x='16' y='6' width='12' height='12' rx='2' transform='rotate(15 16 6)' fill='%23818CF8' fill-opacity='0.6'/%3E%3Cpath d='M12 20L20 12' stroke='white' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Manrope:wght@500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#courses" class="nav__link">Курсы</a></li>
                    <li><a href="./#features" class="nav__link">Преимущества</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--outline">Связаться</a>
                <button class="burger" id="burger" aria-label="Menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-right">Политика использования файлов cookie</h1>

            <p data-aos="fade-up">
                Добро пожаловать в IT-школу <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                взаимодействия с нашей платформой, обеспечить бесперебойную работу личного кабинета и
                анализировать активность пользователей для улучшения программ обучения, мы используем 
                файлы cookie и схожие технологии.
            </p>

            <h2 data-aos="fade-up">Что такое файлы cookie?</h2>
            <p data-aos="fade-up">
                Файл cookie — это небольшой фрагмент данных, который наш сайт сохраняет на вашем устройстве, 
                когда вы его посещаете. Это позволяет платформе <strong><?= $domainTitle ?></strong> "помнить" 
                ваши действия и предпочтения (например, данные авторизации, выбранный язык обучения, 
                настройки региона Великобритания и другие параметры) в течение определенного времени.
            </p>

            <h2 data-aos="fade-up">Какие типы файлов cookie мы используем?</h2>
            <p data-aos="fade-up">
                Мы классифицируем файлы cookie на сайте <strong><?= $fullDomain ?></strong> по следующим категориям:
            </p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Строго необходимые:</strong> Критически важны для функционирования образовательной платформы. 
                    Они позволяют вам безопасно перемещаться по сайту и использовать доступ к учебным материалам.
                </li>
                <li>
                    <strong>Аналитические и производительные:</strong> Собирают анонимную информацию о том, 
                    как студенты используют сайт, помогая нам оптимизировать структуру уроков и контент курсов.
                </li>
                <li>
                    <strong>Функциональные:</strong> Позволяют запоминать ваш прогресс в обучении для 
                    предоставления более персонализированного опыта в рамках наших программ.
                </li>
                <li>
                    <strong>Рекламные (маркетинговые):</strong> Используются для показа предложений о новых курсах 
                    и интенсивах, соответствующих вашим интересам в сфере IT.
                </li>
            </ul>

            <h2 data-aos="fade-up">Зачем мы используем файлы cookie?</h2>
            <p data-aos="fade-up">Основные цели использования файлов cookie в <strong><?= $domainTitle ?></strong>:</p>
            <ul data-aos="fade-up">
                <li>Обеспечение стабильного доступа к учебным материалам.</li>
                <li>Анализ поведения студентов для улучшения методологии обучения.</li>
                <li>Персонализация интерфейса для удобства пользователей в Европе и Великобритании.</li>
                <li>Предоставление актуальной информации о стажировках и карьерных возможностях.</li>
            </ul>

            <h2 data-aos="fade-up">Ваш выбор и управление файлами cookie</h2>
            <p data-aos="fade-up">
                Вы имеете полный контроль над файлами cookie. Вы можете в любой момент изменить настройки в браузере. 
                Обратите внимание: отключение строго необходимых cookie может ограничить ваш доступ к 
                функционалу личного кабинета и видеоурокам.
            </p>

            <h2 data-aos="fade-up">Файлы cookie третьих сторон</h2>
            <p data-aos="fade-up">
                На страницах <strong><?= $domainTitle ?></strong> мы можем использовать сервисы сторонних компаний, 
                такие как Google Analytics для аналитики, Lottie.js или Three.js для интерактивных 3D-визуализаций в курсах. 
                Мы рекомендуем ознакомиться с их политиками конфиденциальности.
            </p>

            <h2 data-aos="fade-up">Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы касательно политики использования cookie в <strong><?= $domainTitle ?></strong>, 
                пожалуйста, свяжитесь с нашей службой поддержки:
                <br><br>
                Email: <a href="mailto:hello@<?= $fullDomain ?>" class="contact-link">hello@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+442034372608" class="contact-link">+44 20 3437 2608</a><br>
                Адрес: 22 Bishopsgate, London, EC2N 4BQ, United Kingdom
            </p>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__icon"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">
                    Инновационная технология обучения, которая меняет правила игры в IT-образовании. Постройте карьеру,
                    которая работает на вас.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#courses">Курсы</a></li>
                    <li><a href="./#features">Преимущества</a></li>
                    <li><a href="./#faq">FAQ</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i data-lucide="phone" class="icon-sm"></i>
                        <a href="tel:+442034372608">+44 20 3437 2608</a>
                    </li>
                    <li>
                        <i data-lucide="mail" class="icon-sm"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i data-lucide="map-pin" class="icon-sm"></i>
                        <span>22 Bishopsgate, London, <br>EC2N 4BQ, United Kingdom</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026
                <?= $domainTitle ?>. Все права защищены. Платформа уже доступна в Европе.
            </p>
        </div>
    </footer>
<div class="mobile-menu" id="mobile-menu">
    <div class="mobile-menu__content">
        <ul class="mobile-menu__list">
            <li><a href="./#hero" class="mobile-menu__link">Главная</a></li>
            <li><a href="./#courses" class="mobile-menu__link">Курсы</a></li>
            <li><a href="./#features" class="mobile-menu__link">Преимущества</a></li>
            <li><a href="./#reviews" class="mobile-menu__link">Отзывы</a></li>
            <li><a href="./#faq" class="mobile-menu__link">FAQ</a></li>
            <li><a href="./#contact" class="mobile-menu__link btn btn--primary">Начать сейчас</a></li>
        </ul>
        <div class="mobile-menu__footer">
            <p>+44 20 3437 2608</p>
            <p>hello@
                <?= $fullDomain ?>
            </p>
        </div>
    </div>
</div>
<div class="cookie-popup" id="cookie-popup">
    <div class="cookie-popup__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button class="btn btn--primary btn--sm" id="accept-cookies">Принять</button>
    </div>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
</body>

</html>