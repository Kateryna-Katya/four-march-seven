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
            <h1 data-aos="fade-right">Политика в отношении обработки персональных данных</h1>

            <div class="policy-meta" data-aos="fade-in">
                <p><strong>Версия:</strong> 1.0.2</p>
                <p><strong>Дата вступления в силу:</strong> Март 2026</p>
            </div>

            <h2 data-aos="fade-up">1. Общие положения</h2>
            <p data-aos="fade-up">
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые IT-платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                устанавливает меры по обеспечению безопасности этих данных в соответствии с регламентом GDPR.
            </p>
            <p data-aos="fade-up">
                1.1. Важнейшей целью и условием осуществления своей деятельности
                Оператор считает соблюдение прав и свобод человека и гражданина при
                обработке его персональных данных, включая защиту прав на
                неприкосновенность частной жизни и профессиональную тайну.
            </p>
            <p data-aos="fade-up">
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2 data-aos="fade-up">2. Основные понятия</h2>
            <ul data-aos="fade-up">
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических и
                    информационных материалов, а также программных решений,
                    обеспечивающих доступ к обучению по адресу
                    <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель или студент платформы.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация,
                    относящаяся прямо или косвенно к Пользователю (имя, контакты, прогресс обучения).
                </li>
                <li>
                    <strong>Обработка персональных данных</strong> — любое действие, совершаемое с данными (сбор, запись, хранение, удаление).
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Данные, которые мы обрабатываем</h2>
            <p data-aos="fade-up">Оператор может обрабатывать следующие категории данных:</p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Данные, предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Имя и фамилия;</li>
                        <li>Адрес электронной почты (Email);</li>
                        <li>Номера телефонов (валидация по стандартам Великобритании: +44);</li>
                    </ul>
                </li>
                <li>
                    <strong>Технические данные:</strong>
                    <ul>
                        <li>
                            Сбор обезличенных данных о посетителях через файлы «cookie» (Google Аналитика). 
                            Эти данные включают IP-адрес, тип браузера и часовой пояс.
                        </li>
                    </ul>
                </li>
            </ul>

            <h2 data-aos="fade-up">4. Цели обработки</h2>
            <ul data-aos="fade-up">
                <li>
                    Идентификация Пользователя для предоставления доступа к учебным материалам 
                    <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Организация обратной связи, включая направление уведомлений о новых курсах и 
                    экспертную поддержку на всех этапах обучения.
                </li>
                <li>
                    Заключение и исполнение договоров на образовательные и тренинговые услуги в Великобритании и ЕС.
                </li>
                <li>
                    Информирование посредством Email-рассылок. Пользователь всегда может отозвать согласие, 
                    написав на <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2 data-aos="fade-up">5. Правовые основания</h2>
            <p data-aos="fade-up">
                Оператор обрабатывает данные только при наличии:
            </p>
            <ul data-aos="fade-up">
                <li>Добровольного согласия, выраженного через формы на сайте <strong><?= $domainTitle ?></strong>.</li>
                <li>Разрешения на использование файлов «cookie» в настройках вашего браузера.</li>
            </ul>

            <h2 data-aos="fade-up">6. Безопасность и хранение</h2>
            <ul data-aos="fade-up">
                <li>
                    Оператор применяет современные методологии защиты данных (шифрование SSL) для 
                    предотвращения неправомерного доступа.
                </li>
                <li>
                    Персональные данные Пользователя никогда не передаются третьим лицам без 
                    явного согласия, за исключением требований законодательства Великобритании.
                </li>
                <li>
                    Срок обработки данных неограничен, пока Пользователь не отзовет согласие через 
                    письмо на <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2 data-aos="fade-up">7. Заключительные положения</h2>
            <p data-aos="fade-up">
                Вы можете получить любые разъяснения, обратившись в службу поддержки <strong><?= $domainTitle ?></strong>. 
                Актуальная версия политики всегда доступна на этой странице.
                <br><br>
                <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
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