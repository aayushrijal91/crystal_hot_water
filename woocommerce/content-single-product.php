<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<main class="product-page py-5 py-md-7">
	<div class="container">
		<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
			<div class="row gy-5 gx-xl-6">
				<div class="col-lg-6">
					<div class="product-image">
						<?= get_the_post_thumbnail($product->get_id(), 'full'); ?>
					</div>
				</div>
				<div class="col-lg-6">
					<h2 class="fs-60 highlight-primary text-capitalize fw-800 lh-1">
						<?= the_title(); ?>
					</h2>
					<?php if ($product->get_sku()) : ?>
						<p class="text-grey pt-3">SKU: <?= $product->get_sku() ?></p>
					<?php endif; ?>
					<article class="py-4 lh-1_67 description">
						<?= $product->get_description() ?>
					</article>
					<div class="row align-items-center gx-xl-5">
						<div class="col-auto">
							<p class="text-primary fs-30 fw-700"><?= $product->get_price_html() ?></p>
						</div>
						<div class="col">
							<?php if ($product->get_stock_status() == 'outofstock') {
								echo "<p class='fw-800 text-primary'>Out Of Stock</p>";
							} else {
								woocommerce_template_loop_add_to_cart();
							}
							?>
						</div>
					</div>

					<hr class="my-4" />

					<div class="row">
						<div class="col-md-3">
							<p class="fs-20 fw-700 text-dark pb-4">Dimensions</p>
							<?php if ($product->get_length()) : ?>
								<p class="text-grey lh-1_67 fw-500"><strong class="text-dark">Length:</strong> <?= $product->get_length() . get_option('woocommerce_dimension_unit') ?></p>
							<?php endif;
							if ($product->get_width()) : ?>
								<p class="text-grey lh-1_67 fw-500"><strong class="text-dark">Width:</strong> <?= $product->get_width() . get_option('woocommerce_dimension_unit') ?></p>
							<?php endif;
							if ($product->get_height()) : ?>
								<p class="text-grey lh-1_67 fw-500"><strong class="text-dark">Height:</strong> <?= $product->get_height() . get_option('woocommerce_dimension_unit') ?></p>
							<?php endif;
							if ($product->get_weight()) : ?>
								<p class="text-grey lh-1_67 fw-500"><strong class="text-dark">Weight:</strong <?= $product->get_weight() . get_option('woocommerce_weight_unit') ?></p>
							<?php endif; ?>

						</div>
						<div class="col-md">
							<p class="fs-20 fw-700 text-dark pb-4">Specs</p>

							<?php
							$terms = get_the_terms($product->get_id(), 'product_cat');

							if ($terms && !is_wp_error($terms)) {
								$first_term = reset($terms); // Get the first term from the array

								if ($first_term instanceof WP_Term) {
									$term_name = $first_term->name;
							?>
									<p class="text-grey lh-1_67 fw-500"><strong class="text-dark">Type:</strong><?= " " . $term_name; ?></p>
							<?php }
							} ?>

							<?php foreach ($product->get_attributes() as $key => $attribute) { ?>
								<p class="text-grey lh-1_67 fw-500"><strong class="text-dark"><?= ucfirst($key) ?>:</strong><?= " " . $attribute->get_options()[0] ?></p>
							<?php } ?>
						</div>
					</div>

					<hr class="my-4" />

					<article>
						<p class="fs-20 fw-700 text-dark pb-4">Delivery Information</p>
						<p class="text-grey lh-1_67 fw-500">We provide Sydney-wide delivery of all hot water systems, and in most cases, shipping is free of charge! However, please note that all sales must be made within a 30km radius of the Sydney CBD. If you are outside of this area, please contact us to check for availability.</p>
					</article>
				</div>
			</div>

			<div class="gallery py-8">
				<?php
				$gallery_image_ids = $product->get_gallery_image_ids();

				// Display the gallery images
				if (!empty($gallery_image_ids)) { ?>
					<div class="row gy-3">
						<?php foreach ($gallery_image_ids as $image_id) {
							// Get the image URL
							$image_url = wp_get_attachment_url($image_id);
						?>
							<div class="col-12 col-md-6 col-lg-4">
								<div class="gallery-image">
									<img src="<?= $image_url ?>" alt="<?= bloginfo('name') ?>" />
								</div>
							</div>
						<?php } ?>
					</div>
				<?php } else {
					echo "No gallery images found for this product.";
				}
				?>
			</div>

			<div class="reviews">
				<?php //comments_template(); 
				?>
			</div>

			<?php
			$related_products = wc_get_related_products(get_the_ID(), 4); // Get related product IDs

			if (!empty($related_products)) { ?>
				<div class="related-products row gy-3">
					<?php foreach ($related_products as $related_product_id) {
						$related_product = wc_get_product($related_product_id);

						if ($related_product) { ?>
							<div class="col-12 col-md-6 col-lg-4 col-xl-3">
								<article class="related-product">
									<div class="d-flex justify-content-center"><?= woocommerce_template_loop_product_thumbnail() ?></div>
									<a href="<?= the_permalink() ?>" class="text-primary highlight-primary text-capitalize fw-800 fs-18 pt-3"><?= $related_product->get_name() ?></a>
									<p class="text-grey text-capitalize fs-14"><?= $related_product->get_short_description() ?></p>
									<p class="text-primary fs-18 fw-800"><?= $related_product->get_price_html() ?></p>
									<?= woocommerce_template_loop_add_to_cart() ?>
								</article>
							</div>
					<?php }
					} ?>
				</div>
			<?php } ?>
		</div>
	</div>
</main>