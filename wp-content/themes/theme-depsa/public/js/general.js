//  ==== DESPLEGAR NAV

$(document).on("scroll", function () {

    if ($(document).scrollTop() > 80) {
        $(".header").addClass("header--background header--shadow header--n-padding");
        $(".header__logo").addClass("header__logo--padding-less");
        $(".header__img").addClass("header__img--less");
        $(".main-nav__link").addClass("main-nav__link--t-color");
        $(".main-nav__link").addClass("main-nav__link--p-less");
        $(".header .header__link__top").addClass("header__link--hide");
        $(".header .header__link__top").removeClass("header__link--show");
        $(".header .header__link__down").addClass("header__link--show");
        $(".header .header__link__down").removeClass("header__link--hide");
        $(".movil-menu li").addClass("menu-btn");
        $(".main-nav__idiomas").addClass("main-nav__idiomas--text-normal");
        $(".main-nav__resaltar").addClass("main-nav__list--t-color-2");
        $(".main-nav__dropdown").addClass("main-nav__dropdown--drop-more");
    } else {
        $(".header").removeClass("header--background header--shadow header--n-padding");
        $(".main-nav__link").removeClass("main-nav__link--t-color");
        $(".main-nav__link").removeClass("main-nav__link--p-less");
        $(".header .header__link__down").addClass("header__link--hide");
        $(".header .header__link__down").removeClass("header__link--show");
        $(".header .header__link__top").addClass("header__link--show");
        $(".header .header__link__top").removeClass("header__link--hide");
        $(".movil-menu li ").removeClass("menu-btn");
        $(".main-nav__idiomas").removeClass("main-nav__idiomas--text-normal");
        $(".header__logo").removeClass(".header__logo--padding-less");
        $(".header__img").removeClass("header__img--less");
        $(".main-nav__dropdown").removeClass("main-nav__dropdown--drop-more");
        $(".main-nav__resaltar").removeClass("main-nav__list--t-color-2");
    }

});

/* ============================================================ */
/* 
    TAB 
    *
    ---------------------------------------------
    *
*/

$(document).ready(function () {
    $(".tab-content div").hide();

    $(".slidebar li:first").attr("id", "active");

    $(".tab-content div:first").fadeIn();

    $('.slidebar a').click(function (e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "active") {
            return
        } else {
            $(".tab-content div").hide();

            $(".slidebar li").attr("id", "");

            $(this).parent().attr("id", "active");
            // active le parent du li selectionner

            $('#' + $(this).attr('name')).fadeIn();
            // Montre le texte
        }
    });
});

/* ============================================================ */


/* 
    DESPLEGAR ASIDE 
    *
    ---------------------------------------------
    *
*/

$(document).ready(function () {
    /* mostrar y cerrar aside (menu lateral) */

    $("#abrir-side02").click(function () {
        $(".sidenav").addClass("active");
    });
    $("#abrir-side").click(function () {
        $(".sidenav").addClass("active");
    });

    $("#cerrar-side").click(function () {
        $(".sidenav").removeClass("active");
    });
    /*------------------------------------------*/

    /* show dropdown in menu responsive */
    $("#btn-show-dropdown").click(function () {

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $("#show-dropdown").slideUp();
        } else {
            $("#show-dropdown").slideUp();
            $("#btn-show-dropdown").removeClass('active');
            $(this).addClass('active');
            $("#show-dropdown").slideDown();
        }
    });
    /*------------------------------------------*/
});

/* ====================================================== */

/* 
    ACORDEON 
    *
    ---------------------------------------------
    *
*/

var $title = $('.js-title');
var copy = '.js-copy';

$title.click(function () {
    $(this).next(copy).slideToggle();
    $(this).parent().siblings().children().next().slideUp();
    if ($(this).children('i.icono-acordeon').hasClass('active')) {
        $(this).children('i.icono-acordeon').removeClass('active');
    } else {
        $('i.icono-acordeon').removeClass('active');
        $(this).children('i.icono-acordeon').addClass('active');
    }
});

/* ====================================================== */

/* 
    BANNER 
    *
    ---------------------------------------------
    *
*/

$(document).ready(function () {

    $('.owl-banner.owl-carousel').owlCarousel({
        nav: true,
        dots: true,
        navText: ["<i class='ri-arrow-left-s-line'></i>", "<i class='ri-arrow-right-s-line'></i>"],
        responsive: {
            0: {
                items: 1,
                dots: false
            },
            720: {
                items: 1,
                dots: true
            }
        }
    });
});

/* ====================================================== */
/* 
    SLIDER 
    *
    ---------------------------------------------
    *
*/

$(document).ready(function () {

    $('.owl-slider.owl-carousel').owlCarousel({
        loop: false,
        center: false,
        margin: 0,
        nav: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        navText: ["<i class='ri-arrow-left-s-line'></i>", "<i class='ri-arrow-right-s-line'></i>"],
        responsive: {
            0: {
                margin: 15,
                items: 1,
            },
            600: {
                items: 2
            },
            1049: {
                items: 3
            }
        }
    });

    $('.owl-sectores.owl-carousel').owlCarousel({
        loop: true,
        center: false,
        nav: true,
        dots: false,
        margin: 12,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        navText: ["<i class='ri-arrow-left-s-line'></i>", "<i class='ri-arrow-right-s-line'></i>"],
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 3
            },
            770: {
                items: 5
            },
            1049: {
                items: 6
            }
        }
    });

});
/* ====================================================== */

// CONTADOR

$(document).ready(function () {

    $('.counter').counterUp({
        delay: 30,
        time: 4000
    });

});



/* ====================================================== */


