<?php
/**
 * Template Name: Plantilla Page
 */
get_header();
?>
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

<section class="section-info-linea">
    <div class="container">
        <div class="grid-col">
            <!--div class="grid-s-12 grid-m-6 grid-l-6">
                <div class="img-detalle wow fadeInLeft">
                    <img src="public/img/img-linea.png" alt="">
                </div>
            </div-->
            <div class="grid-s-12 grid-m-6 grid-l-12">
                <div class="editar button button--b-radius button--totalwidth wow fadeInRight">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>