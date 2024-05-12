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
                    <a class="header-logo" href="../index.php">
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
                        <a class="header-menu" href="../about/index.php">О нас</a>
                        <a class="header-menu" href="../contacts/index.php">Контакты</a>
                    </nav>
                </div>
                <div class="header-right">
                    <div class="header-icons">
                        <a class="header-icon" href="index.php">
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

    <section class="form">
        <div class="container">
            <div class="form-inner">
                <div class="exit">
                    <a href="../index.php">Главная</a>
                    <i class="fa fa-angle-right" style="color: #000;"></i>
                    <p href="#" style="display: inline; color: #000;">Вход</p>
                </div>

                <?php if (isset($_SESSION['flash'])) echo '<p style="color: #000000">' . $_SESSION['flash'] . '</p>'; unset($_SESSION['flash']); ?>

                <form action="login.php" method="post" class="form-body">
                    <div class="form-fields">
                        <div class="form-title">Вход</div>
                        <div class="form-name">Почта</div>
                        <input name="email" type="text" placeholder="Введите почту">
                        <div class="form-name" style="padding-top: 10px;">Пароль</div>
                        <input name="password" type="password" style="margin-bottom: 18px;" placeholder="Введите пароль">
                    </div>
                    <input type="checkbox" class="form-checkbox"><label class="write" for="">Запомнить меня</label>
                    <a class="form-pass" href="#">Забыли пароль?</a>
                    <div></div>
                    <button class="form-submit" type="submit">Войти</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-blocks">
                    <div class="footer-block">
                        <div class="footer-title">О компании</div>
                        <a href="index.html" class="footer-btn">О нас</a>
                        <a href="../contacts/index.php" class="footer-btn">Контакты</a>
                        <a href="#" class="footer-btn">Наши партнеры</a>
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