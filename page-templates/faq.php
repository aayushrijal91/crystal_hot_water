<?php
/*
 * Template Name: FAQ Page
 * The faq page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>


<main class="faq-page">
    <?php
    get_template_part('parts/section', 'faq');
    get_template_part('parts/section', 'deservingHotWater');
    get_template_part('parts/section', 'brands');
    ?>
</main>

<?php get_footer(); ?>