$(document).ready(function() {
    
    var serverPath = document.location.protocol + "//" + document.location.host + "/";

    // Смена банера акций
    if ($(window).width() < 575) {
        $(".shares__banner").attr("src", "assets/img/dist/shares_banner_alt.jpg")
    }

    // Установка высоты первого экрана
    $(".first-screen").height($(window).height() - $('.header').height() - $('.shares__banner').height());

    // Выплывающее окно в случае успешной отправки формы обратной связи
    if (window.location.href == serverPath + "?form-action=yes") {
        $(".form-action").css("display", "block");
        $(".form-action__success").css("display", "flex");
        $(".form__section-form").css("display", "none");
        $(".form__required").css("display", "none");
        $(".form__agreement").css("display", "none");
        $(".form__title").text("Данные успешно отправлены!");
        $(".form__subtitle").text("Мы скоро с вами свяжемся.");

    //Выплывающее окно в случае неудачной отправки формы обратной связи 
    } else if (window.location.href == serverPath + "?form-action=no") {
        $(".form-action").css("display", "block");
        $(".form-action__unsuccess").css("display", "flex");
        $(".form__title").text("Возникли неполадки!");
        $(".form__subtitle").text("Мы уже работаем над их исправлением.");
    };

    // Скрытие формы обратной связи после успешной отправки данных
    if (window.location.href == serverPath + "?form=yes") {
        $(".form__section-form").css("display", "none");
        $(".form__required").css("display", "none");
        $(".form__agreement").css("display", "none");
        $(".form__title").text("Данные успешно отправлены!");
        $(".form__subtitle").text("Мы скоро с вами свяжемся.");
    };
    // Стрытие всплывающего окна на всех страницах, кроме главной
    $(document).ready(function(){
        if (document.location.href != serverPath) {
            $('.popup').css("display", "none");
        };
    });

    // Закрытие всплывающей формы обратной связи
    $('.popup-form__close').click(function() {
        $('.popup-form').css('display', 'none');
    });

    // cookies
    $('.cookies__button').click(function() {
        $('.cookies').css('display', 'none');
    });

    // Вызов всплывающей формы обратной связи
    $('.open-popup-form').click(function() {
        $('.popup-form').css('display', 'flex');
    });
    $('.shares__banner').click(function() {
        $('.popup-form').css('display', 'flex');
    });

    // Плавная прокрутка до якоря
    $(function(){
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top - $(".header").height() + 5 +"rem"});
            return false;
        });
    });
    

    // Маска ввода номера телефона
    $('.input__phone').mask('+7 (999) 999-99-99');

    // Фиксация шапки при пролистовании
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('.header').addClass('header-fixed');
        } else {
            $('.header').removeClass('header-fixed'); 
        };
    });

    // Закрытие окна при подтверждении возраста
    $('.popup__window_button-yes').click(function() {
        $('.popup').css('display', 'none');
    });

    // Замена текста окна при отклонении возраста
    $('.popup__window_button-no').click(function() {
        $('.popup__window p:nth-child(3)').text('Благодарим за честный ответ');
        $('.popup__window p:nth-child(6)').text('Мы заботимся о здоровье будущего поколения, поэтому не демонстрируем алкоголь лицам младше 18 лет.');
        $('.popup__window p:nth-child(6)').css('font-size', '1.5rem');
        $('.popup__window_button').css('display', 'none');
    });

    // Swiper.JS
    new Swiper('.header__menu', {
        slidesPerView: 'auto',
        spaceBetween: 16,
        wrapperClass: 'header__menu_nav',
        slideClass: 'header__menu_link',
        breakpoints: {
            320: {
                setWrapperSize: 'auto',
                slidesPerView: 2.5
            },
            768: {
                setWrapperSize: 'auto',
                slidesPerView: 5.5
            },
            1024: {
                setWrapperSize: 'auto',
                slidesPerView: 'auto'
            },
            1440: {
                setWrapperSize: 'auto',
                slidesPerView: 10,
                spaceBetween: 0
            }
        }
    });

    new Swiper('.product-caption__slider', {
        wrapperClass: 'product-caption__slider_wrapper',
        slideClass: 'product-caption__slider_slide',
        slidesPerView: 4,
        autoplay: {
            delay: 3000
        },
        breakpoints: {
            320: {
                setWrapperSize: 'auto',
                slidesPerView: 1,
                pagination: {
                    el: '.product-caption__slider_pagination',
                    type: 'bullets'
                }
            },
            768: {
                setWrapperSize: 'auto',
                slidesPerView: 2,
                pagination: {
                    el: '.product-caption__slider_pagination',
                    type: 'bullets'
                }
            },
            1024: {
                setWrapperSize: 'auto',
                slidesPerView: 3,
                pagination: {
                    el: '.product-caption__slider_pagination',
                    type: 'bullets'
                }
            },
            1440: {
                setWrapperSize: 'auto',
                slidesPerView: 4
            }
        }
    });

    new Swiper('.advantages__cards', {
        wrapperClass: 'advantages__cards_wrapper',
        slideClass: 'advantages__card',
        slidesPerView: 3,
        autoplay: {
            delay: 3000
        },
        breakpoints: {
            320: {
                setWrapperSize: 'auto',
                slidesPerView: 1,
                pagination: {
                    el: '.advantages__cards_pagination',
                    type: 'bullets'
                }
            },
            768: {
                setWrapperSize: 'auto',
                slidesPerView: 2,
                pagination: {
                    el: '.advantages__cards_pagination',
                    type: 'bullets'
                }
            },
            1024: {
                setWrapperSize: 'auto',
                slidesPerView: 3,
                spaceBetween: 32
            },
            1440: {
                setWrapperSize: 'auto',
                slidesPerView: 3
            }
        }
    });

    new Swiper('.reviews__slider', {
        wrapperClass: 'reviews__slider_wrapper',
        slideClass: 'reviews__card',
        slidesPerView: 4,
        spaceBetween: 48,
        autoplay: {
            delay: 3000
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                setWrapperSize: 'auto',
                pagination: {
                    el: '.reviews__slider_pagination',
                    type: 'bullets'
                }
            },
            768: {
                pagination: {
                    el: '.reviews__slider_pagination',
                    type: 'bullets'
                },
                slidesPerView: 2,
                spaceBetween: 16,
                setWrapperSize: 'auto'
            },
            1024: {
                pagination: {
                    el: '.reviews__slider_pagination',
                    type: 'bullets'
                },
                slidesPerView: 3,
                spaceBetween: 16,
                setWrapperSize: 'auto'
            },
            1440: {
                pagination: {
                    el: '.reviews__slider_pagination',
                    type: 'bullets'
                },
                slidesPerView: 3,
                spaceBetween: 32,
                setWrapperSize: 'auto'
            },
            1700: {
                slidesPerView: 4
            }
        },
    });

    // WoW.JS
    new WOW().init();
})