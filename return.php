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
            <h1 data-aos="fade-right">Политика возврата средств</h1>
            
            <p data-aos="fade-up">
                В IT-школе <strong><?= $domainTitle ?></strong> мы стремимся к тому, чтобы каждый студент получил максимум пользы. 
                Однако мы понимаем, что обстоятельства могут измениться. Настоящая политика определяет условия 
                аннулирования подписки и возврата платежей.
            </p>

            <h2 data-aos="fade-up">Условия для оформления возврата</h2>
            <p data-aos="fade-up">
                Вы можете претендовать на полный или частичный возврат средств в следующих ситуациях:
            </p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Несоответствие программы описанию:</strong> Если содержание предоставленного 
                    учебного курса существенно отличается от учебного плана, заявленного на сайте 
                    <strong><?= $domainTitle ?></strong> на момент покупки.
                </li>
                <li>
                    <strong>Технические неисправности:</strong> При возникновении критических проблем на 
                    образовательной платформе <strong><?= $fullDomain ?></strong>, которые делают доступ к 
                    урокам невозможным и не были устранены нашей поддержкой в течение 48 часов.
                </li>
                <li>
                    <strong>«Период охлаждения» (Cooling-off period):</strong> Согласно законам Великобритании, 
                    вы имеете право отказаться от обучения в течение 14 календарных дней с момента оплаты, 
                    если вы еще не начали просмотр уроков или скачивание материалов.
                </li>
            </ul>

            <h2 data-aos="fade-up">Процедура запроса на возврат</h2>
            <p data-aos="fade-up">
                Чтобы инициировать процедуру возврата в <strong><?= $domainTitle ?></strong>, пожалуйста, выполните следующие шаги:
            </p>
            <ol class="custom-list" data-aos="fade-up">
                <li>
                    Отправьте письмо на наш email: <a href="mailto:hello@<?= $fullDomain ?>" class="contact-link">hello@<?= $fullDomain ?></a>.
                </li>
                <li>В теме письма укажите: «Refund Request — [Ваше Имя]».</li>
                <li>
                    Укажите данные: Email, использованный при регистрации, дату транзакции и название курса.
                </li>
                <li>Кратко опишите причину запроса (это помогает нам улучшать наши программы).</li>
                <li>
                    Наша финансовая служба рассмотрит запрос и свяжется с вами в течение 3-х рабочих дней.
                </li>
            </ol>

            <h2 data-aos="fade-up">Сроки и способ возврата</h2>
            <p data-aos="fade-up">
                После одобрения запроса возврат денежных средств производится в течение 7–14 рабочих дней. 
                Средства возвращаются на ту же карту или счет, с которых была произведена оплата. 
                Фактическое зачисление зависит от регламента вашего банка в <strong>Великобритании</strong> или стране вашего пребывания.
            </p>

            <h2 data-aos="fade-up">Исключения и ограничения</h2>
            <p data-aos="fade-up">Возврат средств не осуществляется, если:</p>
            <ul data-aos="fade-up">
                <li>Запрос подан по истечении 14 календарных дней с момента покупки.</li>
                <li>
                    Студент просмотрел более 20% видеоматериалов или скачал более 2-х практических заданий. 
                    В этом случае услуга считается частично или полностью оказанной.
                </li>
                <li>
                    Причиной являются технические проблемы на стороне пользователя (отсутствие интернета, 
                    устаревшее ПО, несовместимое с современными веб-стандартами).
                </li>
                <li>Были нарушены правила поведения в учебном сообществе <strong><?= $domainTitle ?></strong>.</li>
            </ul>

            <h2 data-aos="fade-up">Контактная информация</h2>
            <p data-aos="fade-up">
                По вопросам возврата и условий доступа к платформе обращайтесь в отдел заботы о студентах:
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