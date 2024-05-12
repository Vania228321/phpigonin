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
                        <a class="header-menu" href="../index.php">Главная</a>
                        <a class="header-menu" href="../catalog/index.php">Каталог</a>
                        <a class="header-menu" href="../partners/index.php">Наши партнеры</a>
                        <a class="header-menu" href="index.php">О нас</a>
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

    <section class="info">
        <div class="container">
            <div class="info-inner">
                <div class="exit">
                    <a href="../index.html">Главная</a>
                    <i class="fa fa-angle-right" style="color: #000;"></i>
                    <p href="#" style="display: inline; color: #000;">О нас</p>
                </div>

                <div class="horizontal-line"></div>

                <div class="info-up">
                    <img height="720" src="img/1.jpg" alt="">
                    <p>BrandLook— это доступ в мир одежды с рекордным ассортиментом! Это настоящий бренд-эксперт в одежде, который вдохновляет своих покупателей, мотивирует их и помогает быть красивыми и стильными, чтобы радоваться жизни и менять себя к лучшему день за днем!</p>
                </div>

                <div class="horizontal-line"></div>

                <div class="info-down">
                    <div class="info-left">
                        <h2>С чего всё началось?</h2>
                        <p>Первый магазин сети открылся в 2014 году. С тех пор нашей главной и неустанной заботой является удовлетворенность потребителей качеством, разнообразием и доступностью наших товаров и сервисов.</p>
                    </div>
                    <div class="info-right">
                        <img height="720" src="img/2.jpg" alt="">
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
                        <a href="index.php" class="footer-btn">О нас</a>
                        <a href="../contacts/index.php" class="footer-btn">Контакты</a>
                        <a href="../partners/index.php" class="footer-btn">Наши партнеры</a>
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
    <?php header("Location: closed_pages/main_page/index.php"); die(); ?>
<?php endif; ?>