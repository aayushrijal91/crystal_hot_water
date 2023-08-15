<div class="container">
    <section class="part-getStartedForm">
        <div class="row gy-5">
            <div class="<?= have_rows('form_cta', 'options') ? 'col-12 col-xl-4' : 'col-12' ?>">
                <h3 class="highlight-primary text-center fs-48 fw-800 text-capitalize">Get <span>Started Today</span></h3>
                <p class="text-center text-grey py-2">Talk to us at Crystal Hot Water today to <strong class="text-dark">get the hot water system you deserve!</strong></p>
                <div class="mainForm pt-4">
                    <?= do_shortcode('[contact-form-7 id="3d25c62" title="Part Contact Form"]') ?>
                </div>
            </div>
            <?php if (have_rows('form_cta', 'options')) : ?>
                <div class="col-12 col-xl-8">
                    <div class="row g-3" id="form_cta_slider">
                        <?php while (have_rows('form_cta', 'options')) : the_row();
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                        ?>
                            <div class="col-12 col-md-6">
                                <div class="form-cta mx-1 mx-md-0">
                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                    <div class="caption">
                                        <p class="highlight-primary"><?= $title ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>