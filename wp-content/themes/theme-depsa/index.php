<?php

/**
 * Template Name: Plantilla Index
 */

$showpost = get_field("showpost");

$showcategory = get_field("taxonomia");

get_header(); ?>

<div class="main">
    <h1>Contenido Index</h1>

    <div class="taxo">
        <h2>Taxonomias</h2>
        <?php if ($showcategory) : ?>
            <!--pre><!?php echo print_r($showcategory) ?></pre-->
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
            <!--pre><!?php echo print_r($showpost) ?></pre-->

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
    </div>
</div>

<?php get_footer(); ?>