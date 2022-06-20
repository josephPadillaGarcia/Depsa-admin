<?php
/**
* Template Name: Pie de página
*/
?>



<footer class="footer" style="background-image: url('<?php echo get_template_directory_uri() ?>/public/img/fondo-footer.png');">
    <div class="footer__content">


    
        <div class="container">
            <div class="footer__body">
                <div class="grid-col">

                <?php
    $args = array(
        'post_type' => 'informacion',
        'posts_per_page' => '1',
    );
    ?>
    <?php $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="grid-s-12 grid-m-6 grid-l-3">
                        <b class="titulo-footer">Contáctanos</b>
                        <ul class="lista-item lista-item--enlaces">
                        <?php if (have_rows('correos')) { ?>
                                    <?php while (have_rows('correos')) {
                                        the_row(); ?>
                            <li>
                                <i class="ri-mail-fill"></i>
                                <p><?php the_sub_field('item_correo'); ?></p>
                            </li>
                                    <?php } ?>
                                <?php } ?>

                                <?php if (have_rows('direccion')) { ?>
                                    <?php while (have_rows('direccion')) {
                                        the_row(); ?>
                            <li>
                                <i class="ri-map-pin-2-fill"></i>
                                <p><?php the_sub_field('item_direccion'); ?></p>
                            </li>
                            <?php } ?>
                                <?php } ?>

                                <?php if (have_rows('telefono')) { ?>
                                    <?php while (have_rows('telefono')) {
                                        the_row(); ?>
                            <li>
                                <i class="ri-phone-fill"></i>
                                <p><?php the_sub_field('item_telefono'); ?></p>
                            </li>
                            <?php } ?>
                                <?php } ?>
                        </ul>
                    </div>
                    <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>


    
                    <div class="grid-s-12 grid-m-6 grid-l-3">
                        <div class="box-total-right">
                            <b class="titulo-footer">Servicios</b>
                            <ul class="lista-item lista-item--normal">
                            <?php
                    $args = array(
                        'post_type' => 'servicios',
                        'posts_per_page' => '0',
                    );
                    ?>
                    <?php $the_query = new WP_Query($args); ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </li>
                    <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
                            </ul>
                        </div>
                    </div>



                    <?php
    $args = array(
        'post_type' => 'informacion',
        'posts_per_page' => '1',
    );
    ?>
    <?php $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="grid-s-12 grid-m-6 grid-l-3">
                        <ul class="lista-item lista-item--enlaces">

                            <?php if (have_rows('lista_enlaces')) { ?>
                                    <?php while (have_rows('lista_enlaces')) {
                                        the_row(); ?>

                            <li>
                                <a href="<?php the_sub_field('link_enlace'); ?>">
                                <?php $imagen = get_sub_field('icon_enlaces'); ?>
                            <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                    <p><?php the_sub_field('enlace'); ?></p>
                                </a>
                            </li>
                            
                            <?php } ?>
                                <?php } ?>
                        </ul>
                    </div>
                    <div class="grid-s-12 grid-m-6 grid-l-3">
                        <div class="box-right">
                            <p>Somos parte de:</p>
                            <?php if (have_rows('somos_parte_de')) { ?>
                                    <?php while (have_rows('somos_parte_de')) {
                                        the_row(); ?>
                            <?php $imagen = get_sub_field('item_logo'); ?>
                            <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                            <?php } ?>
                                <?php } ?>
                        </div>
                    </div>

                    <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
                </div>
            </div>

            

            <div class="footer__pie">
                <div class="pie">
                        <div class="copyright">
                            © 2021 SLA. Todos los derechos reservados.
                        </div>
                        <div class="developer">
                            Desarrollado por <a href="https://playgroup.pe/" target="_blank">
                                <div class="img-dev"><img src="<?php echo get_template_directory_uri() ?>/public/img/logo-play-footer.png"><img class="litt" src="<?php echo get_template_directory_uri() ?>/public/img/lid.png"></div> PLAY Group
                            </a>
                        </div>
                    </div>
            </div>
        </div>


    </div>
</footer>



<script src="<?php echo get_template_directory_uri() ?>/public/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/public/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/public/js/general.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/public/js/wow.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/public/js/jquery.counterup.min.js"></script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/fancy.min.css">
<script src="<?php echo get_template_directory_uri() ?>/public/js/jquery.fancybox.min.js"></script>

<script type="text/javascript">
    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true // default
    })
    wow.init();
</script>

</body>

</html>
</body>
</html>