<?php
/*
 * Template Name: Thank You Page
 * The thank you page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>
<div class="container py-10 text-center text-grey">
    <?= get_the_content() ?>
</div>
<?php get_footer(); ?>