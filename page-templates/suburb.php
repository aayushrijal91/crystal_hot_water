<?php
/*
 * Template Name: Suburb Page
 * The suburb page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
$suburb = get_field('suburb', 'options');
$suburbArray = array('{suburb}', '{Suburb}', '{SUBURB}', '(suburb)', '(SUBURB)');
?>

<main class="suburb-page pt-6 pt-md-9">
    <div class="container">
        <div class="row gx-xl-5 gx-xxl-9 gy-5">
            <?php
            if ($suburb['section_1']) : ?>
                <div class="<?= $suburb['section_2'] ? 'col-12 col-md-6' : 'col-12' ?>">
                    <h2 class="fs-60 lh-1 fw-800 highlight-primary text-capitalize"><?= $suburb['section_1_title'] ?></h2>
                    <?php if (!empty($suburb['section_1_description'])) :
                        $section_1_description = str_replace($suburbArray, get_the_title(), $suburb['section_1_description']);
                    ?>
                        <article class="description pt-4 pt-md-5 lh-1_67 fw-500">
                            <?= $section_1_description ?>
                        </article>
                    <?php endif; ?>
                </div>
            <?php endif;
            if ($suburb['section_2']) : ?>
                <div class="<?= $suburb['section_1'] ? 'col-12 col-md-6' : 'col-12' ?>">
                    <h2 class="fs-60 lh-1 fw-800 highlight-primary text-capitalize"><?= $suburb['section_2_title'] ?></h2>
                    <?php if (!empty($suburb['section_2_description'])) :
                        $section_2_description = str_replace($suburbArray, get_the_title(), $suburb['section_2_description']);
                    ?>
                        <article class="description pt-4 pt-md-5 lh-1_67 fw-500">
                            <?= $section_2_description ?>
                        </article>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="py-5 py-lg-6 px-3 px-xl-5 rounded-20 bg-light my-5 my-md-6">
            <div class="row align-items-center justify-content-md-between gy-md-4 text-center text-md-start" id="flexible-payment-options">
                <div class="col-12 col-lg-auto">
                    <p class="highlight-primary fs-30 fw-600 text-dark text-capitalize">Flexible Payment <span class="fw-800">Options</span></p>
                </div>
                <div class="col col-lg-7 d-none d-md-block">
                    <div class="row align-items-center justify-content-around">
                        <div class="col-auto">
                            <img src="<?= get_site_url() ?>/wp-content/uploads/2023/08/eftpos.png" alt="<?= bloginfo('name') ?>">
                        </div>
                        <div class="col-auto">
                            <p class="text-dark fs-20"><strong>Direct</strong> Deposit</p>
                        </div>
                        <div class="col-auto">
                            <p class="text-dark fs-20 fw-600">Credit Card</p>
                        </div>
                        <div class="col-auto">
                            <p class="text-dark fs-20 fw-600">Cash</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center d-md-none">
                    <img src="<?= get_site_url() ?>/wp-content/uploads/2023/08/eftpos.png" alt="<?= bloginfo('name') ?>">
                </div>
                <div class="col-12 d-md-none">
                    <p class="text-dark fs-20"><strong>Direct</strong> Deposit</p>
                </div>
                <div class="col-12 d-md-none">
                    <p class="text-dark fs-20 fw-600">Credit Card</p>
                </div>
                <div class="col-12 d-md-none">
                    <p class="text-dark fs-20 fw-600">Cash</p>
                </div>
            </div>
        </div>

        <?php if ($suburb['section_3']) : ?>
            <div class="row gx-xl-5 align-items-center gy-4">
                <?php if (isset($suburb['section_3_image'])) : ?>
                    <div class="col-12 col-lg-6">
                        <img src=<?= $suburb['section_3_image']['url'] ?> alt="<?= bloginfo('name') ?>" class="rounded-11">
                    </div>
                <?php endif; ?>
                <div class="col-12 col-lg-6">
                    <?php
                    $title = str_replace($suburbArray, get_the_title(), $suburb['section_3_title']);
                    $description = str_replace($suburbArray, get_the_title(), $suburb['section_3_description']);
                    ?>
                    <h2 class="fs-60 lh-1 fw-800 highlight-primary text-capitalize"><?= $title ?></h2>

                    <article class="text-grey description lh-1_67 pt-4 pt-md-5">
                        <?= $description ?>
                    </article>
                </div>
            </div>
        <?php endif; ?>
        <?= get_template_part('parts/section', 'brands'); ?>
    </div>
    <?php if (have_rows('suburb', 'options')) :
        while (have_rows('suburb', 'options')) : the_row();
            if (have_rows('faq_list', 'options')) :
    ?>
                <section class="faqs py-6 py-md-7 pt-lg-8 pb-lg-10">
                    <div class="container">
                        <h2 class="fs-60 fw-800 text-center highlight-primary text-capitalize pb-4 pb-md-5 pb-lg-7">Our <span>Frequently Asked Questions</span></h2>
                        <div class="accordion-container">
                            <?php
                            $index = 1;
                            while (have_rows('faq_list', 'options')) : the_row();
                                $question = get_sub_field('question');
                                $answer = get_sub_field('answer');
                            ?>
                                <div class="accordion-card">
                                    <div class="accordion-head<?= ($index == 1) ? " active" : ""; ?>">
                                        <div class="row g-0 w-100 justify-content-between">
                                            <div class="col h-inherit">
                                                <?= $question ?>
                                            </div>
                                            <div class="col-auto h-inherit">
                                                <div class="plusminus">
                                                    <?php if ($index == 1) { ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 32 20" fill="none">
                                                            <path d="M0.251953 19.2454L0.251953 12.0247L16.0733 0.43678L16.0733 7.65749L0.251953 19.2454Z" fill="white" />
                                                            <path d="M31.8945 19.2454L31.8945 12.0247L16.0732 0.436778L16.0732 7.65749L31.8945 19.2454Z" fill="white" />
                                                        </svg>
                                                    <?php } else { ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 32 20" fill="none">
                                                            <path d="M0.251953 0.606812L0.251953 7.82752L16.0733 19.4154L16.0733 12.1947L0.251953 0.606812Z" fill="#DD1E26" />
                                                            <path d="M31.8945 0.606812L31.8945 7.82752L16.0732 19.4154L16.0732 12.1947L31.8945 0.606812Z" fill="#DD1E26" />
                                                        </svg>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-body" style="<?= ($index == 1) ? 'display: block;' : ''; ?>">
                                        <?= $answer ?>
                                    </div>
                                </div>
                            <?php
                                $index++;
                            endwhile;
                            ?>
                        </div>
                    </div>
                </section>
    <?php endif;
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>