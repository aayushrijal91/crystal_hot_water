<?php if (have_rows('global_cta', 'options')) : ?>
    <div class="row h-100 g-3">
        <?php while (have_rows('global_cta', 'options')) : the_row();
            $image = get_sub_field('image');
            $product_name = get_sub_field('product_name');
            $price = get_sub_field('price');
        ?>
            <div class="col-4">
                <article class="part-cta">
                    <img src="<?= $image['url'] ?>" class="pb-5" alt="<?= $image['url'] ?>">
                    <div class="cta-content">
                        <img class="cta-icon" src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/cta-icon.png" alt="<?= bloginfo('name') ?>">
                        <p class="font-articulat fs-14"><?= $product_name ?></p>
                        <p class="fw-700"><?= $price ?></p>
                    </div>
                </article>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>