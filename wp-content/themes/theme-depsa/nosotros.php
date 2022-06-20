<?php

/**
 * Template Name: Plantilla Nosotros
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

    <section class="section-info">
        <div class="container">
            <div class="grid-col">
                <div class="grid-s-12 grid-m-12 grid-l-6 wow fadeInLeft">

                    <div class="infodepsa__content titulo-general  titulo-general--normal editar button button--b-radius button--totalwidth">
                        <?php the_content(); ?>
                    </div>



                    <div class="accordion">
                        <?php if (have_rows('vision')) { ?>
                            <?php while (have_rows('vision')) {
                                the_row(); ?>
                                <div class="accordion__item">
                                    <h3 class="accordion__title js-title"><span class="text-acordeon"><?php the_sub_field('titulo'); ?></span><i class="icono-acordeon ri-arrow-down-s-line"></i></h3>
                                    <div class="accordion__copy js-copy editar">
                                        <?php the_sub_field('informacion'); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>

                        <?php if (have_rows('mision')) { ?>
                            <?php while (have_rows('mision')) {
                                the_row(); ?>
                                <div class="accordion__item">
                                    <h3 class="accordion__title js-title"><span class="text-acordeon"><?php the_sub_field('titulo'); ?></span><i class="icono-acordeon ri-arrow-down-s-line"></i></h3>
                                    <div class="accordion__copy  js-copy editar">
                                        <?php the_sub_field('informacion'); ?>
                                    </div>
                                </div>
                    </div>
                <?php } ?>
            <?php } ?>



                </div>
                <div class="grid-s-12 grid-m-12 grid-l-6 wow fadeInRight">
                    <div class="banner__bloque">
                        <?php
                        $link_video = get_field('link_video_nosotros');
                        if (empty($link_video)) {
                        ?>
                            <div class="img-detalle">
                                <div class="banner__imagen">
                                    <?php $imagen = get_field('img_nosotros'); ?>
                                    <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="img-detalle">
                                <div class="banner__imagen">
                                    <a data-fancybox href="<?php echo $link_video ?>">
                                        <?php $imagen = get_field('img_nosotros'); ?>
                                        <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                        <i class="ri-play-fill"></i>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="features wow fadeInUp">
                <div class="grid-col">
                    <?php if (have_rows('features')) { ?>
                        <?php while (have_rows('features')) {
                            the_row(); ?>
                            <div class="grid-s-12 grid-m-4 grid-l-4">
                                <div class="features-list editar n-margin">
                                    <p><?php the_sub_field('item_feature'); ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section class="reel wow slideInUp">
        <?php if (have_rows('item_imagenes')) { ?>
            <?php while (have_rows('item_imagenes')) {
                the_row(); ?>
                <div class="reel__img">
                    <?php $imagen = get_sub_field('imagen'); ?>
                    <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                    <img class="marca-agua" src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/depsa-marca-agua.png" alt="">
                </div>
            <?php } ?>
        <?php } ?>
    </section>

    <section class="section-ubicanos-features">
        <div class="container">
            <div class="grid-col">
                <div class="grid-s-12 grid-m-6 grid-l-6 content-features wow fadeInLeft">
                    <div class="titulo-general  titulo-general--normal">
                        <h2><?php the_field('titulo_ubicacion'); ?></h2>
                    </div>
                    <div class="soluciones">
                        <div class="soluciones__lista">
                            <div class="soluciones__lista__items soluciones__lista__items--opuesto soluciones__lista__items--oneline">
                                <ul class="lista-items editar">
                                    <?php if (have_rows('lista_features')) { ?>
                                        <?php while (have_rows('lista_features')) {
                                            the_row(); ?>
                                            <li class="">
                                                <?php $imagen = get_sub_field('icon_feature'); ?>
                                                <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                                <?php the_sub_field('item_feature'); ?>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-s-12 grid-m-6 grid-l-6 content-map wow fadeInRight">
                    <?php $imagen = get_field('img_ubicaciones'); ?>
                    <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                </div>
            </div>
        </div>

        <div class="container wow slideInUp">
            <div class="grid-col">
                <div class="grid-12">
                    <div class="accordion">
                        <?php if (have_rows('tab_sistema')) { ?>
                            <?php while (have_rows('tab_sistema')) {
                                the_row(); ?>
                                <div class="accordion__item">
                                    <h3 class="accordion__title js-title"><span class="text-acordeon"><?php the_sub_field('titulo'); ?></span><i class="icono-acordeon ri-arrow-down-s-line"></i></h3>
                                    <div class="accordion__copy js-copy editar">
                                        <?php the_sub_field('informacion'); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $args = array(
        'post_type' => 'informacion',
        'posts_per_page' => '1',
    );
    ?>
    <?php $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <section class="section-certificados">
                <div class="container">
                    <div class="grid-col">

                        <div class="grid-12">
                            <div class="bloque ">
                                <div class="titulo-general ">
                                    <h2><?php the_field('titulo_certificado'); ?></h2>
                                </div>
                                <div class="item-list wow fadeInUp">
                                    <?php if (have_rows('certificados')) { ?>
                                        <?php while (have_rows('certificados')) {
                                            the_row(); ?>
                                            <div class="item-list--figura">
                                                <?php $imagen = get_sub_field('logo_certificado'); ?>
                                                <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="grid-12">
                            <div class="titulo-general ">
                                <h2><?php the_field('titulo_autorizado'); ?></h2>
                            </div>
                            <div class="item-list wow fadeInUp">
                                <?php if (have_rows('autorizados')) { ?>
                                    <?php while (have_rows('autorizados')) {
                                        the_row(); ?>
                                        <div class="item-list--figura">
                                            <?php $imagen = get_sub_field('logo_autorizados'); ?>
                                            <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>