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
            <h1 data-aos="fade-right">Условия использования</h1>

            <p data-aos="fade-up">
                Добро пожаловать в IT-школу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия» или «Соглашение») представляют собой юридически
                обязывающий договор между вами (далее — «Пользователь» или «Студент») и 
                <strong><?= $domainTitle ?></strong> (далее — «Школа», «Платформа»). 
                Используя наш сайт, учебные модули и любые связанные с ними услуги, вы 
                подтверждаете свое полное и безоговорочное согласие с данными Условиями. 
                Если вы не согласны, вы должны немедленно прекратить использование сайта.
            </p>

            <h2 data-aos="fade-up">1. Предмет Соглашения</h2>
            <p data-aos="fade-up">
                Школа предоставляет Пользователю доступ к образовательной платформе
                <strong><?= $fullDomain ?></strong> и её функционалу, включая: доступ к
                видеоурокам, инновационным технологиям обучения, статьям в блоге, экспертной поддержке 
                и AI-инструментам для реальных задач (далее — «Услуги»). Настоящее Соглашение 
                регулирует все аспекты взаимодействия Студента с платформой.
            </p>

            <h2 data-aos="fade-up">2. Обязанности и права Пользователя</h2>
            <p data-aos="fade-up">
                Вы обязуетесь использовать сайт исключительно в законных целях для личного 
                профессионального развития. При использовании платформы <strong><?= $domainTitle ?></strong>
                <strong>запрещается</strong>:
            </p>
            <ul data-aos="fade-up">
                <li>
                    Публиковать или передавать материалы, которые нарушают авторские права Школы 
                    или третьих лиц, а также контент, разжигающий ненависть.
                </li>
                <li>
                    Предпринимать действия, направленные на нарушение нормальной работы 
                    цифровой инфраструктуры <strong><?= $domainTitle ?></strong> (DDoS-атаки, взлом, парсинг).
                </li>
                <li>
                    Передавать учетные данные для доступа к курсам третьим лицам. Доступ является персональным.
                </li>
                <li>
                    Использовать автоматизированные скрипты для скачивания учебного контента без 
                    письменного разрешения администрации.
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Интеллектуальная собственность</h2>
            <p data-aos="fade-up">
                Весь контент на сайте <strong><?= $fullDomain ?></strong>, включая видеолекции, программный код, 
                тексты заданий, графику и логотипы (далее — «Контент»), является объектом интеллектуальной
                собственности Школы. Вам предоставляется ограниченная неисключительная лицензия на использование 
                Контента в личных целях для построения карьеры, которая работает на вас. 
                Любое копирование, перепродажа или публичное воспроизведение Контента без 
                согласия правообладателя запрещены законом Великобритании об авторском праве.
            </p>

            <h2 data-aos="fade-up">4. Ограничение ответственности</h2>
            <p data-aos="fade-up">
                Услуги предоставляются по принципу «как есть» (as is). Мы не даем гарантий, что 
                информация на сайте является исчерпывающей в условиях динамично меняющегося IT-рынка 
                в Великобритании и странах ЕС. Платформа <strong><?= $domainTitle ?></strong> 
                не несет ответственности за прямые или косвенные убытки, возникшие из-за технических сбоев 
                на стороне провайдеров связи Пользователя или неправильного применения полученных навыков.
            </p>

            <h2 data-aos="fade-up">5. Изменения в Условиях</h2>
            <p data-aos="fade-up">
                Мы оставляем за собой право обновлять настоящие Условия. Все изменения вступают в силу 
                с момента их публикации на <strong><?= $fullDomain ?></strong>. Ваше дальнейшее 
                использование платформы после внесения правок означает автоматическое согласие с новой редакцией.
            </p>

            <h2 data-aos="fade-up">6. Разрешение споров</h2>
            <p data-aos="fade-up">
                Все споры стороны стремятся разрешить путем переговоров. В случае недостижения согласия, 
                спор подлежит рассмотрению в судах в соответствии с действующим законодательством по 
                месту регистрации Оператора в <strong>Лондоне, Великобритания</strong>.
            </p>

            <h2 data-aos="fade-up">7. Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы, связанные с настоящими Условиями, пожалуйста, свяжитесь с нами:
                <br><br>
                <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="contact-link">hello@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+442034372608" class="contact-link">+44 20 3437 2608</a><br>
                <strong>Адрес:</strong> 22 Bishopsgate, London, EC2N 4BQ, United Kingdom
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