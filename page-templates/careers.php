<?php
/*
 * Template Name: Careers Page
 * The careers page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="careers-page">
    <?php
    $introduction = get_field('introduction');
    if (!empty($introduction['title'])) : ?>
        <section class="introduction">
            <div class="container">
                <div class="row gy-5 gx-xl-5 align-items-center">
                    <div class="col-12 col-lg-6 col-xl-7">
                        <div class="bg-grey overflow-hidden h-100 rounded-11">
                            <?php if (!empty($introduction['image']['url'])) : ?>
                                <img class="object-fit-cover h-100" src="<?= $introduction['image']['url'] ?>" alt="<?= $introduction['image']['alt'] ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                        <h2 class="fs-60 highlight-primary text-capitalize fw-800 lh-1">
                            <?= $introduction['title'] ?>
                        </h2>
                        <?php if (!empty($introduction['description'])) : ?>
                            <article class="fw-500 pt-4 text-grey lh-1_67 description">
                                <?= $introduction['description'] ?>
                            </article>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <div class="container">
        <article class="mt-5 py-5 px-3 p-xl-7 rounded-10 bg-primary text-white">
            <h2 class="text-capitalize fs-55 lh-1_5 fw-500 text-center"><strong>Ready to join the</strong> crystal hot water team?</h2>
            <div class="form mt-5 mt-md-8">
                <?= do_shortcode('[contact-form-7 id="09acbf3" title="Careers Form"]') ?>
            </div>
        </article>
    </div>
</main>

<?php get_footer(); ?>