<?php if (have_rows('global_cta', 'options')) : ?>
    <div class="row h-100 g-3" id="global_cta_slider">
        <?php while (have_rows('global_cta', 'options')) : the_row();
            $image = get_sub_field('image');
            $product_name = get_sub_field('product_name');
            $price = get_sub_field('price');
        ?>
            <div class="col-9 col-md-4">
                <article class="part-cta mx-2 mx-md-0">
                    <img src="<?= $image['url'] ?>" class="w-100 pb-5" alt="<?= $image['url'] ?>">
                    <div class="cta-content">
                        <img class="cta-icon" src="<?= get_site_url() ?>/wp-content/uploads/2023/08/cta-icon.png" alt="<?= bloginfo('name') ?>">
                        <p class="font-articulat fs-14"><?= $product_name ?></p>
                        <p class="fw-700"><?= $price ?></p>
                    </div>
                </article>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>