<?php
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>

        <main class="shop-page">
            <section class="shop py-xl-8 py-lg-7 py-5">
                <div class="container">
                    <?php the_content(); ?>
                </div>
            </section>
        </main>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
<?php get_footer(); ?>