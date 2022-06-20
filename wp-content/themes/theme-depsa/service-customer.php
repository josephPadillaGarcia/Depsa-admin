<?php

/**
 * Template Name: Plantilla Servicio al cliente
 */
get_header();?>

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


<?php
    $args = array(
        'post_type' => 'informacion',
        'posts_per_page' => '1',
    );
    ?>
    <?php $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
<section class="section-contacto">
    <div class="container">
        <div class="grid-col">
            <div class="grid-12">
                <div class="item-list wow fadeInUp">

                    <div class="item-list--figura item-list--figura--radius item-list--m-none">
                        <i class="ri-phone-fill"></i>
                        <div class="item-info">
                            <b>Contáctanos</b>
                            <?php if (have_rows('telefono')) { ?>
                                    <?php while (have_rows('telefono')) {
                                        the_row(); ?>
                            <li>
                                <p><?php the_sub_field('item_telefono'); ?></p>
                            </li>
                            <?php } ?>
                                <?php } ?>
                        </div>
                    </div>
                    <div class="item-list--figura item-list--figura--radius item-list--m-none">
                        <i class="ri-mail-fill"></i>
                        <div class="item-info">
                            <b>Correo</b>
                            <p>servicio@depsa.com.pe</p>
                            <p>quejas@depsa.com.pe</p>
                        </div>
                    </div>
                    <div class="item-list--figura item-list--figura--radius item-list--m-none">
                        <i class="ri-phone-fill"></i>
                        <div class="item-info">
                            <b>Anexo</b>
                            <p>6012</p>
                            <p>6011</p>
                            <p>6011</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

<section class="section-acordeon">
    <div class="container">
        <div class="grid-col">
            <div class="grid-12">
                <div class="accordion wow fadeInUp">

                <?php if (have_rows('lista_informacion')) { ?>
            <?php while (have_rows('lista_informacion')) {
                the_row(); ?>
                    <div class="accordion__item">
                        <h3 class="accordion__title js-title"><span class="text-acordeon"><?php the_sub_field('titulo'); ?></span><i class="icono-acordeon ri-arrow-down-s-line"></i></h3>
                        <div class="accordion__copy accordion__copy--open js-copy">
                            <p class=""><?php the_sub_field('informacion'); ?></p>
                        </div>
                    </div>
            <?php } ?>
        <?php } ?>

                    <!--div class="accordion__item">
                        <h3 class="accordion__title js-title"><span class="text-acordeon">Consideraciones</span><i class="icono-acordeon ri-arrow-down-s-line"></i></h3>
                        <div class="accordion__copy  js-copy">
                            <p class="">By not having the imagination to imagine what the content "might" be, a design consideration is
                                lost. Meaning becomes obfuscated because "it's just text", understandability gets compromised because
                                nobody realized that this</p>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <h3 class="accordion__title js-title"><span class="text-acordeon">Estadísticas de reclamos</span><i class="icono-acordeon ri-arrow-down-s-line"></i></h3>
                        <div class="accordion__copy  js-copy">
                            <p class="">By not having the imagination to imagine what the content "might" be, a design consideration is
                                lost. Meaning becomes obfuscated because "it's just text", understandability gets compromised because
                                nobody realized that this</p>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-informacion">
    <div class="container">
        <div class="grid-col">
            <div class="grid-12 wow fadeInUp">
                <div class="titulo-general  titulo-general--normal">
                    <h2>Información sobre servicios</h2>
                </div>

                <?php if (have_rows('lista_enlaces')) { ?>
                    <?php while (have_rows('lista_enlaces')) {
                        the_row(); ?>
                        <div class="list-info-servis">
                            <div class="list-info-icon">
                                <div class="icon-img">
                                    <?php $imagen = get_sub_field('icon_enlace'); ?>
                                    <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                </div>
                                <p><?php the_sub_field('nombre_enlace'); ?></p>
                            </div>
                            <div class="list-info-action button button--b-radius button--totalwidth button--altonormal">
                                <a href="<?php the_sub_field('url_archivo'); ?>" target="_blanck" class="">
                                    <span class="button__body">Descargar</span>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>