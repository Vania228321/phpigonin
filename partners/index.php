<?php error_reporting(-1); session_start(); ?>
<?php if (!isset($_SESSION['auth'])): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
    <title>BrandLook</title>
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="header-inner">
                <div class="header-left">
                    <a class="header-logo" href="../index.html">
                        <img src="img/logo.jpg" alt="Logo" height="119" width="159">
                    </a>
                </div>
                <div class="header-middle">
                    <div class="header-contact">
                        <a class="header-phone" href="tel: +79278271667">+7(927) 827-16-67</a>
                        <a target="_blank" href="https://yandex.ru/maps/-/CDuYNE7E" class="header-address">г. Ульяновск ул. Минаева 32</a>
                    </div>

                    <div class="header-search">
                        <input class="header-input" placeholder="Что ищем?" type="text">
                        <a href="#" class="header-button">Найти</a>
                    </div>
                    
                    
                    <nav class="header-nav">
                        <a class="header-menu" href="../index.html">Главная</a>
                        <a class="header-menu" href="../catalog/index.php">Каталог</a>
                        <a class="header-menu" href="index.php">Наши партнеры</a>
                        <a class="header-menu" href="../about/index.php">О нас</a>
                        <a class="header-menu" href="../contacts/index.php">Контакты</a>
                    </nav>
                </div>
                <div class="header-right">
                    <div class="header-icons">
                        <a class="header-icon" href="../signin/index.php">
                            <img class="sign-in" src="img/icons/icons-header/arrow-right-to-bracket-solid.svg" alt="Sign-In" height="36px" width="30px">
                            <p>Войти</p>
                        </a>
    
                        <a class="header-icon" href="../signup/index.php">
                            <img class="sign-up" src="img/icons/icons-header/arrow-right-to-bracket-solid.svg" alt="Sign-Up" height="36px" width="30px">
                            <p>Регистрация</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>     
    </header>

    <section class="partners">
        <div class="container">
            <div class="partners-inner">
                <div class="exit">
                    <a href="../index.php">Главная</a>
                    <i class="fa fa-angle-right" style="color: #000;"></i>
                    <p href="#" style="display: inline; color: #000;">Наши партнеры</p>
                </div>

                <div class="partners-body">
                    <div class="partners-block block1">
                        <div class="partners-title">Наши партнеры</div>
                        <div class="partners-info">
                            Мы создаем и развиваем наши проекты, чтобы вы всегда могли найти то, что нужно. Еще больше стильных новинок и технологичных моделей на официальных сайтах ваших любимых брендов.
                        </div>
                    </div>

                    <div class="partners-block block2">
                        <div class="partners-left">
                            <div class="partners-brand">DEMIX</div>
                            <div class="partners-text">
                                Наша первая коллекция увидела свет в 2008 году. С тех пор мы стремимся к тому, чтобы вы испытывали радость от занятий спортом. Мы производим инновационную и технологичную, но при этом доступную продукцию, которая сделает вашу тренировку комфортнее, и неважно, где она проходит.
                            </div>
                            <a class="partners-btn" target="_blank" href="https://www.demix.ru/?utm_source=yandex&utm_medium=cpc&utm_campaign=RF_-_Poisk_-_Brendovaya_-_Demix&utm_content=11115328521&utm_term=ST%3Asearch%7CS%3Anone%7CAP%3Ano%7CPT%3Apremium%7CP%3A1%7CDT%3Adesktop%7CRI%3A195%7CCI%3A40681605%7CGI%3A3685268765%7CPI%3A15718224483%7CAI%3A11115328521%7CRT%3A15718224483%7CKW%3Ademix%7CRN%3AУльяновск&yclid=17689967553247182847">Перейти на сайт</a>
                        </div>
                        <div class="partners-right">
                            <img height="503" src="img/1.jpg" alt="">
                        </div>
                    </div>

                    <div class="partners-block block2">
                        <div class="partners-left">
                            <img height="503" src="img/2.jpg" alt="">
                        </div>
                        <div class="partners-right">
                            <div class="partners-brand">COLUMBIA</div>
                            <div class="partners-text">
                                Уже больше 80 лет компания Columbia занимается производством одежды для людей, любящих активно проводить время на природе.
                                <br>
                                Columbia продолжает создавать одежду, обувь и аксессуары, чтобы вы чувствовали себя комфортно в любую погоду, несмотря ни на что. Инновационной подход, мятежный дух и сплоченный семейный бизнес — вот главные отличия от конкурентов.
                            </div>
                            <a class="partners-btn" target="_blank" href="https://columbia.ru/?utm_referrer=https%3A%2F%2Fyandex.ru%2F">Перейти на сайт</a>
                        </div>
                    </div>

                    <div class="partners-block block2">
                        <div class="partners-left">
                            <div class="partners-brand">NORTHLAND</div>
                            <div class="partners-text">
                                Northland — бренд треккинговой одежды и оборудования родом из Альп, основанный Гервальдом Пихлером в 1973 году в городе Гратц (Австрия) и прославившийся качественной и технологичной экипировкой для горных походов разного уровня сложности.
                            </div>
                            <a class="partners-btn" target="_blank" href="https://northland-festland.ru/">Перейти на сайт</a>
                        </div>
                        <div class="partners-right">
                            <img height="503" src="img/3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-blocks">
                    <div class="footer-block">
                        <div class="footer-title">О компании</div>
                        <a href="../about/index.php" class="footer-btn">О нас</a>
                        <a href="../contacts/index.php" class="footer-btn">Контакты</a>
                        <a href="index.html" class="footer-btn">Наши партнеры</a>
                    </div>
    
                    <div class="footer-block">
                        <div class="footer-title">Партнерам</div>
                        <a href="#" class="footer-btn">Стать партнером</a>
                        <a href="#" class="footer-btn">Бренд под ключ</a>
                        <a href="#" class="footer-btn">Открыть пункт выдачи</a>
                        <a href="#" class="footer-btn">Логистика</a>
                    </div>
    
                    <div class="footer-block">
                        <div class="footer-title">Покупателям</div>
                        <a href="#" class="footer-btn">Связаться с нами</a>
                        <a href="#" class="footer-btn">Как сделать заказ?</a>
                        <a href="#" class="footer-btn">Как оплатить?</a>
                        <a href="#" class="footer-btn">Доставка</a>
                    </div>
    
                    <div class="footer-block vertical-line"></div>
    
                    <div class="footer-block">
                        <div class="footer-title">Контакты</div>
                        <div class="footer-icons">
                            <a href="https://vk.com/genagorin123" class="footer-icon"><i class="fa fa-vk" style="color: #D7D7D7; font-size: 24px;"></i></a>
                            <a href="https://vk.com/genagorin123" class="footer-icon"><i class="fa fa-youtube" style="color: #D7D7D7; font-size: 24px;"></i></a>
                            <a href="https://vk.com/genagorin123" class="footer-icon"><i class="fa fa-twitter" style="color: #D7D7D7; font-size: 24px;"></i></a>
                            <a href="https://vk.com/genagorin123" class="footer-icon"><i class="fa fa-telegram" style="color: #D7D7D7; font-size: 24px;"></i></a>
                        </div>
                        <div class="footer-text">Скачивайте наши приложение</div>
                        <a href="#"><img src="img/footer/1.png" height="35" alt=""></a>
                        <a href="#"><img src="img/footer/2.png" height="35" alt=""></a>
                    </div>
                </div>
                <div class="footer-copy">
                    <i class="fa fa-copyright"></i>
                    <p>2014 - 2023  BrandLook</p>
                </div>
            </div>
            
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/8804b62e93.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>
<?php else: ?>
    <?php $path = dirname(__FILE__);
    header("Location: $path");
    die(); ?>
<?php endif; ?>