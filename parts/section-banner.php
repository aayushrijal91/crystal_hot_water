<?php $banner = get_field('banner'); ?>

<section class="banner">
    <div class="container">
        <?php if (is_shop()) { ?>
            <h1 class="highlight-primary fs-60 fw-800 text-center lh-1 text-capitalize">Our <span>shop</span></h1>
        <?php   } else { ?>
            <h1 class="highlight-primary fs-60 fw-800 text-center lh-1 text-capitalize <?= is_page_template('page-templates/suburb.php') ? 'text-primary' : '' ?>"><?= !empty($banner['title']) ? $banner['title'] : get_the_title(); ?></h1>
        <?php } ?>
        <?php if (!empty($banner['subtitle'])) { ?>
            <article class="subtitle text-center text-grey pt-3"><?= $banner['subtitle'] ?></article>
        <?php } else { ?>
            <article class="subtitle text-center text-dark pt-3"><b>Crystal Hot Water is here to help you with hot</b> water installation in all of Sydney!</article>
        <?php } ?>
        <div class="row justify-content-center pt-4">
            <div class="col-11 col-md-6 col-lg-4">
                <div class="row justify-content-center g-2">
                    <?php if (!empty($banner['button'])) : ?>
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
        </div>
    </div>
</section>