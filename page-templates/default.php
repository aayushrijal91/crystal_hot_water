<?php
/*
 * Template Name: Default Page
 * The default page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="default-page">
    <section class="py-xl-6 py-md-5 py-3">
        <div class="container description">
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>