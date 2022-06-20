<?php

/**
 * Template Name: Plantilla Single Servicios
 */

$showpost = get_field("show_post_almacenes");
$showsectiontemperatura = get_field("mostrar_section_temperatura");
get_header();
?>
<?php $imagen = get_field('page_banner'); ?>
<section class="banner-page" style="background-image: url('<?php echo $imagen['url']; ?>');">
    <div class="name-page">
        <div class="container">
            <h2 class="wow fadeInUp">
                <?php the_title(); ?>
            </h2>
        </div>
    </div>
</section>

<section class="section-info-linea section-single">
    <div class="container">
        <div class="grid-col">
            <div class="grid-s-12 grid-m-6 grid-l-6 wow fadeInLeft">
                <div class="editar button button--b-radius button--totalwidth">
                    <?php the_field('info_servicio'); ?>
                </div>
            </div>
            <div class="grid-s-12 grid-m-6 grid-l-6 wow fadeInRight">
                <div class="img-detalle">
                    <?php $imagen = get_field('img_servicio'); ?>
                    <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($showsectiontemperatura == "show") { ?>
    <section class="section-temperature showsection">
        <div class="container">
            <div class="grid-col">
                <div class="grid-12 wow fadeInUp">
                    <div class="titulo-general">
                        <h2>Temperatura controlada</h2>
                    </div>
                    <div class="item-list">

                        <?php if (have_rows('lista_temperatura')) { ?>
                            <?php while (have_rows('lista_temperatura')) {
                                the_row(); ?>
                                <div class="item-list--figura item-list--m-none">
                                    <?php $imagen = get_sub_field('icon_temperatura'); ?>
                                    <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['title']; ?>" title="<?php echo $imagen['title']; ?>">
                                    <div class="item-info editar">
                                        <?php the_sub_field('info_temperatura'); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>



<section class="section-almacenes">
    <div class="container wow fadeInUp">
        <div class="grid-col">
            <div class="grid-12 ">
                <div class="titulo-general">
                    <h2>Almacenes</h2>
                </div>
            </div>

            <?php if ($showpost) { ?>
                <?php foreach ($showpost as $item) :
                    setup_postdata($item); ?>
                    <div class="grid-s-12 grid-m-6 grid-l-4">
                        <?php $id_post = $item->ID; ?>
                        <a id="myBtn<?php echo $id_post ?>" href="#!">
                            <div class="card-almacen">
                                <div class="card-almacen__head">
                                    <h3><?php echo $item->post_title; ?></h3>
                                    <?php $cf_direccion = get_post_meta($id_post, 'direccion_almacen', true);

                                    if ($cf_direccion) { ?>
                                        <p><?php echo $cf_direccion ?></p>
                                    <?php } ?>
                                </div>

                                <div class="card-almacen__footer">
                                    <p>Detalles de almacen</p>
                                    <img src="public/img/icon-frio.png" alt="">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- The Modal -->
                    <div id="myModal<?php echo $id_post ?>" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <i id="close<?php echo $id_post ?>" class=" ri-close-line"></i>
                            <div class="modal__information button button--b-radius button--totalwidth">
                                <div class="modal__head">
                                    <h3><?php echo $item->post_title; ?></h3>
                                    <?php $cf_direccion = get_post_meta($id_post, 'direccion_almacen', true);

                                    if ($cf_direccion) { ?>
                                        <p><?php echo $cf_direccion ?></p>
                                    <?php } ?>
                                </div>
                                <div class="modal__list">
                                    <ul>
                                        <li class="modal-item">
                                            <img src="public/img/icon-capacidad-modal.png" alt="">
                                            <div class="modal-item-info">
                                                <b>15,922 m2</b>
                                                <p>capacidad total</p>
                                            </div>
                                        </li>
                                        <li class="modal-item">
                                            <img src="public/img/icon-capacidad-modal.png" alt="">
                                            <div class="modal-item-info">
                                                <b>15,922 m2</b>
                                                <p>capacidad total</p>
                                            </div>
                                        </li>
                                        <li class="modal-item">
                                            <img src="public/img/icon-capacidad-modal.png" alt="">
                                            <div class="modal-item-info">
                                                <b>15,922 m2</b>
                                                <p>capacidad total</p>
                                            </div>
                                        </li>
                                        <li class="modal-item">
                                            <img src="public/img/icon-capacidad-modal.png" alt="">
                                            <div class="modal-item-info">
                                                <b>15,922 m2</b>
                                                <p>capacidad total</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="">
                                    <span class="button__body">Contacta un asesor</span>
                                </a>
                            </div>
                            <div class="modal__mapa ">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.0056316389123!2d-77.05986558464909!3d-12.043132945113143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c92ab8886f97%3A0x8575b5cfceaff64d!2sDepsa!5e0!3m2!1ses-419!2spe!4v1653323771633!5m2!1ses-419!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                    </div>


                    <script type="text/javascript">
                        // Get the modal
                        var modal<?php echo $id_post ?> = document.getElementById("myModal<?php echo $id_post ?>");

                        // Get the button that opens the modal
                        var btn<?php echo $id_post ?> = document.getElementById("myBtn<?php echo $id_post ?>");

                        // Get the <span> element that closes the modal
                        var span<?php echo $id_post ?> = document.getElementById("close<?php echo $id_post ?>");

                        // When the user clicks the button, open the modal 
                        btn<?php echo $id_post ?>.onclick = function() {
                            modal<?php echo $id_post ?>.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span<?php echo $id_post ?>.onclick = function() {
                            modal<?php echo $id_post ?>.style.display = "none";
                        }
                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target == modal<?php echo $id_post ?>) {
                                modal<?php echo $id_post ?>.style.display = "none";
                            }
                        }
                    </script>




                <?php endforeach; ?>
            <?php } else { ?>
                <div class="grid-12">
                    <div class="editar text-center">
                        <h3>No se encontraron almacenes disponibles</h3>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>




<?php get_footer(); ?>