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
                    <a href="../index.html">
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
                        <a class="header-menu" href="index.php">Каталог</a>
                        <a class="header-menu" href="../partners/index.php">Наши партнеры</a>
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
        <!-- End Container -->     
    </header>

    <section class="intro">
        <div class="container">
            <div class="intro-inner">
                <div class="intro-categories">
                    <div class="intro-choice-categories">
                        <a href="index.html">Футболки<i class="fa fa-caret-right" style="color: #7F7F7F;"></i></a>
                        <a href="#">Куртки<i class="fa fa-caret-right" style="color: #7F7F7F;"></i></a>
                        <a href="#">Шапки<i class="fa fa-caret-right" style="color: #7F7F7F;"></i></a>
                        <a href="#">Штаны<i class="fa fa-caret-right" style="color: #7F7F7F;"></i></a>
                        <a href="#">Обувь<i class="fa fa-caret-right" style="color: #7F7F7F;"></i></a>

                        <div class="specifications">
                            <div class="sex">
                                <div class="name">Пол</div>
                                <input type="checkbox"><label for="">Мужской(450)</label>
                                <div></div>
                                <input type="checkbox"><label for="">Женский(350)</label>
                            </div>
                            <div class="sex">
                                <div class="name">Вид товара</div>
                                <input type="checkbox"><label for="">Кроссовки(70)</label>
                                <div></div>
                                <input type="checkbox"><label for="">Ботинки(50)</label>
                                <div></div>
                                <input type="checkbox"><label for="">Валенки(30)</label>
                            </div>
                            <div class="sex">
                                <div class="name">Бренд</div>
                                <input type="checkbox"><label for="">Demix(175)</label>
                                <div></div>
                                <input type="checkbox"><label for="">Adidas(250)</label>
                                <div></div>
                                <input type="checkbox"><label for="">Nike(350)</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="intro-products">
                    <p class="intro-title">Категория: Футболки</p>
                    <div class="intro-cards">
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


    <section class="info">
        <div class="container">
            <div class="info-text">
                В интернет-магазине BrandLook вы найдете большой выбор зимней и демисезонной верхней одежды для мужчин. Теплые и комфортные мужские куртки отлично подойдут для прогулок, дальних походов и активного отдыха.
                <br><br>
                Большинство моделей оснащено светоотражающими элементами, что делает вас заметными даже в условиях плохой видимости. Все куртки имеют воротник-стойку, который защищает шею от ветра и холода. В разделе представлены:
                <br><br>
                - утепленные куртки для мужчин – подходят для походов и активного отдыха в холодный сезон. Большинство моделей обработаны водоотталкивающей пропиткой;
                <br>
                - мужские ветровки – легкие и практичные ветровки надежно защищают от ветра. Также многие производители пропитывают ткань своих изделий специальным составом, благодаря которому она не промокает;
                <br>
                <span class="last-text">-мужские пуховые куртки – натуральный пух обеспечивает максимальную защиту от холода. Такие модели имеют небольшой вес.</span>
                <br><br>
                <span class="hidden-text" style="display: none;">Интернет-магазин BrandLook предоставляет гарантию на товары, а это значит, что вы можете быть уверены в качестве приобретаемой продукции. Сезонные скидки и бонусная программа позволяют покупать одежду по самым выгодным ценам. Доставка заказа осуществляется по всей России.</span>
            </div>
            <button class="info-btn">Читать всё</button>
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
    <script src="script.js"></script>
</body>
</html>
<?php else: ?>
    <?php header("Location: closed_pages/main_page/index.php"); die(); ?>
<?php endif; ?>