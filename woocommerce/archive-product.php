<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

// get_header();
get_header('shop');
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

if (woocommerce_product_loop()) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	// do_action('woocommerce_before_shop_loop');

	// woocommerce_product_loop_start();

	if (wc_get_loop_prop('total')) { ?>
		<main class="shop-page">
			<section class="shop py-8">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-3">
							<aside class="shopFilter h-100 bg-light py-5 px-4">
								<section class="category pb-5">
									<?php
									$parent_category_name = 'Product Type';

									$parent_category = get_term_by('name', $parent_category_name, 'product_cat');

									if ($parent_category && !is_wp_error($parent_category)) {
										$args = array(
											'taxonomy' => 'product_cat',
											'child_of' => $parent_category->term_id,
											'hide_empty' => false,
										);

										$subcategories = get_terms($args);

										if (!empty($subcategories)) { ?>
											<p class="categoryTitle">Product Type</p>
											<ul class="categoryList">
												<?php foreach ($subcategories as $subcategory) { ?>
													<li>
														<label><input type="checkbox" name="subcategory-checkbox" value="<?= esc_attr($subcategory->slug) ?>"> <?= esc_html($subcategory->name) ?></label>
													</li>
												<?php } ?>
											</ul>
									<?php } else {
											echo 'No subcategories found for ' . $parent_category_name;
										}
									} else {
										echo 'Parent category not found.';
									}
									?>
								</section>

								<section class="category pb-5">
									<?php
									$parent_category_name = 'Brand';

									$parent_category = get_term_by('name', $parent_category_name, 'product_cat');

									if ($parent_category && !is_wp_error($parent_category)) {
										$args = array(
											'taxonomy' => 'product_cat',
											'child_of' => $parent_category->term_id,
											'hide_empty' => false,
										);

										$subcategories = get_terms($args);

										if (!empty($subcategories)) { ?>
											<p class="categoryTitle">Brand</p>
											<ul class="categoryList">
												<?php foreach ($subcategories as $subcategory) { ?>
													<li>
														<label><input type="checkbox" name="subcategory-checkbox" value="<?= esc_attr($subcategory->slug) ?>"> <?= esc_html($subcategory->name) ?></label>
													</li>
												<?php } ?>
											</ul>
									<?php } else {
											echo 'No subcategories found for ' . $parent_category_name;
										}
									} else {
										echo 'Parent category not found.';
									}
									?>
								</section>

								<section class="category pb-5">
									<form method="get">
										<input type="number" name="min_price" placeholder="Min Price" value="<?php echo esc_attr($_GET['min_price'] ?? ''); ?>">
										<input type="number" name="max_price" placeholder="Max Price" value="<?php echo esc_attr($_GET['max_price'] ?? ''); ?>">
										<button type="submit">Apply Filter</button>
									</form>
								</section>

								<section class="category pb-5">
									<?php
									$parent_category_name = 'Gas Type';

									$parent_category = get_term_by('name', $parent_category_name, 'product_cat');

									if ($parent_category && !is_wp_error($parent_category)) {
										$args = array(
											'taxonomy' => 'product_cat',
											'child_of' => $parent_category->term_id,
											'hide_empty' => false,
										);

										$subcategories = get_terms($args);

										if (!empty($subcategories)) { ?>
											<p class="categoryTitle">Gas Type</p>
											<ul class="categoryList">
												<?php foreach ($subcategories as $subcategory) { ?>
													<li>
														<label><input type="checkbox" name="subcategory-checkbox" value="<?= esc_attr($subcategory->slug) ?>"> <?= esc_html($subcategory->name) ?></label>
													</li>
												<?php } ?>
											</ul>
									<?php } else {
											echo 'No subcategories found for ' . $parent_category_name;
										}
									} else {
										echo 'Parent category not found.';
									}
									?>
								</section>

								<section class="category pb-5">
									<?php
									$parent_category_name = 'Energy Star Rating';

									$parent_category = get_term_by('name', $parent_category_name, 'product_cat');

									if ($parent_category && !is_wp_error($parent_category)) {
										$args = array(
											'taxonomy' => 'product_cat',
											'child_of' => $parent_category->term_id,
											'hide_empty' => false,
										);

										$subcategories = get_terms($args);

										if (!empty($subcategories)) { ?>
											<p class="categoryTitle">Energy Star Rating</p>
											<ul class="categoryList">
												<?php foreach ($subcategories as $subcategory) { ?>
													<li>
														<label><input type="checkbox" name="subcategory-checkbox" value="<?= esc_attr($subcategory->slug) ?>"> <?= esc_html($subcategory->name) ?></label>
													</li>
												<?php } ?>
											</ul>
									<?php } else {
											echo 'No subcategories found for ' . $parent_category_name;
										}
									} else {
										echo 'Parent category not found.';
									}
									?>
								</section>

								<section class="category">
									<?php
									$parent_category_name = 'Location';

									$parent_category = get_term_by('name', $parent_category_name, 'product_cat');

									if ($parent_category && !is_wp_error($parent_category)) {
										$args = array(
											'taxonomy' => 'product_cat',
											'child_of' => $parent_category->term_id,
											'hide_empty' => false,
										);

										$subcategories = get_terms($args);

										if (!empty($subcategories)) { ?>
											<p class="categoryTitle">Location</p>
											<ul class="categoryList">
												<?php foreach ($subcategories as $subcategory) { ?>
													<li>
														<label><input type="checkbox" name="subcategory-checkbox" value="<?= esc_attr($subcategory->slug) ?>"> <?= esc_html($subcategory->name) ?></label>
													</li>
												<?php } ?>
											</ul>
									<?php } else {
											echo 'No subcategories found for ' . $parent_category_name;
										}
									} else {
										echo 'Parent category not found.';
									}
									?>
								</section>
							</aside>
						</div>
						<div class="col-12 col-md-9">
							<div class="row g-3" id="filtered-products">
								<?php
								while (have_posts()) : the_post(); ?>
									<div class="col-md-6 col-lg-4 col-xl-3">
										<article class="product-card">
											<div class="d-flex justify-content-center"><?= woocommerce_template_loop_product_thumbnail() ?></div>
											<a href="<?= the_permalink() ?>" class="text-grey highlight-primary-product text-capitalize fs-16 pt-3"><?= $product->get_short_description() ?></a>
											<p class="fw-500"><?= $product->get_sku() ?></p>
											<p class="text-primary fs-18 fw-800"><?= woocommerce_template_loop_price() ?></p>
											<?= woocommerce_template_loop_add_to_cart() ?>
										</article>
									</div>
								<?php endwhile;
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
<?php	}

	// woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	// do_action('woocommerce_after_shop_loop');
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action('woocommerce_no_products_found');
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

?>
<?php
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action('woocommerce_sidebar');

get_footer('shop');
