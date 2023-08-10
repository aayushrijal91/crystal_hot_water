<?php
/*
 * Template Name: Shop Page
 * The shop page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="shop-page">
    <section class="shop py-8">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="h-100 bg-light"></div>
                </div>
                <div class="col-9">
                    <div class="row g-3">
                        <?php for ($i = 0; $i <= 11; $i++) : ?>
                            <div class="col-3">
                                <article class="product-card">
                                    <div class="d-flex justify-content-center"><img src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/rinnai-geaser.png" alt=""></div>
                                    <p class="text-grey highlight-primary text-capitalize"><b><span>Rinnai</span></b> Infinity 26 Continuous Flow Hot Water System</p>
                                    <p class="text-primary fs-18 fw-800">$1,250.00</p>
                                    <button class="w-100 bg-transparent">
                                        <a href="#" target="" class="btn btn-primary fw-700 d-flex w-100 text-white rounded-0">Add to cart</a>
                                    </button>
                                </article>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>