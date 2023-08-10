<?php $banner = get_field('banner'); ?>
<section class="homepageBanner">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-4">
                <h1 class="fs-60 fw-800 lh-1 text-capitalize highlight-primary ls-n0_9"><?= isset($banner['title']) ? $banner['title'] : get_the_title() ?></h1>
                <?php if (isset($banner['subtitle'])) : ?>
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
            <div class="col-7">
                <div class="row h-100 g-3">
                    <div class="col-4">
                        <article class="cta">
                            <img src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/cta-1.jpg" class="pb-5" alt="">
                            <div class="cta-content">
                                <img class="cta-icon" src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/cta-icon.png" alt="">
                                <p class="font-articulat fs-14">Gas rinnai 26B</p>
                                <p class="fw-700">Supply and install $999*</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-4">
                        <article class="cta">
                            <img src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/cta-2.jpg" class="pb-5" alt="">
                            <div class="cta-content">
                                <img class="cta-icon" src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/cta-icon.png" alt="">
                                <p class="font-articulat fs-14">50 liter rinnai Electric</p>
                                <p class="fw-700">Supply and install $725*</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-4">
                        <article class="cta">
                            <img src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/cta-3.jpg" class="pb-5" alt="">
                            <div class="cta-content">
                                <img class="cta-icon" src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/cta-icon.png" alt="">
                                <p class="font-articulat fs-14">Gas hotwater heaters</p>
                                <p class="fw-700">Starting From $900</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>