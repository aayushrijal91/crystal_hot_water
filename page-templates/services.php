<?php
/*
 * Template Name: Services Page
 * The services page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'publish_date',
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => array('page-templates/inner-service.php'),
        ),
    )
);
$the_query = new WP_Query($args);
?>

<main class="service-page">
    <div class="container">
        <section class="no-risk bg-primary rounded-11">
            <?php
            $no_risk_guarantee = get_field('no_risk_guarantee', 'options');
            if (!empty($no_risk_guarantee['title'])) : ?>
                <div class="row align-items-center top-row">
                    <div class="col-6">
                        <h2 class="fs-60 text-white text-capitalize fw-800 lh-1">
                            <?= get_field('no_risk_guarantee', 'options')['title'] ?>
                        </h2>
                        <?php if (!empty($no_risk_guarantee['description'])) : ?>
                            <article class="py-4 text-white">
                                <?= $no_risk_guarantee['description'] ?>
                            </article>
                        <?php endif; ?>
                        <div class="row g-2">
                            <?php if (isset($no_risk_guarantee['button'])) : ?>
                                <div class="col-5">
                                    <button class="w-100 bg-transparent">
                                        <a href="<?= $no_risk_guarantee['button']['url'] ?>" target="<?= $no_risk_guarantee['button']['target'] ?>" class="btn btn-white fw-700 d-flex w-100 text-primary"><?= $no_risk_guarantee['button']['title'] ?></a>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <div class="col-5">
                                <button class="w-100 bg-transparent">
                                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-white fw-700 d-flex w-100 text-primary"><?= get_field('phone_number', 'options') ?></a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($no_risk_guarantee['image']['url'])) : ?>
                        <div class="col-6">
                            <img src="<?= $no_risk_guarantee['image']['url'] ?>" alt="<?= $no_risk_guarantee['image']['alt'] ?>">
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if (have_rows('no_risk_guarantee', 'options')) :
                while (have_rows('no_risk_guarantee', 'options')) : the_row();
                    if (have_rows('services', 'options')) : ?>
                        <div class="row gx-2 gy-3 homepage-services">
                            <?php while (have_rows('services', 'options')) : the_row();
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                                $link = get_sub_field('link');
                            ?>
                                <div class="col-4">
                                    <article class="service-box bg-primary-dark text-white rounded-8 d-flex flex-column gap-5 justify-content-between h-100">
                                        <div>
                                            <h4 class="fs-40 fw-800 lh-1"><?= $title ?></h4>
                                            <?= $description ?>
                                        </div>
                                        <div class="row align-items-center gx-3">
                                            <div class="col">
                                                <button class="w-100 bg-transparent">
                                                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-white fw-700 d-flex w-100 text-primary"><?= get_field('phone_number', 'options') ?></a>
                                                </button>
                                            </div>
                                            <div class="col-auto">
                                                <button class="w-100 bg-transparent">
                                                    <a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>" class="btn btn-transparent fw-700 d-flex w-100 text-white px-1 gap-2">See Our Services <svg xmlns="http://www.w3.org/2000/svg" width="31" height="16" viewBox="0 0 31 16" fill="none">
                                                            <path d="M30.0553 8.95882C30.4458 8.56829 30.4458 7.93513 30.0553 7.5446L23.6913 1.18064C23.3008 0.790119 22.6676 0.790119 22.2771 1.18064C21.8866 1.57117 21.8866 2.20433 22.2771 2.59486L27.934 8.25171L22.2771 13.9086C21.8866 14.2991 21.8866 14.9323 22.2771 15.3228C22.6676 15.7133 23.3008 15.7133 23.6913 15.3228L30.0553 8.95882ZM0.450684 9.25171L29.3482 9.25171L29.3482 7.25171L0.450684 7.25171L0.450684 9.25171Z" fill="white" />
                                                        </svg></a>
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            <?php endwhile; ?>
                        </div>
            <?php endif;
                endwhile;
            endif;
            ?>
        </section>

        <?php if ($the_query->have_posts()) : ?>
            <section class="main-services rounded-11 position-relative">
                <div class="row g-3">
                    <?php
                    while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                        <div class="col-4">
                            <article class="main-service-card">
                                <div>
                                    <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="24" cy="24.3181" r="24" fill="white" />
                                        <path d="M18 29.1181C18 25.6681 24 19.8181 24 19.8181C24 19.8181 30 25.6681 30 29.1181C30 32.7181 26.85 34.8181 24 34.8181C21.15 34.8181 18 32.7181 18 29.1181Z" fill="#06AAD3" />
                                        <path d="M12 19.3681C12 17.2681 15.3 13.8181 15.3 13.8181C15.3 13.8181 18.6 17.2681 18.6 19.3681C18.75 21.6181 16.95 22.8181 15.3 22.8181C13.65 22.8181 12 21.6181 12 19.3681Z" fill="#06AAD3" />
                                        <path d="M36.0004 19.3681C36.0004 17.2681 32.7004 13.8181 32.7004 13.8181C32.7004 13.8181 29.4004 17.2681 29.4004 19.3681C29.4004 21.6181 31.2004 22.8181 32.7004 22.8181C34.2004 22.8181 36.0004 21.6181 36.0004 19.3681Z" fill="#06AAD3" />
                                    </svg>
                                    <h5 class="fs-24 fw-800 mt-3"><?= get_the_title() ?></h5>
                                    <article class="fs-14 lh-2 mt-2">
                                        <?= get_the_content() ?>
                                    </article>
                                </div>
                                <button class="bg-transparent mt-4">
                                    <a href="<?= get_the_permalink() ?>" class="btn btn-white fw-700 text-secondary rounded-pill px-6">See More</a>
                                </button>
                            </article>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="w-100 d-flex justify-content-center">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 66 66" fill="none">
                        <circle cx="33.0844" cy="32.7058" r="32.5124" fill="#06AAD3" />
                        <path d="M39.2395 22.4685C36.2867 19.7841 36.3687 14.4153 36.7788 12.0664C29.5309 14.885 27.7935 20.9212 27.8308 23.5869C26.1307 23.7212 24.8854 21.5177 24.4753 20.3992C23.8601 31.0809 27.9427 31.3605 36.3314 37.2326C43.0424 41.9303 42.5205 48.2499 41.4206 50.8224C55.4578 38.0715 42.9306 25.8239 39.2395 22.4685Z" fill="white" />
                        <path d="M32.4726 38.7426C25.6273 35.4766 22.1637 29.2541 21.2876 26.551C20.7283 35.8346 25.2583 39.246 25.5379 39.4137C25.8175 39.5815 30.4034 41.7626 31.41 44.2792C32.4166 46.7958 30.3474 49.0328 25.5379 45.901C21.6902 43.3956 19.4607 36.8039 18.8269 33.8213C15.751 48.0262 25.6497 53.5628 33.1437 53.3391C40.6376 53.1154 41.0291 42.8252 32.4726 38.7426Z" fill="white" />
                    </svg>
                </div>
            </section>
        <?php
        endif;
        wp_reset_query();
        ?>
    </div>
</main>

<?php get_footer(); ?>