<?php
/*
 * Template Name: Membership Page
 * The membership page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="membership-page py-8">
    <div class="container">
        <?php $priority_access = get_field('priority_access');
        if (isset($priority_access['title'])) : ?>
            <section class="section_1 position-relative">
                <div class="row">
                    <div class="col-6">
                        <h2 class="text-white fs-60 lh-1 fw-800 text-capitalize"><?= $priority_access['title'] ?></h2>
                        <article class="text-white lh-1_67 description pt-4">
                            <?= $priority_access['description'] ?>
                        </article>
                    </div>
                </div>
                <img class="position-absolute end-0 bottom-0" src="<?= get_site_url() ?>/wp-content/uploads/2023/08/exclusive-membership.png" alt="<?= bloginfo('name') ?>">
            </section>
        <?php endif; ?>

        <?php
        $about_membership = get_field('about_membership');
        if (isset($about_membership['title'])) : ?>
            <section class="about-membership py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <div class="bg-grey overflow-hidden h-100 rounded-11">
                                <?php if (isset($about_membership['image']['url'])) : ?>
                                    <img class="object-fit-cover h-100" src="<?= $about_membership['image']['url'] ?>" alt="<?= $about_membership['image']['alt'] ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-5">
                            <h2 class="fs-60 highlight-primary text-capitalize fw-800 lh-1">
                                <?= $about_membership['title'] ?>
                            </h2>
                            <?php if (isset($about_membership['description'])) : ?>
                                <article class="fw-500 pt-4 text-grey lh-1_67 description">
                                    <?= $about_membership['description'] ?>
                                </article>
                            <?php endif; ?>
                            <div class="row g-2">
                                <?php if (isset($about_membership['button']['url'])) : ?>
                                    <div class="col-5">
                                        <button class="w-100 bg-transparent">
                                            <a href="<?= $about_membership['button']['url'] ?>" target="<?= $about_membership['button']['target'] ?>" class="btn btn-primary fw-700 d-flex w-100 text-white"><?= $about_membership['button']['title'] ?></a>
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

        <div class="container">
            <section class="signupForm">
                <div class="row gy-5">
                    <div class="col-4">
                        <h3 class="highlight-primary text-center fs-48 fw-800 text-capitalize">Sign Up <span>Today</span></h3>
                        <p class="text-center text-grey py-2">Talk to us at Crystal Hot Water today to <strong class="text-dark">get the hot water system you deserve!</strong></p>
                        <div class="mainForm pt-4">
                            <?= do_shortcode('[contact-form-7 id="3104449" title="Membership Signup Form"]') ?>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="form-cta">
                                    <img src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/same-day-quote.jpg" alt="">
                                    <div class="caption">
                                        <p class="highlight-primary">Same <span>Day Quote</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-cta">
                                    <img src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/24-7.jpg" alt="">
                                    <div class="caption">
                                        <p class="highlight-primary">24/7 <span>Emergency</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-cta">
                                    <img src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/12-years-warranty.jpg" alt="">
                                    <div class="caption">
                                        <p class="highlight-primary">12-Year <span>Warranty</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-cta">
                                    <img src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/licensed-professional.jpg" alt="">
                                    <div class="caption">
                                        <p class="highlight-primary">Licensed <span>Professional</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>