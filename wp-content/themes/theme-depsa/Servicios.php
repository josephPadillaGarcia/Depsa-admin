<?php

/**
 * Template Name: Plantilla Servicios
 */
get_header(); ?>

<div class="main">

<?php $imagen = get_field('page_banner'); ?>
    <section class="banner-page" style="background-image: url('<?php echo $imagen['url']; ?>');">
        <div class="name-page">
            <div class="container">
                <h2 class="wow fadeInUp">
                <?php the_field('titulo_page'); ?>
                </h2>
            </div>
        </div>
    </section>

    <section class="section-servicios ">
        <div class="container">
            <div class="grid-12">
                <div class="titulo-general editar button button--b-radius button--totalwidth">
                    <?php the_field('descripcion_servicios'); ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="grid-12">

                <div class="owl-slider owl-carousel owl-theme owl-general wow fadeInUp">

                    <?php
                    $args = array(
                        'post_type' => 'servicios',
                        'posts_per_page' => '0',
                    );
                    ?>
                    <?php $the_query = new WP_Query($args); ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="item">
                                <article class="card card--borde">
                                    <aside class="card__aside">
                                        <figure class="card__figure">
                                            <?php $imagen = get_field('img_servicio'); ?>
                                            <img class="card__image" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                        </figure>
                                        <div class="card__icon-servicio">
                                            <i class="ri-archive-line"></i>
                                        </div>
                                    </aside>
                                    <div class="card__contenedor">
                                        <header class="card__header">
                                            <h2 class="card__title"><?php the_title(); ?></h2>
                                        </header>
                                        <div class="card__body editar">
                                            <?php the_field('info_servicio'); ?>
                                        </div>
                                        <footer class="card__footer">
                                            <div class="card__actions button button__estilo02 button--b-radius button--totalwidth button--altonormal">
                                                <a href="<?php the_permalink(); ?>" class="">
                                                    <span class="button__body">Mas Información</span>
                                                </a>
                                            </div>
                                        </footer>
                                    </div>
                                </article>
                            </div>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    $args = array(
        'post_type' => 'servicios',
        'posts_per_page' => '0',
    );
    ?>
    <?php $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="slider-services">
                <a href="<?php the_permalink(); ?>">
                    <?php $imagen = get_field('img_servicio'); ?>
                    <img class="card__image" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                    <div class="slider-s__content">
                        <div class="slider-s__icon">
                            <i class="ri-archive-line"></i>
                        </div>
                        <div class="slider-s__body">
                            <b><?php the_title(); ?></b>
                            <p class="btn-action">Más Información</p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>


    <?php $imagen = get_field('banner_fondo'); ?>
    <section class="section-info-infodepsa wow fadeInUp">
        <div class="container" style="background-image: url('<?php echo $imagen['url']; ?>');">
            <div class="grid-col">
                <div class="grid-12">
                    <div class="infodepsa">
                    <?php $imagen = get_field('logo_infodepsa'); ?>
                    <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                    <?php the_field('infodepsa_movil'); ?>
                        <div class="item-list">
                        <?php if (have_rows('lista_features_infodepsa')) { ?>
            <?php while (have_rows('lista_features_infodepsa')) {
                the_row(); ?>
                            <div class="item-list--figura item-list--figura--iconos">
                            <?php $imagen = get_sub_field('icon_features'); ?>
                    <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                <p><?php the_sub_field('info_features'); ?></p>
                            </div>
            <?php } ?>
        <?php } ?>
                        </div>
                        <div class="infodepsa__actions button button--b-radius button--totalwidth button--altonormal">
                            <a href="#" class="">
                                <span class="button__body">Ingresa a Infodepsa</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>