<?php
/*
 * Template Name: Inner Service Page
 * The inner service page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="inner-service-page">
    <?php
    $introduction = get_field('introduction');
    if (isset($introduction['title'])) : ?>
        <section class="introduction py-7">
            <div class="container">
                <div class="row gy-5 gx-xl-5 align-items-center">
                    <div class="col-6">
                        <div class="bg-grey overflow-hidden h-100 rounded-11">
                            <?php if (isset($introduction['image']['url'])) : ?>
                                <img class="object-fit-cover h-100" src="<?= $introduction['image']['url'] ?>" alt="<?= $introduction['image']['alt'] ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="fs-60 highlight-primary text-capitalize fw-800 lh-1">
                            <?= $introduction['title'] ?>
                        </h2>
                        <?php if (isset($introduction['description'])) : ?>
                            <article class="fw-500 pt-4 text-grey lh-1_67 description">
                                <?= $introduction['description'] ?>
                            </article>
                        <?php endif; ?>
                        <div class="row g-2">
                            <?php if (isset($introduction['button']['url'])) : ?>
                                <div class="col-5">
                                    <button class="w-100 bg-transparent">
                                        <a href="<?= $introduction['button']['url'] ?>" target="<?= $introduction['button']['target'] ?>" class="btn btn-primary fw-700 d-flex w-100 text-white"><?= $introduction['button']['title'] ?></a>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <div class="col-5">
                                <button class="w-100 bg-transparent">
                                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-secondary fw-700 d-flex w-100 text-white"><?= get_field('phone_number', 'options') ?></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="steps bg-secondary">
        <div class="container">
            <div class="row g-3">
                <div class="col-3">
                    <article class="step-box">
                        <p class="number">1</p>
                        <p>Call Us, Speak <strong>To An Expert</strong></p>
                    </article>
                </div>
                <div class="col-3">
                    <article class="step-box">
                        <p class="number">2</p>
                        <p><strong>Consultation</strong> or onsite</p>
                    </article>
                </div>
                <div class="col-3">
                    <article class="step-box">
                        <p class="number">3</p>
                        <p>Deliver A <strong>Free Quote</strong></p>
                    </article>
                </div>
                <div class="col-3">
                    <article class="step-box">
                        <p class="number">4</p>
                        <p><strong>Complete Work</strong> And Payment</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <?php $section_2 = get_field('section_2');
    if (isset($section_2['title'])) : ?>
        <section class="section_2 py-8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h2 class="fs-60 highlight-primary text-capitalize fw-800 lh-1">
                            <?= $section_2['title'] ?>
                        </h2>
                        <?php if (isset($section_2['description'])) : ?>
                            <article class="fw-500 pt-4 text-grey lh-1_67 description">
                                <?= $section_2['description'] ?>
                            </article>
                        <?php endif; ?>
                        <div class="row g-2">
                            <?php if (isset($section_2['button']['url'])) : ?>
                                <div class="col-5">
                                    <button class="w-100 bg-transparent">
                                        <a href="<?= $section_2['button']['url'] ?>" target="<?= $section_2['button']['target'] ?>" class="btn btn-primary fw-700 d-flex w-100 text-white"><?= $section_2['button']['title'] ?></a>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <div class="col-5">
                                <button class="w-100 bg-transparent">
                                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-secondary fw-700 d-flex w-100 text-white"><?= get_field('phone_number', 'options') ?></a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <?php get_template_part('parts/section', 'globalCta'); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php $section_3 = get_field('section_3');
    if (isset($section_3['title'])) : ?>
        <section class="section-3 py-8 rounded-7 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <h2 class="fs-60 highlight-primary text-capitalize fw-800 lh-1">
                            <?= $section_3['title'] ?>
                        </h2>
                        <?php if (isset($section_3['description'])) : ?>
                            <article class="py-4 lh-1_67 description">
                                <?= $section_3['description'] ?>
                            </article>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php get_template_part('parts/section', 'brands'); ?>
    <?php get_template_part('parts/section', 'faq'); ?>
</main>

<?php get_footer(); ?>