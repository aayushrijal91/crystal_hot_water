<?php
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
$fields = get_fields(get_the_ID());
?>

<!-- <section class="inner-pages py-xl-6 py-md-5 py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content pt-lg-0 pt-md-5 pt-3">
                    <div class="title font-heading text-black fs-80 mb-2"><?= get_the_title(); ?></div>
                    <?= get_the_content(); ?>
                    
                </div>
            </div>
        </div>
    </div>
</section> -->

<main class="product-page">
    <?php
    $product = wc_get_product(get_the_ID());
    $featured_image_id = $product->get_image_id();
    $featured_image_url = wp_get_attachment_image_src($featured_image_id, 'full');
    // $image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'single-post-thumbnail');
    // var_dump(array(
    //     $product->get_regular_price(),
    //     'name' => $product->get_name(),
    //     'type' => $product->get_type(),
    //     'price' => $product->get_price(),
    //     'regular_price' => $product->get_regular_price(),
    //     'sale_price' => $product->get_sale_price(),
    //     'description' => $product->get_description(),
    //     'short_description' => $product->get_short_description(),
    //     'sku' => $product->get_sku(),
    //     'stock_quantity' => $product->get_stock_quantity()
    // ));
    ?>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="product-image">
                    <img src="<?= $featured_image_url[0] ?>" alt="">
                </div>
            </div>
            <div class="col-5">
                <h2 class="fs-60 highlight-primary text-capitalize fw-800 lh-1">
                    <?= $product->get_name() ?>
                </h2>
                <article class="py-4 lh-1_67 description">
                    <?= $product->get_description() ?>
                </article>
                <div class="row align-items-center">
                    <div class="col-3">
                        <p class="text-primary fs-30 fw-700">$<?= $product->get_price() ?></p>
                    </div>
                    <div class="col">
                        <!-- <button class="w-100 bg-transparent">
                            <a href="<?= $product->add_to_cart_url() ?>" class="btn btn-primary fw-700 d-flex w-100 text-white rounded-0">Add To Cart</a>
                        </button> -->
                        <button type="submit" name="add-to-cart" value="305" class="single_add_to_cart_button button alt">Add to cart</button>
                        <!-- <form class="cart" action="" method="post" enctype="multipart/form-data">

                            <div class="quantity">
                                <label class="screen-reader-text" for="quantity_64dc73be90348">Rinnai Infinity 26 Continuous Flow Hot Water System quantity</label>
                                <input type="number" id="quantity_64dc73be90348" class="input-text qty text" name="quantity" value="1" aria-label="Product quantity" size="4" min="1" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                            </div>


                        </form> -->
                    </div>
                </div>

                <hr class="my-4" />

                <div class="row">
                    <div class="col-3">
                        <p class="fs-20 fw-700 text-dark pb-4">Dimensions</p>
                        <p class="text-grey lh-1_67">Height 370mm</p>
                        <p class="text-grey lh-1_67">Width 220mm</p>
                        <p class="text-grey lh-1_67">Depth 130mm</p>
                    </div>
                    <div class="col">
                        <p class="fs-20 fw-700 text-dark pb-4">Dimensions</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <section class="inner-blog py-xl-6 py-md-5 py-3">
            <div class="container">
                <div class="inner-blog-part">
                    <?php the_content(); ?>

                </div>
            </div>
        </section>
<?php
    }
    wp_reset_postdata();
} ?>

<?php get_footer(); ?>