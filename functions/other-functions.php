<?php
// enable ACF options page

function init_setup()
{
    add_theme_support('title-tag');
    add_theme_support('woocommerce');

    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }
}
add_action('after_setup_theme', 'init_setup');

if (function_exists('acf_add_options_page')) acf_add_options_page();

add_filter('wpcf7_validate_customlist*', 'wpcf7_customlist_validation_filter', 10, 2);

function wpcf7_customlist_validation_filter($result, $tag)
{
    $tag = new WPCF7_FormTag($tag);

    $name = $tag->name;

    if (isset($_POST[$name]) && is_array($_POST[$name])) {
        foreach ($_POST[$name] as $key => $value) {
            if ('' === $value) {
                unset($_POST[$name][$key]);
            }
        }
    }

    $empty = !isset($_POST[$name]) || empty($_POST[$name]) && '0' !== $_POST[$name];

    if ($tag->is_required() && $empty) {
        $result->invalidate($tag, wpcf7_get_message('invalid_required'));
    }

    return $result;
}

/* CF7 remove auto p */
add_filter('wpcf7_autop_or_not', '__return_false');

function numeric_posts_nav()
{

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max   = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="d-flex flex-wrap align-items-center justify-content-center mt-md-5 mt-2 mb-md-0 mb-5"><ul class="pagination">' . "\n";

    /** Previous Post Link */
    if (get_previous_posts_link())
        printf('<li class="page-item">%s</li>' . "\n", get_previous_posts_link('Prev'));

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="page-item active"' : ' class="page-item"';

        printf('<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li class="page-item">�</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="page-item active"' : ' class="page-item"';
        printf('<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>�</li>' . "\n";

        $class = $paged == $max ? ' class="page-item active"' : ' class="page-item"';
        printf('<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li class="page-item">%s</li>' . "\n", get_next_posts_link('Next'));

    echo '</ul></div>' . "\n";
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes()
{
    return 'class="page-link link-arrow"';
}

/* contact 7 button */
/* removing default submit tag */
remove_action('wpcf7_init', 'wpcf7_add_form_tag_submit');
/* adding action with function which handles our button markup */
add_action('wpcf7_init', 'aiims_child_cf7_button');
/* adding out submit button tag */
if (!function_exists('aiims_child_cf7_button')) {

    function aiims_child_cf7_button()
    {
        wpcf7_add_form_tag('submit', 'aiims_child_cf7_button_handler');
    }
}
/* out button markup inside handler */
if (!function_exists('aiims_child_cf7_button_handler')) {

    function aiims_child_cf7_button_handler($tag)
    {
        $tag = new WPCF7_FormTag($tag);
        $class = wpcf7_form_controls_class($tag->type);
        $atts = array();
        $atts['class'] = $tag->get_class_option($class);
        $atts['id'] = $tag->get_id_option();
        $atts['tabindex'] = $tag->get_option('tabindex', 'int', true);
        $value = isset($tag->values[0]) ? $tag->values[0] : '';
        if (empty($value)) {
            $value = esc_html__('Contact Us', 'twentysixteen');
        }
        $atts['type'] = 'submit';
        $atts = wpcf7_format_atts($atts);
        $html = sprintf('<button %1$s>%2$s</button>', $atts, $value);
        return $html;
    }
}

function catch_that_image()
{
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    if (!empty($matches[1][0])) {
        $first_img = $matches[1][0];
    }

    if (empty($first_img)) { //Defines a default image
        $website_url = get_template_directory_uri();
        $first_img =  "$website_url/images/default.jpg";
    }
    return $first_img;
}

function echo_image($image = null, $attachment_id = null, $class = '')
{
    $url = '';
    $alt_text = '';

    // ACF image array

    if ($image) {
        $url = $image['url'];
        $alt_text = !empty($image['alt']) ? $image['alt'] : get_bloginfo('name');
    }

    // WordPress attachment ID

    else if ($attachment_id) {
        $url = wp_get_attachment_url($attachment_id);
        $alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', TRUE);
        $alt_text = !empty($alt_text) ? $alt_text : get_bloginfo('name');
    }

    if ($url) {
        echo '<img src="' . esc_url($url) . '" alt="' . esc_attr($alt_text) . '" class="' . esc_attr($class) . '" />';
    }
}

function echo_theme_image($relative_url, $class = '')
{
    $url = get_template_directory_uri() . $relative_url;
    $alt_text = get_bloginfo('name');  // Default alt text is site name

    echo '<img src="' . esc_url($url) . '" alt="' . esc_attr($alt_text) . '" class="' . esc_attr($class) . '" />';
}

add_action('rest_api_init', function () {
    register_rest_route('api', '/areas', array(
        'methods' => 'GET',
        'callback' => 'get_areas_data',
    ));
});

function get_areas_data()
{
    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'order'          => 'ASC',
        'orderby'        => 'date', // Fixed this line
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'page-templates/suburb.php',
            ),
        )
    );
    $the_query = new WP_Query($args);
    $areaData = array();

    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
            array_push($areaData, get_the_title());
        endwhile;
    endif;
    wp_reset_postdata();

    return $areaData;
}

function filter_products() {
    $selected_categories = $_POST['categories'];

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => $selected_categories,
                'operator' => 'IN',
            ),
        ),
    );

    $products = new WP_Query($args);

    if ($products->have_posts()) {
        while ($products->have_posts()) : $products->the_post();
            wc_get_template_part('content', 'product');
        endwhile;
    } else {
        echo 'No products found.';
    }

    die();
}
add_action('wp_ajax_filter_products', 'filter_products');
add_action('wp_ajax_nopriv_filter_products', 'filter_products');

function custom_search_filter($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', array('product'));
    }
    return $query;
}
add_action('pre_get_posts','custom_search_filter');

function enqueue_custom_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom-ajax-cart', get_template_directory_uri() . '/scripts/scripts.min.js', array('jquery'), null, true);
    wp_localize_script('custom-ajax-cart', 'ajax_cart_params', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function update_cart_count_callback() {
    if (WC()->cart) {
        echo WC()->cart->get_cart_contents_count();
    }
    wp_die(); // Always end your AJAX functions with wp_die()
}
add_action('wp_ajax_update_cart_count', 'update_cart_count_callback');
add_action('wp_ajax_nopriv_update_cart_count', 'update_cart_count_callback');
