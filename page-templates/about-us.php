<?php
/*
 * Template Name: About Page
 * The about page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="about-us-page">
    <?php
    get_template_part('parts/section', 'deservingHotWater');
    get_template_part('parts/section', 'about');
    get_template_part('parts/section', 'brands');
    ?>
</main>

<?php get_footer(); ?>