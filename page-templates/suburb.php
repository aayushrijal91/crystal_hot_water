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
?>

<main class="suburb-page pt-9">
    <div class="container">
        <div class="row gx-xl-5 gx-xxl-9">
            <?php if ($suburb['section_1']) : ?>
                <div class=<?= $suburb['section_2'] ? 'col-6' : 'col-12' ?>>
                    <h2 class="fs-60 lh-1 fw-800 highlight-primary text-capitalize"><?= $suburb['section_1_title'] ?></h2>
                    <?php if (!empty($suburb['section_1_description'])) : ?>
                        <article class="description pt-5 lh-1_67 fw-500">
                            <?= $suburb['section_1_description'] ?>
                        </article>
                    <?php endif; ?>
                </div>
            <?php endif;
            if ($suburb['section_2']) : ?>
                <div class=<?= $suburb['section_1'] ? 'col-6' : 'col-12' ?>>
                    <h2 class="fs-60 lh-1 fw-800 highlight-primary text-capitalize"><?= $suburb['section_2_title'] ?></h2>
                    <?php if (!empty($suburb['section_2_description'])) : ?>
                        <article class="description pt-5 lh-1_67 fw-500">
                            <?= $suburb['section_2_description'] ?>
                        </article>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="py-6 px-5 rounded-20 bg-light my-6">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <p class="highlight-primary fs-30 fw-600 text-dark text-capitalize">Flexible Payment <span class="fw-800">Options</span></p>
                </div>
                <div class="col-3">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <img src="<?= get_site_url() ?>/wp-content/uploads/2023/08/eftpos.png" alt="<?= bloginfo('name') ?>">
                        </div>
                        <div class="col-auto">
                            <p class="text-dark fs-20"><strong>Direct</strong> Deposit</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <p class="text-dark fs-20 fw-600">Credit Card</p>
                        </div>
                        <div class="col-auto">
                            <p class="text-dark fs-20 fw-600">Cash</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if ($suburb['section_3']) : ?>
            <div class="row gx-xl-5 align-items-center">
                <?php if (isset($suburb['section_3_image'])) : ?>
                    <div class="col-12 col-md-6">
                        <img src=<?= $suburb['section_3_image']['url'] ?> alt="<?= bloginfo('name') ?>" class="rounded-11">
                    </div>
                <?php endif; ?>
                <div class="col-12 col-md-6">
                    <?php
                    $title = str_replace(array('{suburb}', '{Suburb}', '{SUBURB}'), get_the_title(), $suburb['section_3_title']);
                    $description = str_replace(array('{suburb}', '{Suburb}', '{SUBURB}'), get_the_title(), $suburb['section_3_description']);
                    ?>
                    <h2 class="fs-60 lh-1 fw-800 highlight-primary text-capitalize"><?= $title ?></h2>

                    <article class="text-grey description lh-1_67 pt-5">
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
                <section class="faqs pt-8 pb-10 bg-light">
                    <div class="container">
                        <h2 class="fs-60 fw-800 text-center highlight-primary text-capitalize pb-7">Our <span>Frequently Asked Questions</span></h2>
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