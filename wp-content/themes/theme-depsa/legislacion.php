<?php

/**
 * Template Name: Plantilla Legislacion
 */
get_header(); ?>

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

<section class="section-info-legislacion">
    <div class="container">
        <div class="grid-col">
            <div class="grid-12 wow fadeInUp">
                <div class="titulo-general  titulo-general--normal editar">
                    <?php the_field('descripcion_legislacion'); ?>
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