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
            <!-- Container -->
            <div class="container">
                <div class="header-inner">
                    <div class="header-left">
                        <a href="index.php">
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
                            <a class="header-menu" href="index.php">Главная</a>
                            <a class="header-menu" href="catalog/index.php">Каталог</a>
                            <a class="header-menu" href="partners/index.php">Наши партнеры</a>
                            <a class="header-menu" href="about/index.php">О нас</a>
                            <a class="header-menu" href="contacts/index.php">Контакты</a>
                        </nav>
                    </div>
                    <div class="header-right">
                        <div class="header-icons">
                            <a class="header-icon" href="signin/index.php">
                                <img class="sign-in" src="img/icons/icons-header/arrow-right-to-bracket-solid.svg" alt="Sign-In" height="36px" width="30px">
                                <p class="sign-in-text">Войти</p>
                            </a>

                            <a class="header-icon" href="signup/index.php">
                                <img class="sign-up" src="img/icons/icons-header/arrow-right-to-bracket-solid.svg" alt="Sign-Up" height="36px" width="30px">
                                <p class="sign-up-text">Регистрация</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Container -->
        </header>

        <section class="intro">
            <div class="container">
                <div class="intro-inner">
                    <div class="intro-categories">
                        <div class="intro-categories-main-btn">
                            <button class="intro-main__button">ВСЕ КАТЕГОРИИ<i class="fa fa-bars" style="color: #e4e4e4;"></i><i id="caret" class="fa fa-caret-up" style="color: #fff;"></i></button>
                        </div>
                        <div class="intro-choice-categories">
                            <a class="intro-choice-categorie" href="catalog/index.php">Футболки<i class="fa fa-caret-right" style="color: #7F7F7F;"></i></a>
                            <a class="intro-choice-categorie" href="#">Куртки<i class="fa fa-caret-right" style="color: #7F7F7F;"></i></a>
                            <a class="intro-choice-categorie" href="#">Шапки<i class="fa fa-caret-right" style="color: #7F7F7F;"></i></a>
                            <a class="intro-choice-categorie" href="#">Штаны<i class="fa fa-caret-right" style="color: #7F7F7F;"></i></a>
                            <a class="intro-choice-categorie" href="#">Обувь<i class="fa fa-caret-right" style="color: #7F7F7F;"></i></a>
                        </div>
                        <a class="intro-game" href="game/index.html">Хотите сыграть в игру?</a>
                    </div>

                    <div class="intro-products">
                        <p class="intro-title">Рекомендуем</p>
                        <div class="intro-cards">
                            <div class="card">
                                <div class="card__top">
                                    <a href="#" class="card__image">
                                        <img src="img/clothes/t-shirt.jpg" alt="Apple IPhone 14 PRO Max Gold"/>
                                    </a>
                                    <div class="card__label">-10%</div>
                                </div>
                                <div class="card__bottom">
                                    <div class="card__prices">
                                        <div class="card__price card__price--discount">900</div>
                                        <div class="card__price card__price--common">1 000</div>
                                    </div>
                                    <a href="#" class="card__title">Футболка черная</a>
                                    <button class="card__add">В корзину</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card__top">
                                    <a href="#" class="card__image">
                                        <img src="img/clothes/t-shirt.jpg" alt="Apple IPhone 14 PRO Max Gold"/>
                                    </a>
                                    <div class="card__label">-10%</div>
                                </div>
                                <div class="card__bottom">
                                    <div class="card__prices">
                                        <div class="card__price card__price--discount">900</div>
                                        <div class="card__price card__price--common">1 000</div>
                                    </div>
                                    <a href="#" class="card__title">Футболка черная</a>
                                    <button class="card__add">В корзину</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card__top">
                                    <a href="#" class="card__image">
                                        <img src="img/clothes/t-shirt.jpg" alt="Apple IPhone 14 PRO Max Gold"/>
                                    </a>
                                    <div class="card__label">-10%</div>
                                </div>
                                <div class="card__bottom">
                                    <div class="card__prices">
                                        <div class="card__price card__price--discount">900</div>
                                        <div class="card__price card__price--common">1 000</div>
                                    </div>
                                    <a href="#" class="card__title">Футболка черная</a>
                                    <button class="card__add">В корзину</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mailing">
            <div class="container">
                <div class="mailing-inner">
                    <div class="mailing-title">
                        Подпишитесь на нашу рассылку и <br> получите 10% скидку на первый заказ!
                    </div>

                    <div class="mailing-input">
                        <input class="mailing-text" placeholder="Ваш E-Mail" type="text">
                        <a class="mailing-send" href="#">Отправить</a>
                    </div>

                </div>
            </div>
        </section>
        <section class="reviews">
            <div class="container">
                <div class="reviews-inner">
                    <p class="reviews-title">Отзывы наших покупателей</p>
                    <div class="reviews-users">
                        <div class="reviews-user">
                            <img class="reviews-icon" src="img/icons/icons-reviews/user-tie-solid.svg" alt="User" height="64px">
                            <p class="reviews-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.
                            </p>
                        </div>

                        <div class="reviews-user">
                            <img class="reviews-icon" src="img/icons/icons-reviews/user-tie-solid.svg" alt="User" height="64px">
                            <p class="reviews-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.
                            </p>
                        </div>

                        <div class="reviews-user">
                            <img class="reviews-icon" src="img/icons/icons-reviews/user-tie-solid.svg" alt="User" height="64px">
                            <p class="reviews-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="insta">
            <div class="container">
                <div class="insta-top">
                    <a target="_blank" href="https://www.instagram.com/" class="insta-title">Присоединяйтесь к нам в Instagram</a>
                    <a target="_blank" class="insta-title" href="https://www.instagram.com/">@BrandLook_Outdoors</a>
                </div>
                <div class="insta-cards">
                    <a target="_blank" href="https://www.instagram.com/"><img src="img/insta/1.webp" alt="1"></a>
                    <a target="_blank" href="https://www.instagram.com/"><img src="img/insta/2.webp" height="500px" alt="1"></a>
                    <a target="_blank" href="https://www.instagram.com/"><img src="img/insta/3.webp" alt="1"></a>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="footer-inner">
                    <div class="footer-blocks">
                        <div class="footer-block">
                            <div class="footer-title">О компании</div>
                            <a href="about/index.php" class="footer-btn">О нас</a>
                            <a href="catalog/index.php" class="footer-btn">Контакты</a>
                            <a href="partners/index.php" class="footer-btn">Наши партнеры</a>
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
                                <a target="_blank" href="https://vk.com/genagorin123" class="footer-icon"><i class="fa fa-vk" style="color: #D7D7D7; font-size: 24px;"></i></a>
                                <a target="_blank" href="https://www.youtube.com/" class="footer-icon"><i class="fa fa-youtube" style="color: #D7D7D7; font-size: 24px;"></i></a>
                                <a target="_blank" href="https://vk.com/genagorin123" class="footer-icon"><i class="fa fa-twitter" style="color: #D7D7D7; font-size: 24px;"></i></a>
                                <a target="_blank" href="https://desktop.telegram.org/" class="footer-icon"><i class="fa fa-telegram" style="color: #D7D7D7; font-size: 24px;"></i></a>
                            </div>
                            <div class="footer-text">Скачивайте наши приложение</div>
                            <a href="index.php"><img src="img/footer/1.png" height="35" alt=""></a>
                            <a href="index.php"><img src="img/footer/2.png" height="35" alt=""></a>
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
