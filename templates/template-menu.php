<?php

//Template Name: Menu

get_header();
get_template_part('parts/page-header');

?>

<main id="page" class="page">
    <div class="container">
        <div class="row">

            <?php
                $query = new WP_Query([
                    'post_type' => 'pizza',
                    'posts_per_page' => -1,
                ]);


                if($query->have_posts()):
                    while($query->have_posts()):
                    $query->the_post();//se mi dimentico questo va in loop infinito
                    ?>
                    <div class="col-6">
                        <div class="row">
                            <div class="col">
                                <?php the_title(); ?>
                            </div>
                            <div class="col">
                                <?php  the_field('prezzo'); ?>€
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                endif;
            ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>