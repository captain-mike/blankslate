<?php
get_header();
get_template_part('parts/404-header');
?>
<main id="page" class="page">
<section id="terms-1" class="wide-60 terms-section division post not-found">
    <div class="container">
        <div class="row">


            <!-- TERMS CONTENT -->
            <div class="col-lg-10 offset-lg-1">

                <div class="entry-content" itemprop="mainContentOfPage">
                    <p><?php esc_html_e('Nothing found for the requested page. Try a search instead?', 'pizza'); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </div>

            
        </div>
    </div>
</section>
</main>
<?php get_footer(); ?>