<?php 

//Template Name: Pagina full-width

get_header(); 
get_template_part('parts/page-header');
?>

<main id="page" class="page">
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>

    <section id="terms-1" class="wide-60 terms-section division">
            <div class="row">


                <!-- TERMS CONTENT -->
                <div class="col-lg-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="entry-content" itemprop="mainContentOfPage">
                       
                        <?php the_content(); ?>
                        
                    </div>

                    <?php endwhile; endif; ?>

                </div>
            </div>
    </section>
</main>
<?php get_footer(); ?>