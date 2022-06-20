<?php

/**
 * Template Name: Plantilla Index
 */

$showpost = get_field("showpost");
$showcategory = get_field("taxonomia");
get_header();

?>

<div class="main">

    <?php
    $args = array(
        'post_type' => 'informacion',
        'posts_per_page' => '1',
    );
    ?>
    <?php $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <section class="banner">
                <div class="owl-general owl-general owl-carousel owl-theme owl-general--bottom-dots owl-banner">

                    <?php if (have_rows('banners_destock')) { ?>
                        <?php while (have_rows('banners_destock')) {
                            the_row(); ?>
                            <div class="item">
                                <?php $imagen = get_sub_field('img_banner'); ?>
                                <img class="img-fondo" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                <div class="container banner__contenido">
                                    <div class="grid-col">
                                        <div class="grid-s-12 grid-m-6 grid-l-6 wow fadeInLeft">
                                            <div class="banner__mensaje editar button button--b-radius button--totalwidth">
                                                <?php the_sub_field('texto_banner'); ?>
                                            </div>
                                        </div>
                                        <div class="grid-s-12 grid-m-6 grid-l-6 ">
                                            <div class="banner__bloque wow fadeInRight">
                                                <div class="banner__imagen">
                                                    <?php
                                                    $link_video = get_sub_field('link_video');

                                                    if (empty($link_video)) {
                                                    ?>
                                                        <?php $imagen = get_sub_field('img_video'); ?>
                                                        <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                                    <?php } else { ?>
                                                        <a data-fancybox href="<?php echo $link_video ?>">
                                                            <?php $imagen = get_sub_field('img_video'); ?>
                                                            <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                                            <i class="ri-play-fill"></i>
                                                        </a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                    <?php } ?>
                </div>
            </section>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>




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


    <section class="section-solucion" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2022/06/fondo-soluciones.png');">
        <div class="capa-section"></div>
        <div class="container">
            <div class="grid-col">
                <div class="grid-s-12 grid-m-5 grid-l-5">
                    <div class="trabajador-ref wow fadeInLeft">
                        <?php $imagen = get_field('img_solucion'); ?>
                        <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                    </div>
                </div>
                <div class="grid-s-12 grid-m-12 grid-l-7">
                    <div class="soluciones wow fadeInRight">
                        <div class="titulo-general titulo-general--white">
                            <h2>Ofrecemos una solución logistiva integral</h2>
                        </div>
                        <div class="soluciones__lista">
                            <div class="soluciones__lista__items">
                                <ul class="lista-items">
                                    <?php if (have_rows('lista_soluciones')) { ?>
                                        <?php while (have_rows('lista_soluciones')) {
                                            the_row(); ?>
                                            <li class="">
                                                <?php $imagen = get_sub_field('icon_solucion'); ?>
                                                <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                                <p><?php the_sub_field('solucion'); ?></p>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="soluciones__resaltar">

                <section class="contenedor">
                    <b><span class="">S/.</span> <span class="counter"><?php the_field('valor_mercado'); ?></span> </b>
                    <p>Valor de mercadería bajo nuestra custodia</p>
            </div>

        </div>
    </section>

    <section class="section-ubicanos">
        <div class="container">

            <div class="admin-panel">

                <div class="grid-col">
                    <div class="grid-s-12 grid-m-5 grid-l-4">
                        <div class="slidebar">
                            <div class="titulo-general titulo-general--white">
                                <h2>Nos ubicamos estratégicamente a nivel nacional</h2>
                            </div>
                            <ul>
                                <?php if (have_rows('tab_ubicacion')) {
                                    $i = 1;
                                ?>
                                    <?php while (have_rows('tab_ubicacion')) {
                                        the_row();

                                        $item_tab = get_sub_field('item');
                                    ?>
                                        <li>
                                            <a href="" name="tab<?php echo $i ?>">
                                                <i class="ri-temp-cold-line"></i>
                                                <span><?php echo $item_tab ?></span>
                                            </a>
                                        </li>

                                    <?php $i++;
                                    } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="grid-s-12 grid-m-7 grid-l-8">
                        <div class="tab-content wow fadeInUp">

                            <?php if (have_rows('tab_ubicacion')) {
                                $i = 1;
                            ?>
                                <?php while (have_rows('tab_ubicacion')) {
                                    the_row();

                                    $item_mapa = get_sub_field('item_img');
                                ?>
                                    <div id="tab<?php echo $i ?>">
                                        <img src="<?php echo $item_mapa ['url']; ?>" alt="<?php echo $item_mapa ['title']; ?>" title="<?php echo $item_mapa ['title']; ?>">
                                    </div>
                                <?php $i++;
                                } ?>
                            <?php } ?>

                        </div>
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

            <section class="section-sectores">
                <div class="sectores-box">
                    <div class="titulo-general ">
                        <h2><?php the_field('titulo_sectores'); ?></h2>
                    </div>

                    <div class="container wow fadeInUp">
                        <div class="owl-sectores owl-carousel owl-theme owl-general">
                            <?php if (have_rows('sectores')) { ?>
                                <?php while (have_rows('sectores')) {
                                    the_row(); ?>
                                    <div class="item">
                                        <article class="card card--borde">
                                            <?php $imagen = get_sub_field('img_sector'); ?>
                                            <img class="card__image" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                            <p><?php the_sub_field('tipo_sector'); ?></p>
                                        </article>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>

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

    <section class="section-infodepsa">
        <div class="container">
            <div class="grid-col">
                <div class="grid-s-12 grid-m-6 grid-l-6">
                    <div class="infodepsa wow fadeInLeft">
                        <div class="infodepsa__logo">
                            <?php $imagen = get_field('logo_infodepsa'); ?>
                            <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                        </div>
                        <div class="infodepsa__content editar button button--b-radius button--totalwidth">
                            <?php the_field('informacion_infodepsa'); ?>
                        </div>
                    </div>
                </div>
                <div class="grid-s-12 grid-m-6 grid-l-6">
                    <div class="img-detalle wow fadeInRight">
                        <?php $imagen = get_field('img_infodepsa_referencia'); ?>
                        <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--h1>Contenido Index</h1>

    <div class="taxo">
        <h2>Taxonomias</h2>
        <?php if ($showcategory) : ?>
            <div class="post_category">
                <ul>
                    <?php foreach ($showcategory as $cat) : ?>
                        <li><?php echo esc_html($cat->name); ?></li>
                        <li><?php echo esc_html($cat->term_id); ?></li>
                        <?php $args = array(
                            'post_type' => 'almacen',
                            'cat' => $cat->term_id,
                            'category_name' => $cat->slug,
                            'posts_per_page' => '-1',
                            'post_status' => 'publish'
                        ); ?>
                        <?php $the_query = new WP_Query($args); ?>
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                <li>
                                    <p><?php the_title(); ?></p>
                                    <?php $imagen = get_field('img_almacen'); ?>
                                    <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                </li>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif ?>
    </div>

    <div class="post">
        <h2>Post</h2>
        <?php if ($showpost) : ?>

            <ul>
                <?php foreach ($showpost as $item) :


                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($item); ?>
                    <li>
                        <?php $id_post = $item->ID; ?>
                        <p><?php echo $id_post; ?></p>
                        <?php $cf_description = get_post_meta($id_post, 'texto_description', true);

                        if ($cf_description) {
                            echo "<p>" . $cf_description . "</p>";
                        }

                        ?>

                        <?php $cf_image = get_post_meta($id_post);
                        if ($cf_image) { ?>
                            <p><?php echo $cf_image['texto_description'][0] ?></p>
                        <?php } ?>

                        <?php $url_img = get_field('img_almacen', $id_post);
                        if ($url_img) { ?>
                            <img src="<?php echo $url_img['url']; ?>" alt="" title="">
                        <?php } ?>

                        <p><?php echo $item->post_title; ?></p>
                        <p><?php echo $item->post_excerpt ?></p>
                        <a href="<?php echo $item->guid; ?>" target="_blanck"> Detalle de almacén</a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
        <?php endif ?>
    </div-->
</div>

<?php get_footer(); ?>