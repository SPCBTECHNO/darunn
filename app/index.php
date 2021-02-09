<?include 'assets/components/header.php'?>
<main>
    <section id="first-screen" class="first-screen">
        <div class="first-screen__container container">
            <h1 class=" first-screen__title title">Корпоративные подарки</h1>
            <h4 class="first-screen__subtitle section-subtitle"><?=$arSettings["SITE_DESCRIPTION"];?></h4>
            <button class="first-screen__btn button open-popup-form">Заказать подарки</button>
        </div>
    </section>
    <section id="shares" class="shares">
        <h2 style="display: none">Акции</h2>
        <img src="assets/img/dist/shares_banner.png" alt="Акция! Скидка до 15% при заказе от 20 000 руб." class="shares__banner">
    </section>
    <section id="product-caption" class="product-caption">
        <div class="product-caption__container container">
            <h2 class="product-caption__title section-title">Натуральные подарки для любимых коллег</h2>
            <h4 class="product-caption__subtitle section-subtitle">Экологически чистые продукты с особой ноткой крафта.</h4>
        </div>
        <div class="product-caption__slider">
            <div class="product-caption__slider_wrapper">
                <figure aria-label="Подсолнечное масло. Легкое натуральное масло холодного отжима. Сделано из семечки с родных полей. Пряные нотки подсолнечных семян идеально дополнят любой салат и словно легкий летний бриз прогонят зимнюю стужу." class="product-caption__slider_slide">
                    <img src="assets/img/dist/oil.png" alt="Подсолнечное масло" class="product-caption__slide_img">
                    <figcaption>
                        <h3 class="product-caption__slide_title element-title">Подсолнечное масло</h3>
                        <p class="product-caption__slide_caption">Легкое натуральное масло холодного отжима. Сделано из семечки с родных полей. Пряные нотки подсолнечных семян идеально дополнят любой салат и словно легкий летний бриз прогонят зимнюю стужу.
                        </p>
                    </figcaption>
                </figure>
                <figure aria-label="Соусы. >Сделают каждое блюдо неповторимым, добавят остроты или нежности по Вашему настроению. Широкий выбор вкусов - от жгучей горчицы до нежного чесночного соуса." class="product-caption__slider_slide">
                    <img src="assets/img/dist/sauce.png" alt="Соусы" class="product-caption__slide_img">
                    <figcaption>
                        <h3 class="product-caption__slide_title element-title">Соусы</h3>
                        <p class="product-caption__slide_caption">Сделают каждое блюдо неповторимым, добавят остроты или нежности по Вашему настроению. Широкий выбор вкусов - от жгучей горчицы до нежного чесночного соуса.
                        </p>
                    </figcaption>
                </figure>
                <figure aria-label="Сыр «Халлуми». Легкие сливочные нотки, богатый выбор вкусов от классического до пряноимбирного! Собственная крафтовая сыроварня, использование натурального козьего молока. Идеален для фритюра и гриля." class="product-caption__slider_slide">
                    <img src="assets/img/dist/cheese.png" alt="Сыр - Халлуми" class="product-caption__slide_img">
                    <figcaption>
                        <h3 class="product-caption__slide_title element-title">Сыр «Халлуми»</h3>
                        <p class="product-caption__slide_caption">Легкие сливочные нотки, богатый выбор вкусов от классического до пряноимбирного! Собственная крафтовая сыроварня, использование натурального козьего молока. Идеален для фритюра и гриля.
                        </p>
                    </figcaption>
                </figure>
                <figure aria-label="Крафтовый напиток. Только уникальные вкусы, сваренные по собственным рецептам. Удивитесь пряным ноткам черники, благородному вкусу устриц." class="product-caption__slider_slide">
                    <img src="assets/img/dist/beer.png" alt="Крафтовые напитки" class="product-caption__slide_img">
                    <figcaption>
                        <h3 class="product-caption__slide_title element-title">Крафтовый напиток</h3>
                        <p class="product-caption__slide_caption">Только уникальные вкусы, сваренные по собственным рецептам. Удивитесь пряным ноткам черники, благородному вкусу устриц.
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="product-caption__slider_pagination"></div>
        </div>
    </section>
    <div class="line"></div>
    <section id="catalog" class="catalog">
        <div class="catalog__container container">
            <h2 class="catalog__title section-title">Подарочные наборы</h2>
            <h4 class="catalog__subtitle section-subtitle">На любой вкус!</h4>
            <div class="catalog__darunn-boxes">
                <figure class="catalog__darunn-box wow">
                    <figcaption class="catalog__darunn-box_caption">
                        <h3 class="catalog__darunn-box_name">Заводной дарун</h3>
                        <p>2 крафтовых напитка (0,5 л.)</p>
                        <p>2 сыра «Халлуми» (200 г.)</p>
                        <button class="catalog__darunn-box_button button open-popup-form">от 1 400 &#8381;</button> 
                    </figcaption>
                    <img class="catalog__darunn-box_img" src="assets/img/dist/darunn-box_1.png" alt="Подарочный набор - Заводной дарун">
                </figure>
                <figure class="catalog__darunn-box wow">
                    <figcaption class="catalog__darunn-box_caption">
                        <h3 class="catalog__darunn-box_name">Изящный дарун</h3>
                        <p>2 сыра «Халлуми» (200 г.)</p>
                        <p>2 баночки с соусом (180 г.)</p>
                        <p>1 бут. подсолнечного масла (0,5 л.)</p> 
                        <button class="catalog__darunn-box_button button open-popup-form">от 1 650 &#8381;</button>  
                    </figcaption>
                    <img class="catalog__darunn-box_img" src="assets/img/dist/darunn-box_2.png" alt="Подарочный набор - Изящный дарун">
                </figure>
                <figure class="catalog__darunn-box wow">
                    <figcaption class="catalog__darunn-box_caption">
                        <h3 class="catalog__darunn-box_name">Негорючий дарун</h3>
                        <p>2 крафтовых напитка (0,5 л.)</p>
                        <p>2 сыра «Халлуми» (200 г.)</p>
                        <p>1 бут. подсолнечного масла (0,5 л.)</p>  
                        <button class="catalog__darunn-box_button button open-popup-form">от 1800 &#8381;</button> 
                    </figcaption>
                    <img class="catalog__darunn-box_img" src="assets/img/dist/darunn-box_3.png" alt="Подарочный набор - Негорючий дарун">
                </figure>
                <figure class="catalog__darunn-box wow">
                    <figcaption class="catalog__darunn-box_caption">
                        <h3 class="catalog__darunn-box_name">Хот-дарун</h3>
                        <p>2 крафтовых напитка (0,5 л.)</p>
                        <p>2 баночки с соусом (180 г.)</p>
                        <p>1 бут. подсолнечного масла (0,5 л.)</p>  
                        <button class="catalog__darunn-box_button button open-popup-form">от 1300 &#8381;</button> 
                    </figcaption>
                    <img class="catalog__darunn-box_img" src="assets/img/dist/darunn-box_4.png" alt="Подарочный набор - Хот-дарун">
                </figure>
                <figure class="catalog__darunn-box wow">
                    <figcaption class="catalog__darunn-box_caption">
                        <h3 class="catalog__darunn-box_name">Полный дарун</h3>
                        <p>2 крафтовых напитка (0,5 л.)</p>
                        <p>1 сыр «Халлуми» (200 г.)</p>
                        <p>1 баночка с соусом (180 г.)</p>
                        <p>1 бут. подсолнечного масла (0,5 л.)</p>
                        <button class="catalog__darunn-box_button button open-popup-form">от 1900 &#8381;</button>    
                    </figcaption>
                    <img class="catalog__darunn-box_img" src="assets/img/dist/darunn-box_5.png" alt="Подарочный набор - Полный дарун">
                </figure>
                <figure class="catalog__darunn-box wow">
                    <figcaption class="catalog__darunn-box_caption">
                        <h3 class="catalog__darunn-box_name">Собери свой дарун</h3>
                        <p>Если Вам не приглянулся ни один набор, Вы можете придумать свой!</p> 
                        <button class="catalog__darunn-box_button button open-popup-form">Уточняйте</button>
                    </figcaption>
                    <img class="catalog__darunn-box_img" src="assets/img/dist/darunn-box_last.png" alt="Собери свой подарочный набор!">
                </figure>
            </div>
            <a href="assets/docs/price-list.pdf" class="catalog__price-list-btn" target="_blank">Прайс-лист</a>
            <button class="catalog__btn button open-popup-form">Оформить заказ</button>
        </div>
    </section>
    <div class="line"></div>
    <section id="branding" class="branding">
        <div class="branding__container container">
            <h2 class="branding__title section-title">Брендирование подарочных наборов</h2>
            <h4 class="branding__subtitle section-subtitle">Мы создадим дизайн подарочного набора с Вашим фирменным стилем!</h4>
            <div class="branding__card">
                <img src="assets/img/dist/bottle.jpg" alt="Этикетка и упаковка с фирменным дизайном" class="branding__card_img">
                <h3 class="branding__card_title element-title">Ваш стиль - наш приоритет!</h3>
                <p class="branding__card_caption">Дизайн всех составляющих подарка (этикетка, упаковка) под Вашу концепцию. Разнообразие материалов и способов изготовления.
                </p>
            </div>
            <div class="branding__card">
                <img src="assets/img/dist/box.jpg" alt="Гравировка логотипа на коробке с лазерным нанесением" class="branding__card_img">
                <h3 class="branding__card_title element-title">Узнаваемость с первого момента!</h3>
                <p class="branding__card_caption">Гравировка логотипа или эксклюзивного дизайна на коробке лазерным нанесением.
                </p>
            </div>
        </div>
    </section>
    <section id="advantages" class="advantages">
        <div class="advantages__container container">
            <h2 class="advantages__titel section-title">Не сомневайтесь! Действуйте!</h2>
            <h4 class="advantages__subtitle section-subtitle">Ваша заинтересованность - наша цель!</h4>
        </div>
        <div class="advantages__cards">
                <div class="advantages__cards_wrapper">
                    <div class="advantages__card">
                        <div class="advantages__card_img"></div>
                        <span class="advantages__card_tag">#экотунберг</span>
                        <h3 class="advantages__card_title element-title">Натуральные продукты</h3>
                        <p class="advantages__card_caption">Мы собираем подарки только из продуктов с родных российских полей, обязательно проверяем качество их продукции и производства.</p>
                    </div>
                    <div class="advantages__card">
                        <div class="advantages__card_img"></div>
                        <span class="advantages__card_tag">#незапылится</span>
                        <h3 class="advantages__card_title element-title">Удивите простотой</h3>
                        <p class="advantages__card_caption">В мире, где правят высокие технологии и переизбыток изысканности, простые ценности вызывают восторг и море положительных эмоций!</p>
                    </div>
                    <div class="advantages__card">
                        <div class="advantages__card_img"></div>
                        <span class="advantages__card_tag">#дезигн</span>
                        <h3 class="advantages__card_title element-title">Уникальный дизайн</h3>
                        <p class="advantages__card_caption">Наша команда дизайнеров воплотит в жизнь все Ваши пожелания, создав необычный образ под каждый кусочек подарка.</p>
                    </div>
                </div>
                <div class="advantages__cards_pagination"></div>
            </div>
    </section>
    <section id="delivery" class="delivery">
        <div class="delivery__container container">
            <h2 class="catalog__title section-title">Доставка и оплата</h2>
            <h4 class="catalog__subtitle section-subtitle">Доступно для самовывоза!</h4>
            <div class="delivery__cards">
                <div class="delivery__card wow animate__animated animate__fadeInUp">
                    <img class="delivery__card_img" src="assets/img/icons/delivery-man.svg" alt="Курьерская доставка">
                    <h3 class="delivery__card_title">Курьерская служба</h3>
                    <p class="delivery__card_desc">Доставка осуществляется по Москве и Московской области. Минимальная сумма заказа от 5 000 рублей.</p>
                </div>
                <div class="delivery__card wow animate__animated animate__fadeInUp">
                    <img class="delivery__card_img" src="assets/img/icons/courier.svg" alt="Самовывоз">
                    <h3 class="delivery__card_title">Самовывоз</h3>
                    <p class="delivery__card_desc">Самовывоз осуществляется по адресу <a href="<?=$arContacts["ADDRESS_URL"];?>"><?=$arContacts["ADDRESS"];?></a></p>
                </div>
                <div class="delivery__card wow animate__animated animate__fadeInUp">
                    <img class="delivery__card_img" src="assets/img/icons/point-of-sale.svg" alt="Курьерская доставка">
                    <h3 class="delivery__card_title">Оплата</h3>
                    <p class="delivery__card_desc">Для юридических лиц оплата осуществляется по договору.<br>Для физических лиц возможна оплата по карте или наличными при самовывозе.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="line"></div>
    <section id="about" class="about">
        <div class="about__container container">
            <h2 class="about__title section-title">Кратко о нас</h2>
            <h4 class="about__subtitle section-subtitle">Познакомимся поближе.</h4>
            <p>Компактная команда друзей, влюбленных в неординарные идеи. Входим в состав креативного бизнес-сообщества, соединившего в себе сплав технологичности и любви к натуральному.
            </p>
            <p>С радостью создадим для Вашей команды подарки с фирменным дизайном. Удивление и восторг коллег гарантировано! А после распаковки можно сразу приступить к бурному праздненству!</p>
        </div>
    </section>
    <div class="line"></div>
    <section id="reviews" class="reviews">
        <div class="reviews__container container">
            <h2 class="reviews__title section-title">Отзывы наших клиентов</h2>
            <h4 class="reviews__subtitle section-subtitle">Нас любят!</h4>
        </div>
        <div class="reviews__slider">
            <div class="reviews__slider_wrapper">
                <div class="reviews__card">
                    <h3 class="reviews__card_client-name element-title">Стрекалова С.И.</h3>
                    <span class="reviews__card_location">г. Чехов</span>
                    <p class="reviews__card_review">Выручили в трудную минуту, когда праздник был на носу. Подарки красивые и интересные.</p>
                </div>
                <div class="reviews__card">
                    <h3 class="reviews__card_client-name element-title">Чисоев И.В.</h3>
                    <span class="reviews__card_location">г. Москва</span>
                    <p class="reviews__card_review">Оригинальные подарки, особенно понравилась возможность собственного дизайна. К куче правок относились без негатива, всем советую.</p>
                </div>
                <div class="reviews__card">
                    <h3 class="reviews__card_client-name element-title">Курагин В.Н.</h3>
                    <span class="reviews__card_location">г. Москва</span>
                    <p class="reviews__card_review">Несмотря на небольшую задержку в поставке качество доволен. Фанера коробок добротная, продукты свежие и вкусные.</p>
                </div>
                <div class="reviews__card">
                    <h3 class="reviews__card_client-name element-title">Нисаева О.В.</h3>
                    <span class="reviews__card_location">г. Подольск</span>
                    <p class="reviews__card_review">Как же здорово, что есть такая доброжелательная команда! Всегда входят в положение и решают проблемы.</p>
                </div>
            </div>
            <div class="reviews__slider_pagination"></div>   
        </div>
    </section>
    <section id="form" class="form">
        <div class="form__container container">
            <h2 class="form__title section-title">От интереса до радости - всего шаг!</h2>
            <h4 class="form__subtitle section-subtitle">Отправьте нам свои контактные данные и мы с Вами свяжемся.</h4>
            <form class="form__section-form" action="assets/components/form.php" method="POST">
                <input type="hidden" name="guard" value="<?$guard?>">
                <input name="NAME" type="text" class="form__section-form_input" placeholder="Ваше Имя:*" required>
                <input name="TEL" type="tel" class="form__section-form_input input__phone" placeholder="Ваш номер телефона:*" required>
                <input name="EMAIL" type="email" class="form__section-form_input input__email" placeholder="Ваша эл. почта:">
                <button type="submit" class="form__section-form_button button">Отправить</button>
            </form>
            <span class="form__required">* - обязательное поле</span>
            <span class="form__agreement">Нажимая кнопку «Отправить», Вы даете согласие на обработку персональных данных и соглашаетесь с <a href="/privacy-policy.php">Политикой конфиденциальности</a>.</span>
        </div>
    </section>
</main>
<?include 'assets/components/footer.php'?>