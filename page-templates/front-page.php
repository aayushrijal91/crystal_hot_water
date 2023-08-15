<?php
/*
 * Template Name: Front Page
 * The front page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'homepageBanner');
?>

<main class="homepage">
    <section class="getStartedFormWrapper mb-md-8">
        <?php get_template_part('parts/section', 'getStartedForm'); ?>
    </section>

    <?php
    $section_1 = get_field('section_1');
    if (!empty($section_1['title'])) : ?>
        <section class="section_1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-7 col-xl-5">
                        <h2 class="fs-60 highlight-primary text-capitalize fw-800 lh-1">
                            <?= $section_1['title'] ?>
                        </h2>
                        <?php if (!empty($section_1['description'])) : ?>
                            <article class="fw-500 py-3 description"><?= $section_1['description'] ?></article>
                        <?php endif; ?>
                        <div class="row g-2">
                            <?php if (isset($section_1['button'])) : ?>
                                <div class="col-6">
                                    <button class="w-100 bg-transparent">
                                        <a href="<?= $section_1['button']['url'] ?>" target="<?= $section_1['button']['target'] ?>" class="btn btn-primary fw-700 d-flex w-100 text-white"><?= $section_1['button']['title'] ?></a>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <div class="col-6">
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

    <?php get_template_part('parts/section', 'about') ?>

    <div class="container">
        <section class="section_3 bg-primary rounded-11 position-relative">
            <?php
            $no_risk_guarantee = get_field('no_risk_guarantee', 'options');
            if (!empty($no_risk_guarantee['title'])) : ?>
                <div class="row align-items-center top-row">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <h2 class="fs-60 text-white text-capitalize fw-800 lh-1">
                            <?= get_field('no_risk_guarantee', 'options')['title'] ?>
                        </h2>
                        <?php if (!empty($no_risk_guarantee['description'])) : ?>
                            <article class="py-4 text-white">
                                <?= $no_risk_guarantee['description'] ?>
                            </article>
                        <?php endif; ?>
                        <div class="row g-2">
                            <?php if (isset($no_risk_guarantee['button'])) : ?>
                                <div class="col-6 col-md-5">
                                    <button class="w-100 bg-transparent">
                                        <a href="<?= $no_risk_guarantee['button']['url'] ?>" target="<?= $no_risk_guarantee['button']['target'] ?>" class="btn btn-white fw-700 d-flex w-100 text-primary"><?= $no_risk_guarantee['button']['title'] ?></a>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <div class="col-6 col-md-5">
                                <button class="w-100 bg-transparent">
                                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-white fw-700 d-flex w-100 text-primary"><?= get_field('phone_number', 'options') ?></a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($no_risk_guarantee['image']['url'])) : ?>
                        <div class="col-12 col-lg-6 order-1 order-lg-2">
                            <img src="<?= $no_risk_guarantee['image']['url'] ?>" alt="<?= $no_risk_guarantee['image']['alt'] ?>">
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if (have_rows('no_risk_guarantee', 'options')) :
                while (have_rows('no_risk_guarantee', 'options')) : the_row();
                    if (have_rows('services', 'options')) : ?>
                        <div class="row gx-2 gy-3 homepage-services justify-content-center">
                            <?php while (have_rows('services', 'options')) : the_row();
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                                $link = get_sub_field('link');
                            ?>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <article class="service-box bg-primary-dark text-white rounded-8 d-flex flex-column gap-5 justify-content-between h-100">
                                        <div>
                                            <h4 class="fs-40 fw-800 lh-1"><?= $title ?></h4>
                                            <?= $description ?>
                                        </div>
                                        <div class="row align-items-center gx-3">
                                            <div class="col">
                                                <button class="w-100 bg-transparent">
                                                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-white fw-700 d-flex w-100 text-primary"><?= get_field('phone_number', 'options') ?></a>
                                                </button>
                                            </div>
                                            <div class="col-auto">
                                                <button class="w-100 bg-transparent">
                                                    <a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>" class="btn btn-transparent fw-700 d-flex w-100 text-white px-1 gap-2">See Our Services <svg xmlns="http://www.w3.org/2000/svg" width="31" height="16" viewBox="0 0 31 16" fill="none">
                                                            <path d="M30.0553 8.95882C30.4458 8.56829 30.4458 7.93513 30.0553 7.5446L23.6913 1.18064C23.3008 0.790119 22.6676 0.790119 22.2771 1.18064C21.8866 1.57117 21.8866 2.20433 22.2771 2.59486L27.934 8.25171L22.2771 13.9086C21.8866 14.2991 21.8866 14.9323 22.2771 15.3228C22.6676 15.7133 23.3008 15.7133 23.6913 15.3228L30.0553 8.95882ZM0.450684 9.25171L29.3482 9.25171L29.3482 7.25171L0.450684 7.25171L0.450684 9.25171Z" fill="white" />
                                                        </svg></a>
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            <?php endwhile; ?>
                        </div>
            <?php endif;
                endwhile;
            endif;
            ?>

            <div class="w-100 d-flex justify-content-center">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 66 66" fill="none">
                    <circle cx="33.0844" cy="32.7058" r="32.5124" fill="#06AAD3" />
                    <path d="M39.2395 22.4685C36.2867 19.7841 36.3687 14.4153 36.7788 12.0664C29.5309 14.885 27.7935 20.9212 27.8308 23.5869C26.1307 23.7212 24.8854 21.5177 24.4753 20.3992C23.8601 31.0809 27.9427 31.3605 36.3314 37.2326C43.0424 41.9303 42.5205 48.2499 41.4206 50.8224C55.4578 38.0715 42.9306 25.8239 39.2395 22.4685Z" fill="white" />
                    <path d="M32.4726 38.7426C25.6273 35.4766 22.1637 29.2541 21.2876 26.551C20.7283 35.8346 25.2583 39.246 25.5379 39.4137C25.8175 39.5815 30.4034 41.7626 31.41 44.2792C32.4166 46.7958 30.3474 49.0328 25.5379 45.901C21.6902 43.3956 19.4607 36.8039 18.8269 33.8213C15.751 48.0262 25.6497 53.5628 33.1437 53.3391C40.6376 53.1154 41.0291 42.8252 32.4726 38.7426Z" fill="white" />
                </svg>
            </div>
        </section>
    </div>

    <?php get_template_part('parts/section', 'deservingHotWater'); ?>
    <?php get_template_part('parts/section', 'brands'); ?>
</main>

<?php get_footer(); ?>