<section class="part-deservingHotWater">
    <div class="container">
        <div class="row">
            <div class="col-5">
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
                        <div class="col-5">
                            <button class="w-100 bg-transparent">
                                <a href="<?= get_field('deserving_hot_water', 'options')['button']['url'] ?>" target="<?= get_field('deserving_hot_water', 'options')['button']['target'] ?>" class="btn btn-primary fw-700 d-flex w-100 text-white"><?= get_field('deserving_hot_water', 'options')['button']['title'] ?></a>
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