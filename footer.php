<footer class="bg-primary">
    <section class="footer-top">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center gy-4">
                <div class="col-auto">
                    <a href="<?= get_site_url() ?>">
                        <img src="<?= get_field('footer', 'options')['logo']['url'] ?>" alt="<?= bloginfo('name') ?>">
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="row g-2">
                        <?php if (isset(get_field('footer', 'options')['button']['url'])) : ?>
                            <div class="col-6">
                                <button class="w-100 bg-transparent">
                                    <a href="<?= get_field('footer', 'options')['button']['url'] ?>" target="<?= get_field('footer', 'options')['button']['target'] ?>" class="btn btn-secondary fw-700 d-flex w-100 text-white"><?= get_field('footer', 'options')['button']['title'] ?></a>
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

            <div class="row py-6 text-white text-center text-md-start gy-5">
                <div class="col-md-4 col-lg-2">
                    <p class="fw-700 pb-3 pb-md-4">Popular Links</p>

                    <?php wp_nav_menu(array(
                        'menu' => 'Footer Popular Links',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                        'container_id' => '',
                        'menu_class' => 'menu_list'
                    )); ?>
                </div>

                <div class="col-md-8 col-lg-5">
                    <p class="fw-700 pb-3 pb-md-4">Our Services</p>

                    <ul class="menu_list columns-md-2">
                        <?php
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
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                                <li><a href="<?= get_the_permalink() ?>" class="text-white text-capitalize"><?= get_the_title() ?></a></li>
                        <?php endwhile;
                        endif;
                        wp_reset_query(); ?>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3">
                    <p class="fw-700 pb-3 pb-md-4">Shop</p>

                    <ul class="menu_list">
                        <li><a href="" class="text-white">Electric Instantaneous</a></li>
                        <li><a href="" class="text-white">Electric Storage</a></li>
                        <li><a href="" class="text-white">Gas Continuous Hot Water System</a></li>
                        <li><a href="" class="text-white">Gas Storage Hot Water System</a></li>
                        <li><a href="" class="text-white">Heat Pump</a></li>
                        <li><a href="" class="text-white">Solar Hot Water System</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-lg-2">
                    <p class="fw-700 pb-3 pb-md-4">Support</p>

                    <?php wp_nav_menu(array(
                        'menu' => 'Footer Support',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                        'container_id' => '',
                        'menu_class' => 'menu_list'
                    )); ?>
                </div>
            </div>

            <?php if (have_rows('footer', 'options')) :
                while (have_rows('footer', 'options')) : the_row();
                    if (have_rows('faq', 'options')) : ?>
                        <div class="row gx-3 gy-4">
                            <?php while (have_rows('faq', 'options')) : the_row(); ?>
                                <div class="col-12 col-lg-4">
                                    <div class="bg-primary-light rounded-7 px-4 pt-5 pb-4 h-100 text-white position-relative">
                                        <svg class="question-icon" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20.5827" cy="20.5104" r="20.4982" fill="#DD1E26" />
                                            <g clip-path="url(#clip0_226_638)">
                                                <path d="M20.5828 6.01074C12.6078 6.01074 6.08276 12.5357 6.08276 20.5107C6.08276 28.4857 12.6078 35.0107 20.5828 35.0107C28.5578 35.0107 35.0828 28.4857 35.0828 20.5107C35.0828 12.5357 28.5578 6.01074 20.5828 6.01074ZM20.5828 29.5732C19.5823 29.5732 18.7703 28.7612 18.7703 27.7607C18.7703 26.7602 19.5823 25.9482 20.5828 25.9482C21.5833 25.9482 22.3953 26.7602 22.3953 27.7607C22.3953 28.7612 21.5833 29.5732 20.5828 29.5732ZM23.5245 20.6775C22.6236 21.4514 22.3953 21.7124 22.3953 22.3232C22.3953 23.3256 21.5833 24.1357 20.5828 24.1357C19.5823 24.1357 18.7703 23.3256 18.7703 22.3232C18.7703 19.9779 20.2112 18.7417 21.1664 17.9243C22.0672 17.154 22.2956 16.8912 22.2956 16.2822C22.2956 15.9505 22.2956 15.0732 20.5846 15.0732C19.7943 15.1167 18.9515 15.4792 18.3045 16.0901C17.5776 16.7752 16.4285 16.7407 15.7416 16.0157C15.0546 15.2871 15.0873 14.1398 15.8159 13.4529C17.0883 12.2548 18.7467 11.5425 20.4903 11.4519H20.4958C23.78 11.4519 25.9206 13.3931 25.9206 16.284C25.9206 18.6276 24.4796 19.8637 23.5263 20.6793L23.5245 20.6775Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_226_638">
                                                    <rect width="29" height="29" fill="white" transform="translate(6.08276 6.01074)" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <h4 class="fw-800 fs-14"><?= get_sub_field('question') ?></h4>
                                        <article class="fs-12 pt-3"><?= get_sub_field('answer') ?></article>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
            <?php endif;
                endwhile;
            endif; ?>
        </div>
    </section>

    <div class="container">
        <hr class="border-light">
    </div>

    <section class="footer-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-between gy-4">
                <div class="col-12 col-lg-4">
                    <div class="row align-items-center justify-content-center gy-4">
                        <div class="col-auto col-md-4">
                            <a href="<?= get_site_url() ?>">
                                <img src="<?= get_field('footer', 'options')['logo']['url'] ?>" alt="<?= bloginfo('name') ?>">
                            </a>
                        </div>
                        <div class="col-12 col-lg-8">
                            <p class="text-white fs-14 text-center text-lg-start">Copyright <?= date('Y') ?> <span class="px-4">|</span> <?= bloginfo('name') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-auto">
                    <div class="row justify-content-center gx-4">
                        <?php
                        if (have_rows('footer', 'options')) :
                            while (have_rows('footer', 'options')) : the_row();
                                if (have_rows('social', 'options')) : ?>
                                    <div class="col-auto">
                                        <div class="row align-items-center gx-2">
                                            <?php while (have_rows('social', 'options')) : the_row();
                                                $icon = get_sub_field('icon');
                                                $link = get_sub_field('link');
                                            ?>
                                                <div class="col-auto">
                                                    <a href="<?= $link ?>" class="">
                                                        <img src="<?= $icon['url'] ?>" alt="<?= bloginfo('name') ?>">
                                                    </a>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                        <?php
                                endif;
                            endwhile;
                        endif;
                        ?>
                        <div class="col-auto">
                            <a href="https://aiims.com.au/this-is-us/">
                                <img src="<?= get_site_url() ?>/wp-content/uploads/2023/08/aiims.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

<script>
    document.addEventListener('wpcf7mailsent', function(event) {
        if ('204' == event.detail.contactFormId) {
            location = '/thank-you';
        }
    }, false);
</script>

<?php wp_footer(); ?>

</body>

</html>