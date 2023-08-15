<?php $banner = get_field('banner'); ?>
<section class="homepageBanner">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div class="col-12 col-md-8 col-xl-4">
                <h1 class="fs-60 fw-800 lh-1 text-capitalize highlight-primary ls-n0_9"><?= !empty($banner['title']) ? $banner['title'] : get_the_title() ?></h1>
                <?php if (!empty($banner['subtitle'])) : ?>
                    <article class="subtitle text-grey py-4"><?= $banner['subtitle'] ?></article>
                <?php endif; ?>

                <div class="row g-2">
                    <?php if (isset($banner['button'])) : ?>
                        <div class="col-6">
                            <button class="w-100 bg-transparent">
                                <a href="<?= $banner['button']['url'] ?>" target="<?= $banner['button']['target'] ?>" class="btn btn-primary fw-700 d-flex w-100 text-white"><?= $banner['button']['title'] ?></a>
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
            <div class="col-12 col-xl-7">
                <?php get_template_part('parts/section', 'globalCta'); ?>
            </div>
        </div>
    </div>
</section>