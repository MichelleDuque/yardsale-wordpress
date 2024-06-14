<?php get_header()  ?>

<?php if(have_posts()) { ?>
    <?php while(have_posts()){ the_post(); ?>
        <?php the_content(); ?>
    <?php } ?>
 
<?php  } ?>


<!-- Creamos el array de los productos -->
<?php

        $args = array(
            "post_type" => array("producto"),
            "post_per_page" => -1
        );

        $productos = new WP_Query($args);

?>

<div class="productos__container">

                <!-- Revisamos si hay productos en el array y lo llamamos -->
                <?php if ($productos->have_posts()){ ?>

                <?php while ($productos->have_posts()) { $productos->the_post(); ?>

                <div class="productos__card">
                    <!-- Primero que tamaño que queremos tien post-thumbnail, medium, large, full como opciones -->
                    <?php  the_post_thumbnail("post-thumbnail") ?>
                    <div class="producto__caption">
                        <div class="productos__desc">
                            <!-- Link de nuestro producto para la página interna -->
                            <a class="producto__link" href="<?php the_permalink() ?>">
                                <!-- Llamamos el titulo del producto -->
                                <h4 class="productos__titulo"> <?php the_title(); ?> </h4>
                            </a>
                        </div>
                    </div>
                </div>
                 <?php } ?>
                <?php } ?>
            </div>




<?php get_footer() ?>