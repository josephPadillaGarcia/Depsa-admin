<?php
/**
* Template Name: Plantilla Contacto
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

<section class="section-info-linea section-form-contacto">
    <div class="container">
        <div class="grid-col">
            <div class="grid-s-12 grid-m-12 grid-l-6 wow fadeInLeft">
                <div class="titulo-general  titulo-general--normal editar">
                    <?php the_field('informacion_form'); ?>
                </div>
                <div class="form">
                    <?php echo do_shortcode( '[contact-form-7 id="307" title="Contact form 1"]' ); ?>
                </div>
            </div>
            <div class="grid-s-12 grid-m-12 grid-l-6">
                <div class="img-detalle wow fadeInRight">
                    <?php $imagen = get_field('img_form'); ?>
                    <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                </div>
            </div>
        </div>
    </div>
</section>
</div>    

<?php get_footer(); ?>