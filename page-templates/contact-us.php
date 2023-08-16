<?php
/*
 * Template Name: Contact Us Page
 * The contact us page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="contact-us-page">
    <div class="container">
        <section class="part-getStartedForm">
            <div class="row gy-5">
                <div class="col-12">
                    <h3 class="highlight-primary text-center fs-48 fw-800 text-capitalize">Get <span>Started Today</span></h3>
                    <p class="text-center text-grey py-2">Talk to us at Crystal Hot Water today to <strong class="text-dark">get the hot water system you deserve!</strong></p>
                    <div class="mainForm pt-4">
                        <?= do_shortcode('[contact-form-7 id="1e9c42f" title="Contact Us Form"]') ?>
                    </div>
                </div>
                <?php if (have_rows('form_cta', 'options')) : ?>
                    <div class="col-12">
                        <div class="row g-3">
                            <?php
                            $index = 1;
                            while (have_rows('form_cta', 'options')) : the_row();
                                $image = get_sub_field('image');
                                $title = get_sub_field('title');
                            ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-cta">
                                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                        <div class="caption">
                                            <p class="highlight-primary"><?= $title ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                if ($index == 3) break;
                                $index++;
                            endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </div>
    <?= get_template_part('parts/section', 'brands') ?>
</main>

<?php get_footer(); ?>