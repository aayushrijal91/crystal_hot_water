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
    <section class="getStartedFormWrapper mb-8">
        <?php get_template_part('parts/section', 'getStartedForm'); ?>
    </section>

    <?php
    $section_1 = get_field('section_1');
    if (!empty($section_1['title'])) : ?>
        <section class="section_1">
            <div class="container">
                <div class="row">
                    <div class="col-5">
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
            <div class="row align-items-center top-row">
                <div class="col-6">
                    <h2 class="fs-60 text-white text-capitalize fw-800 lh-1">
                        Our Services are insured with a No-risk guarantee
                    </h2>
                    <p class="py-4 text-white">
                        Talk to us at Crystal Hot Water today to <strong>get the hot water<br /> system you deserve!</strong>
                    </p>
                    <div class="row g-2">
                        <div class="col-5">
                            <button class="w-100 bg-transparent">
                                <a href="#" class="btn btn-white fw-700 d-flex w-100 text-primary">Contact Our Team</a>
                            </button>
                        </div>
                        <div class="col-5">
                            <button class="w-100 bg-transparent">
                                <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-white fw-700 d-flex w-100 text-primary"><?= get_field('phone_number', 'options') ?></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <img src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/no-risk-guarantee.png" alt="">
                </div>
            </div>

            <div class="row gx-2 gy-3 homepage-services">
                <div class="col-4">
                    <article class="service-box bg-primary-dark text-white rounded-8 d-flex flex-column gap-5 justify-content-between h-100">
                        <div>
                            <h4 class="fs-40 fw-800 lh-1">Repair</h4>
                            <p>
                                Every machine fails eventually, and that includes hot water heaters. With how crucial hot water is to our daily lives, having your hot water heater go down is undoubtedly a huge inconvenience. You need to have it repaired as soon as possible.
                            </p>
                            <p>
                                Crystal Hot Water’s repair team is available 24/7 to address any and all issues you might be experiencing with your hot water heater. We work swiftly with precise solutions no matter the time of day or night, restoring the flow of hot water on your property fast.
                            </p>
                        </div>
                        <div class="row align-items-center gx-3">
                            <div class="col">
                                <button class="w-100 bg-transparent">
                                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-white fw-700 d-flex w-100 text-primary"><?= get_field('phone_number', 'options') ?></a>
                                </button>
                            </div>
                            <div class="col-auto">
                                <button class="w-100 bg-transparent">
                                    <a href="tel:<?= get_site_url() ?>/service" class="btn btn-transparent fw-700 d-flex w-100 text-white px-1 gap-2">See Our Services <svg xmlns="http://www.w3.org/2000/svg" width="31" height="16" viewBox="0 0 31 16" fill="none">
                                            <path d="M30.0553 8.95882C30.4458 8.56829 30.4458 7.93513 30.0553 7.5446L23.6913 1.18064C23.3008 0.790119 22.6676 0.790119 22.2771 1.18064C21.8866 1.57117 21.8866 2.20433 22.2771 2.59486L27.934 8.25171L22.2771 13.9086C21.8866 14.2991 21.8866 14.9323 22.2771 15.3228C22.6676 15.7133 23.3008 15.7133 23.6913 15.3228L30.0553 8.95882ZM0.450684 9.25171L29.3482 9.25171L29.3482 7.25171L0.450684 7.25171L0.450684 9.25171Z" fill="white" />
                                        </svg></a>
                                </button>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-4">
                    <article class="service-box bg-primary-dark text-white rounded-8 d-flex flex-column gap-5 justify-content-between h-100">
                        <div>
                            <h4 class="fs-40 fw-800 lh-1">Sales</h4>
                            <p>
                                Are you looking for a new hot water heater for a new home, or replacing an old one during a renovation? A good hot water experience starts from buying the right heater: a high quality product from a reputable brand, and the right specifications for your needs.
                            </p>
                            <p>
                                Crystal Hot Water is partnered with big hot water heater brands to provide a large selection of effective and affordable hot water heaters. If you’re not sure which product is right for you, our friendly and dedicated team is always ready to offer advice to help you reach the right decision.
                            </p>
                        </div>
                        <div class="row align-items-center gx-3">
                            <div class="col">
                                <button class="w-100 bg-transparent">
                                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-white fw-700 d-flex w-100 text-primary"><?= get_field('phone_number', 'options') ?></a>
                                </button>
                            </div>
                            <div class="col-auto">
                                <button class="w-100 bg-transparent">
                                    <a href="tel:<?= get_site_url() ?>/service" class="btn btn-transparent fw-700 d-flex w-100 text-white px-1 gap-2">See Our Services <svg xmlns="http://www.w3.org/2000/svg" width="31" height="16" viewBox="0 0 31 16" fill="none">
                                            <path d="M30.0553 8.95882C30.4458 8.56829 30.4458 7.93513 30.0553 7.5446L23.6913 1.18064C23.3008 0.790119 22.6676 0.790119 22.2771 1.18064C21.8866 1.57117 21.8866 2.20433 22.2771 2.59486L27.934 8.25171L22.2771 13.9086C21.8866 14.2991 21.8866 14.9323 22.2771 15.3228C22.6676 15.7133 23.3008 15.7133 23.6913 15.3228L30.0553 8.95882ZM0.450684 9.25171L29.3482 9.25171L29.3482 7.25171L0.450684 7.25171L0.450684 9.25171Z" fill="white" />
                                        </svg></a>
                                </button>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-4">
                    <article class="service-box bg-primary-dark text-white rounded-8 d-flex flex-column gap-5 justify-content-between h-100">
                        <div>
                            <h4 class="fs-40 fw-800 lh-1">Servicing</h4>
                            <p>
                                Hot water heaters need periodic maintenance to stay operational for years to come. Periodic servicing not only extends the lifespan of any hot water heater, but also prevents you from having to spend big money on repairing or replacing it.
                            </p>
                            <p>
                                Crystal Hot Water has a team of dedicated plumbers who can come service your hot water heater regularly. We recommend having a technician look at your appliance at least once a year in order to maintain smooth operation.
                            </p>
                        </div>
                        <div class="row align-items-center gx-3">
                            <div class="col">
                                <button class="w-100 bg-transparent">
                                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-white fw-700 d-flex w-100 text-primary"><?= get_field('phone_number', 'options') ?></a>
                                </button>
                            </div>
                            <div class="col-auto">
                                <button class="w-100 bg-transparent">
                                    <a href="tel:<?= get_site_url() ?>/service" class="btn btn-transparent fw-700 d-flex w-100 text-white px-1 gap-2">See Our Services <svg xmlns="http://www.w3.org/2000/svg" width="31" height="16" viewBox="0 0 31 16" fill="none">
                                            <path d="M30.0553 8.95882C30.4458 8.56829 30.4458 7.93513 30.0553 7.5446L23.6913 1.18064C23.3008 0.790119 22.6676 0.790119 22.2771 1.18064C21.8866 1.57117 21.8866 2.20433 22.2771 2.59486L27.934 8.25171L22.2771 13.9086C21.8866 14.2991 21.8866 14.9323 22.2771 15.3228C22.6676 15.7133 23.3008 15.7133 23.6913 15.3228L30.0553 8.95882ZM0.450684 9.25171L29.3482 9.25171L29.3482 7.25171L0.450684 7.25171L0.450684 9.25171Z" fill="white" />
                                        </svg></a>
                                </button>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

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