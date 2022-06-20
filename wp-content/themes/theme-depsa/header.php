<?php

/**
 * Template Name: Header
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depsa</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/remixicon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/animate.css">
</head>

<body>


    <!--header>
        <nav>
            <!?php
            wp_nav_menu('header-menu');
            ?-->
        </nav>
    </header-->

    <section class="space-section">
        <header class="header header--fixed">
            <div class="container">
                <div class="header__content">

                    <div class="header__logo header__logo--padding">
                        <a class="header__link header__link__top header__link--show" href="index.php"><img src="<?php echo site_url();?>/wp-content/uploads/2022/06/logo-depsa-white.png" alt="" class="header__img"></a>
                        <a class="header__link header__link__down header__link--hide" href="index.php"><img src="<?php echo site_url();?>/wp-content/uploads/2022/06/logo-depsa.png" alt="" class="header__img"></a>
                    </div>

                    <nav class="main-nav" aria-label="Main">

                        <div class="main-nav__box">
                            <ul class="main-nav__list main-nav__list--h-line-bottom main-nav__list--h-color-text main-nav__resaltar">
                                <li class="main-nav__item">
                                    <a href="servicios.php" class="main-nav__link"><span class="text-link">Zona cliente</span> <i class="icono-link ri-arrow-down-s-line"></i></a>
                                    <ul class="main-nav__dropdown">
                                        <li><a href="single-service.php" class="dropdown-link">Infodepsa</a></li>
                                        <li><a href="single-service.php" class="dropdown-link">Servicio al cliente</a></li>
                                    </ul>
                                </li>
                                <li class="main-nav__item main-nav__idiomas">
                                    <a href="#" class="main-nav__link "><span class="text-link">En</span> </a>
                                    <span>/</span>
                                    <a href="#" class="main-nav__link"><span class="text-link">Es</span> </a>
                                </li>
                            </ul>
                            <ul class="main-nav__list main-nav__list--h-line-bottom main-nav__list--h-color-text">
                                <li class="main-nav__item">
                                    <a href="nuestra-empresa.php" class="main-nav__link">Nosotros</a>
                                </li>
                                <li class="main-nav__item">
                                    <a href="servicios.php" class="main-nav__link"><span class="text-link">Servicios</span> <i class="icono-link ri-arrow-down-s-line"></i></a>
                                    <ul class="main-nav__dropdown">
                                        <li><a href="single-service.php" class="dropdown-link">Bodega Express</a></li>
                                        <li><a href="single-service.php" class="dropdown-link">Almacenes</a></li>
                                        <li><a href="single-service.php" class="dropdown-link">Graneles</a></li>
                                        <li><a href="single-service.php" class="dropdown-link">Frío</a></li>
                                    </ul>
                                </li>
                                <li class="main-nav__item">
                                    <a href="sostenibilidad.php" class="main-nav__link">Sostenibilidad</a>
                                </li>
                                <li class="main-nav__item">
                                    <a href="linea-etica.php" class="main-nav__link">Línea Ética</a>
                                </li>
                                <li class="main-nav__item">
                                    <a href="#" class="main-nav__link">Noticias</a>
                                </li>
                                <li class="main-nav__item">
                                    <a href="contacto.php" class="main-nav__link">Contáctanos</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="movil-menu" style="display: none;">
                            <li>
                                <a href="contacto.php" class="btn-nav">Contáctanos</a>
                                <a id="abrir-side02" class="btn-nav"><i class="ri-menu-line"></i></a>
                            </li>
                        </ul>

                    </nav>
                </div>
            </div>

            <!-- ///  MENU MOBIL  /// -->
            <div class="sidenav">
                <div class="sidenav__content">
                    <div class="sidenav__head">
                        <div class="head__logo">
                            <img src="<?php echo site_url();?>/wp-content/uploads/2022/06/logo-depsa.png" alt="" class="header__img">
                        </div>
                        <div class="head__cerrar head__cerrar--b-radius ">
                            <a class="" id="cerrar-side"><i class="close ri-close-line"></i></a>
                        </div>
                    </div>
                    <div class="sidenav__body">
                        <ul class="sidenav__list">
                            <li class="sidenav__item"><a href="nuestra-empresa.php" class="sidenav__links">Nosotros</a></li>
                            <li class="sidenav__item">
                                <span class="sidenav__links"> <a href="servicios.php" class="text-link">Servicios</a> <i id="btn-show-dropdown" class="icono-link ri-arrow-down-s-line"></i> </span>
                                <ul id="show-dropdown" class="sidenav__dropdown">
                                    <li class="sidenav__item"><a href="single-service.php" class="sidenav__links">Bodega Express</a></li>
                                    <li class="sidenav__item"><a href="single-service.php" class="sidenav__links">Almacenes</a></li>
                                    <li class="sidenav__item"><a href="single-service.php" class="sidenav__links">Graneles</a></li>
                                    <li class="sidenav__item"><a href="single-service.php" class="sidenav__links">Frío</a></li>
                                </ul>
                            </li>
                            <li class="sidenav__item"><a href="sostenibilidad.php" class="sidenav__links">Sostenibilidad</a></li>
                            <li class="sidenav__item"><a href="linea-etica.php" class="sidenav__links">Línea Ética</a></li>
                            <li class="sidenav__item"><a href="#!" class="sidenav__links">Noticias</a></li>
                            <li class="sidenav__item"><a href="contacto.php" class="sidenav__links">Contáctanos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ///  **************  /// -->

        </header>
    </section>