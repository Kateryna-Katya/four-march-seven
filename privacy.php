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
            <h1 data-aos="fade-right">Политика конфиденциальности</h1>

            <p data-aos="fade-up">
                Настоящая Политика конфиденциальности распространяется на персональные данные,
                предоставляемые студентами и пользователями <strong><?= $domainTitle ?></strong>, как для оказания
                образовательных услуг и доступа к учебным материалам, так и для других взаимодействий в электронном
                формате, включая участие в интенсивах, вебинарах и акциях, а также при получении
                технической поддержки и информационного сопровождения.
            </p>

            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения Политики конфиденциальности. Эти изменения будут иметь приоритет над текущими
                положениями. Обратите внимание, что наши ресурсы могут содержать ссылки на сторонние сервисы (например, GitHub, Figma или платформы для вебинаров), которые имеют свои
                собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                конфиденциальности любой сторонней компании. Предоставляя свои данные, вы даете полное согласие
                на их обработку способами, предусмотренными настоящей Политикой.
            </p>

            <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения данных</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                пользователя и исключительно для предоставления качественного обучения: доступа к образовательной платформе,
                участия в практических занятиях, получения фидбека от менторов и внедрения инновационных методик в процесс обучения. Для
                предотвращения утечки данных мы используем комплекс мер информационной безопасности, включая современные протоколы шифрования и защищенную цифровую инфраструктуру.
            </p>

            <p data-aos="fade-up">
                Максимальный срок хранения персональных данных может составлять до 75
                лет в соответствии с требованиями к архивированию образовательных документов в Великобритании. В остальных случаях компания хранит данные студента до
                завершения своей деятельности или до момента официального отзыва согласия пользователем.
            </p>

            <p data-aos="fade-up">
                Уничтожение, обезличивание или блокирование данных осуществляется для исключения возможности
                их дальнейшей обработки, если образовательная цель была достигнута или по официальному запросу клиента.
            </p>

            <h2 data-aos="fade-up">Категории собираемых данных:</h2>

            <h3 data-aos="fade-up">Техническая информация:</h3>
            <ul data-aos="fade-up">
                <li>время доступа, IP-адрес и тип устройства;</li>
                <li>источники перехода на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>учебные страницы и модули курсов, посещаемые пользователем;</li>
                <li>взаимодействие с информационными блоками платформы;</li>
                <li>иная техническая информация, автоматически предоставляемая браузером;</li>
                <li>номер телефона (в случае звонка по контактам учебного центра).</li>
            </ul>

            <p data-aos="fade-up">
                При регистрации в личном кабинете или заполнении форм обратной связи мы собираем информацию, 
                необходимую для аутентификации и персонализации процесса обучения:
            </p>
            <ul data-aos="fade-up">
                <li>имя пользователя;</li>
                <li>адрес электронной почты и номер телефона для связи с куратором;</li>
            </ul>

            <h3 data-aos="fade-up">Информация о действиях пользователя:</h3>
            <ul data-aos="fade-up">
                <li>данные о договорах на обучение между студентом и <strong><?= $domainTitle ?></strong>;</li>
                <li>история запросов, отправленных через формы поддержки;</li>
                <li>сведения о пройденных модулях, сданных тестах и полученных сертификатах;</li>
                <li>произведенные оплаты за курсы и иная финансовая информация, предусмотренная законодательством Великобритании и ЕС.</li>
            </ul>

            <h2 data-aos="fade-up">Цели обработки персональных данных:</h2>
            <ul data-aos="fade-up">
                <li>предоставление доступа к образовательной платформе и учебным материалам;</li>
                <li>учет пожеланий студентов при разработке новых курсов и IT-тренажеров;</li>
                <li>информирование о новых программах, скидках для выпускников и карьерных мероприятиях;</li>
                <li>обеспечение экспертной поддержки на всех этапах обучения.</li>
            </ul>

            <h2 data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> не предоставляет данные студентов третьим лицам, за исключением:
            </h2>
            <ul data-aos="fade-up">
                <li>получения прямого согласия пользователя на передачу данных партнерам-работодателям;</li>
                <li>по требованию компетентных органов Великобритании в соответствии с законодательством;</li>
                <li>случаев стратегической реструктуризации или слияния компании.</li>
            </ul>

            <h2 data-aos="fade-up">Использование файлов cookie</h2>
            <p data-aos="fade-up">
                Файлы cookie позволяют нам анализировать прогресс обучения и сохранять ваши предпочтения (например, настройки региона Великобритания), 
                чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально удобным. Вы можете в любое время отключить Cookies в настройках своего браузера, однако это может ограничить доступ к некоторым функциям личного кабинета.
            </p>

            <h2 data-aos="fade-up">Права пользователя (GDPR / UK Data Protection Act)</h2>
            <p data-aos="fade-up">
                Если вы хотите отредактировать свои данные, получить копию хранящейся информации или полностью прекратить их обработку, 
                пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong> по адресу: 
                <a href="mailto:hello@<?= $fullDomain ?>" class="contact-link">hello@<?= $fullDomain ?></a>.
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