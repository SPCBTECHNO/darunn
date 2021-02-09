<?require 'data.php'?> 
    
    </div> <!-- /wrapper -->
    <footer id="footer" class="footer">
        <div class="footer__container container">
            <div class="footer__contacts">
                <div class="footer__contacts_inst">
                    <a href="<?=$arContacts["INSTAGRAM"];?>"><img src="assets/img/icons/inst.svg" alt="Instagram: <?=$arContacts["INSTAGRAM"];?>"></a>
                    <a href="<?=$arContacts["INSTAGRAM"];?>">instagram</a>
                </div>
                <div class="footer__contacts_email">
                    <a href="mailto:<?=$arContacts["EMAIL"];?>"><img src="assets/img/icons/mail_icon.svg" alt="Электронная почта: <?=$arContacts["EMAIL"];?>"></a>
                    <a href="mailto:<?=$arContacts["EMAIL"];?>"><?=$arContacts["EMAIL"];?></a>
                </div>
                <div class="footer__contacts_phone">
                    <a href="tel:<?=str_replace(" ", "",$arContacts["PHONE"]);?>"><img src="assets/img/icons/phone_icon.svg" alt="Телефон: <?=$arContacts["PHONE"];?>"></a>
                    <a href="tel:<?=str_replace(" ", "",$arContacts["PHONE"]);?>"><?=$arContacts["PHONE"];?></a>
                </div>
                <div class="footer__contacts_address">
                    <a href="tel:<?=$arContacts["ADDRESS_URL"];?>"><img src="assets/img/icons/map-mark.svg" alt="Адрес: <?=$arContacts["ADDRESS"];?>"></a>
                    <a href="tel:<?=$arContacts["ADDRESS_URL"];?>"><?=$arContacts["ADDRESS"];?></a>
                </div>
            </div>
            <div class="footer__partner">
            <h3 class="footer__partner_title element-title">Партнер проекта</h3>
                <a href="https://spkbplace.ru/" class="footer__partner_logo">
                    <img src="assets/img/icons/spkb_place_logo.svg" alt="СПКБ Place">
                </a>
                <a href="https://spkbplace.ru/" class="footer__partner_name">Подольский Технопарк</a>
            </div>
            
            
            <a href="privacy-policy.php" class="footer__politic">Политика конфиденциальности</a>
            <span class="footer__copyright">Последнее обновление сайта: <? echo date('d.m.Y', filemtime(__FILE__));?>. Все права защищены.</span>
        </div>
    </footer>
    <?if (empty($_COOKIE["cookie_name"])):?>
        <!-- <div class="popup">
            <div class="popup__window">
                <div class="popup__window_content">
                    <h2 class="popup__window_title section-title">Внимание!</h2>
                    <h4 class="popup__window_subtitle section-subtitle">Сайт содержит информацию для лиц совершеннолетнего возраста. Сведения, размещенные на сайте, не являются рекламой, носят исключительно инормационный характер, и предназначены только для личного использования.</h4>
                    <p>Вам уже есть 18 лет?</p>
                    <div class="popup__window_buttons">
                        <button class="popup__window_button popup__window_button-yes">Да</button>
                        <button class="popup__window_button popup__window_button-no">Нет</button>
                    </div>
                    <p>Нажимая кнопку «Да», Вы даете согласие на обработку персональных данных и соглашаетесь с <a href="privacy-policy.php">Политикой конфиденциальности</a>.</p>
                    <p>18+ МИНЗДРАВ ПРЕДУПРЕЖДАЕТ: ЧРЕЗМЕРНОЕ УПОТРЕБЛЕНИЕ АЛКОГОЛЯ ВРЕДИТ ВАШЕМУ ЗДОРОВЬЮ</p>
                </div>
            </div>
        </div> -->
        <div class="cookies">
            <div class="container">
                <p>Мы используем файлы cookie, чтобы улучшить работу и повысить эффективность сайта. Продолжая пользование данным сайтом, Вы соглашаетесь с использованием файлов cookie.</p>
                <button class="cookies__button button">Согласен(на)</button>
            </div>
        </div>
    <?endif;?>
    <div class="popup-form">
        <div class="popup-form__container">
            <span class="popup-form__close">Закрыть</span>
            <h2 class="popup-form__title section-title">Нам удалось Вас заинтересовать?</h2>
            <h4 class="popup-form__subtitle section-subtitle">Отправьте нам свои контактные данные и мы с Вами свяжемся.</h4>
            <form class="popup-form__form" action="assets/components/form.php" method="POST">
                <input type="hidden" name="guard" value="<?$guard?>">
                <input name="NAME" type="text" class="popup-form__form_input form__section-form_input" placeholder="Ваше Имя:*" required>
                <input name="TEL" type="tel" class="popup-form__form_input form__section-form_input input__phone" placeholder="Ваш номер телефона:*" required>
                <input name="EMAIL" type="email" class="popup-form__form_input form__section-form_input input__email" placeholder="Ваша эл. почта:">
                <button type="submit" class="popup-form__form_button form__section-form_button button">Отправить</button>
            </form>
            <span class="popup-form__required">* - обязательное поле</span>
            <span class="popup-form__agreement">Нажимая кнопку «Отправить», Вы даете согласие на обработку персональных данных и соглашаетесь с <a href="/privacy-policy.php">Политикой конфиденциальности</a>.</span>
        </div>
    </div>
    <div class="form-action">
        <div class="form-action__success">
            <h2 class="form-action__title section-title">Данные успешно отправлены.</h2>
            <h4 class="form-action__subtitle section-subtitle">Мы скоро с вами свяжемся.</h4>
            <a href="/?form=yes" class="button form-action__btn">Закрыть</a>
        </div>
        <div class="form-action__unsuccess">
            <h2 class="form-action__title section-title">Возникла ошибка при отправке данных.</h2>
            <h4 class="form-action__subtitle section-subtitle">Мы уже работаем на ее исправлением.</h4>
            <a href="/" class="button form-action__btn">Закрыть</a>
        </div>
    </div>
    <a href="mailto:<?=$arContacts["EMAIL"];?>" class="button__mail">
        <div class="button__mail_img">
            <img src="assets/img/icons/mail_icon.svg">
        </div>
    </a>
    <a href="tel:<?=str_replace(" ", "",$arContacts["PHONE"]);?>" class="button__phone">
        <div class="button__phone_img">
            <img src="assets/img/icons/phone_icon.svg">
        </div>
    </a>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.maskedinput.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/app.min.js"></script>
</body>
</html>