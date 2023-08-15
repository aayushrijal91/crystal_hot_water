<section class="part-deservingHotWater position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-5">
                <?php if (isset(get_field('deserving_hot_water', 'options')['title'])) : ?>
                    <h2 class="fs-60 highlight-primary text-capitalize fw-800 lh-1">
                        <?= get_field('deserving_hot_water', 'options')['title'] ?>
                    </h2>
                <?php endif; ?>
                <?php if (isset(get_field('deserving_hot_water', 'options')['description'])) : ?>
                <article class="py-4 lh-1_67 description">
                    <?= get_field('deserving_hot_water', 'options')['description'] ?>
                </article>
                <?php endif; ?>
                <div class="row g-2 pt-4">
                    <?php if (isset(get_field('deserving_hot_water', 'options')['button']['url'])) : ?>
                        <div class="col-6 col-md-5">
                            <button class="w-100 bg-transparent">
                                <a href="<?= get_field('deserving_hot_water', 'options')['button']['url'] ?>" target="<?= get_field('deserving_hot_water', 'options')['button']['target'] ?>" class="btn btn-primary fw-700 d-flex w-100 text-white"><?= get_field('deserving_hot_water', 'options')['button']['title'] ?></a>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="col-6 col-md-5">
                        <button class="w-100 bg-transparent">
                            <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-secondary fw-700 d-flex w-100 text-white"><?= get_field('phone_number', 'options') ?></a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?= get_site_url() ?>/wp-content/uploads/2023/08/deserving-hot-water-guy.png" class="position-absolute h-100 d-none d-lg-block d-xl-none end-0 top-0" alt="<?= bloginfo('name') ?>">
    <img src="<?= get_site_url() ?>/wp-content/uploads/2023/08/deserving-hot-water-guy.png" class="w-100 d-md-none" alt="<?= bloginfo('name') ?>">
    <img src="<?= get_site_url() ?>/wp-content/themes/aiims/images/background/homepage-section-4.png" class="w-100 d-none d-md-block d-lg-none" alt="<?= bloginfo('name') ?>">
</section>