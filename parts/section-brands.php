<?php if (have_rows('brands', 'options')) : ?>
    <section class="part-brands bg-white">
        <div class="container">
            <div class="brands_slider">
                <?php while (have_rows('brands', 'options')) : the_row();
                    $logo = get_sub_field('logo');
                ?>
                    <div><img src="<?= get_sub_field('logo')['url'] ?>" alt="<?= bloginfo('name') ?>"></div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>