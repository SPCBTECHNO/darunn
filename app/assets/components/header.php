<?
    require 'data.php';
    setcookie("cookie_name", "cookie_value", time()+604800);
?>
<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-5HWWQJP');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$arSettings["SITE_DESCRIPTION"];?>">
    <meta name="keywords" content="подарочные наборы, корпоративные подарки, крафтовые напитки, халлуми, сыр для жарки, натуральные продукты"> 
    <meta property="og:site_name" content="<?=$_SERVER["SERVER_NAME"];?>">
    <meta property="og:title" content="<?=$arSettings["SITE_TITLE"];?>">
    <meta property="og:description" content="<?=$arSettings["SITE_DESCRIPTION"];?>">
    <meta property="og:url" content="https://<?=$_SERVER["SERVER_NAME"];?>/">
    <meta property="og:images" content="assets/img/icons/logo.svg">
    <meta property="og:locale" content="ru_RU">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <title><?=$arSettings["SITE_TITLE"];?></title>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HWWQJP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <header id="header" class="header"> 
            <div class="header__container container">
                <a href="/" class="header__logo">
                    <img src="assets/img/icons/logo.svg" alt="Darunn" class="header__logo_img">
                </a>
                <div class="header__address">
                    <a href="<?=$arContacts["ADDRESS_URL"];?>" class="img" title="<?=$arContacts["ADDRESS"];?>"><img src="assets/img/icons/map-mark.svg" alt="Адрес: <?=$arContacts["ADDRESS"];?>"></a>
                    <a href="<?=$arContacts["ADDRESS_URL"];?>" title="<?=$arContacts["ADDRESS"];?>"><?=$arContacts["ADDRESS"];?></a>
                </div>
                <div class="header__mail">
                    <a href="mailto:<?=$arContacts["EMAIL"];?>" class="img" title="<?=$arContacts["EMAIL"];?>"><img src="assets/img/icons/mail_icon.svg" alt="Электрочнная почта: <?=$arContacts["EMAIL"];?>"></a>
                    <a href="mailto:<?=$arContacts["EMAIL"];?>" title="<?=$arContacts["EMAIL"];?>"><?=$arContacts["EMAIL"];?></a>
                </div>
                <div class="header__phone">
                    <a href="tel:<?=str_replace(" ", "",$arContacts["PHONE"]);?>" class="img" title="<?=$arContacts["PHONE"];?>"><img src="assets/img/icons/phone_icon.svg" alt="Телефон: <?=$arContacts["PHONE"];?>"></a>
                    <a href="tel:<?=str_replace(" ", "",$arContacts["PHONE"]);?>" title="<?=$arContacts["PHONE"];?>"><?=$arContacts["PHONE"];?></a>
                </div>
                <div class="header__inst">
                    <a href="<?=$arContacts["INSTAGRAM"];?>" class="img" title="<?=$arContacts["INSTAGRAM"];?>"><img src="assets/img/icons/inst.svg" alt="Instagram: <?=$arContacts["INSTAGRAM"];?>"></a>
                    <a href="<?=$arContacts["INSTAGRAM"];?>" title="<?=$arContacts["INSTAGRAM"];?>">instagram</a>
                </div>
            </div>
            <?if ($_SERVER["NAME"].$_SERVER["REQUEST_URI"] === "/"):?>
                <div class="header__menu">
                    <nav class="header__menu_nav">
                        <a href="#first-screen" class="header__menu_link">Главная</a>
                        <a href="#shares" class="header__menu_link">Акции</a>
                        <a href="#product-caption" class="header__menu_link">Продукты</a>
                        <a href="#catalog" class="header__menu_link">Подарочные наборы</a>
                        <a href="#branding" class="header__menu_link">Брендирование</a>
                        <a href="#advantages" class="header__menu_link">Преимущества</a>
                        <a href="#delivery" class="header__menu_link">Доставка и оплата</a>
                        <a href="#about" class="header__menu_link">О нас</a>
                        <a href="#reviews" class="header__menu_link">Отзывы</a>
                        <a href="#form" class="header__menu_link">Связаться с нами</a>
                    </nav>
                </div> 
            <?else:?>
                <div class="header__menu">
                    <nav class="header__menu_nav">
                        <a href="<?$_SERVER["SERVER_NAME"];?>/#first-screen" class="header__menu_link">Главная</a>
                        <a href="<?$_SERVER["SERVER_NAME"];?>/#shares" class="header__menu_link">Акции</a>
                        <a href="<?$_SERVER["SERVER_NAME"];?>/#product-caption" class="header__menu_link">Продукты</a>
                        <a href="<?$_SERVER["SERVER_NAME"];?>/#catalog" class="header__menu_link">Подарочные наборы</a>
                        <a href="<?$_SERVER["SERVER_NAME"];?>/#branding" class="header__menu_link">Брендирование</a>
                        <a href="<?$_SERVER["SERVER_NAME"];?>/#advantages" class="header__menu_link">Преимущества</a>
                        <a href="<?$_SERVER["SERVER_NAME"];?>/#delivery" class="header__menu_link">Доставка и оплата</a>
                        <a href="<?$_SERVER["SERVER_NAME"];?>/#about" class="header__menu_link">О нас</a>
                        <a href="<?$_SERVER["SERVER_NAME"];?>/#reviews" class="header__menu_link">Отзывы</a>
                        <a href="<?$_SERVER["SERVER_NAME"];?>/#form" class="header__menu_link">Связаться с нами</a>
                    </nav>
                </div>
            <?endif;?>
        </header>