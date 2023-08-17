<?php
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');

if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <section class="py-xl-6 py-md-5 py-3">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </section>
<?php
    }
    wp_reset_postdata();
} ?>

<?php get_footer(); ?>