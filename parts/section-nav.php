<header>
    <section class="slide-nav d-flex flex-column justify-content-between py-4">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-5">
                    <img src="<?= get_field('footer', 'options')['logo']['url'] ?>" alt="<?= get_field('footer', 'options')['logo']['alt'] ?>">
                </div>
                <div class="col-auto">
                    <button id="close-slidenav" class="bg-transparent border-0">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.68637 1.41421C2.46742 0.633165 3.73375 0.633165 4.5148 1.41421L24.3138 21.2132C25.0948 21.9943 25.0948 23.2606 24.3138 24.0416C23.5327 24.8227 22.2664 24.8227 21.4854 24.0416L1.68637 4.24264C0.905324 3.46159 0.905324 2.19526 1.68637 1.41421Z" fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.68619 24.0417C0.905138 23.2606 0.905138 21.9943 1.68619 21.2132L21.4852 1.41424C22.2662 0.633189 23.5326 0.63319 24.3136 1.41424C25.0947 2.19529 25.0947 3.46162 24.3136 4.24267L4.51461 24.0417C3.73356 24.8227 2.46723 24.8227 1.68619 24.0417Z" fill="white" />
                        </svg>
                    </button>
                </div>
            </div>
            <?php wp_nav_menu(array(
                'menu' => 'Primary Menu',
                'menu_class' => 'navbar-nav',
                'item_class' => 'nav-item',
                'link_class' => 'nav-link text-white',
                'container_class' => 'primary_menu py-5',
                'container_id' => '',
            )); ?>

            <div class="row align-items-center gx-2">
                <div class="col-6">
                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-white rounded-2 text-dark px-0 d-flex justify-content-center align-items-center">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 6.96151H14.6078C14.6061 5.48498 14.0188 4.06939 12.9748 3.02532C11.9308 1.98125 10.5153 1.39396 9.03879 1.3923V0C10.8844 0.00202691 12.6538 0.736121 13.9589 2.04122C15.2639 3.34632 15.998 5.11583 16 6.96151Z" fill="#0383BF" />
                            <path d="M13.2155 6.96151H11.8233C11.8233 6.22299 11.5299 5.51472 11.0077 4.9925C10.4855 4.47029 9.77728 4.17691 9.03879 4.17691V2.78461C10.1462 2.78571 11.2079 3.22613 11.991 4.00921C12.774 4.7923 13.2144 5.85407 13.2155 6.96151Z" fill="#0383BF" />
                            <path d="M10.0983 10.074L8.47354 11.6752L4.32535 7.52679L5.92643 5.90197C6.02326 5.80347 6.08859 5.67839 6.11413 5.54265C6.13967 5.40691 6.12425 5.26664 6.06983 5.13969L4.40262 1.2482C4.33672 1.09475 4.21785 0.9701 4.06769 0.897C3.91754 0.8239 3.74611 0.80722 3.58468 0.850001L0.521749 1.65893C0.368717 1.69853 0.233719 1.78903 0.138957 1.91555C0.0441956 2.04207 -0.00468542 2.19708 0.000354074 2.35508C0.195155 5.91512 1.67532 9.28348 4.16594 11.8346C6.71774 14.3257 10.087 15.8057 13.6478 15.9996C13.8058 16.0047 13.9608 15.9558 14.0873 15.861C14.2138 15.7663 14.3043 15.6313 14.3439 15.4782L15.1528 12.4152C15.1956 12.2537 15.1789 12.0823 15.1058 11.9321C15.0327 11.782 14.9081 11.6631 14.7546 11.5972L10.8633 9.9299C10.736 9.87497 10.5951 9.85933 10.4588 9.88501C10.3225 9.91069 10.1969 9.9765 10.0983 10.074Z" fill="#0383BF" />
                        </svg>
                        <span class="ps-2"><?= get_field('phone_number', 'options') ?></span>
                    </a>
                </div>
                <div class="col-6">
                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-secondary rounded-2 text-white d-flex justify-content-center align-items-center">
                        Book Online
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="hero_nav bg-primary">
        <div class="container position-relative">
            <a href="<?= home_url() ?>" class="position-absolute top-0">
                <img src="<?= get_field('logo', 'options')['url'] ?>" alt="<?= get_field('logo', 'options')['alt'] ?>">
            </a>
            <div class="row py-3 py-md-4 justify-content-between align-items-center">
                <div class="col-2">
                </div>
                <div class="col">
                    <nav class="navbar navbar-expand-xl navbar-light">
                        <div class="collapse navbar-collapse" id="mainNav">
                            <?php
                            wp_nav_menu(array(
                                'menu' => 'Primary Menu',
                                'menu_class' => 'navbar-nav justify-content-around',
                                'item_class' => 'nav-item',
                                'link_class' => 'nav-link text-white fw-500',
                                'container_class' => 'primary_menu w-100',
                                'container_id' => '',
                            ));
                            ?>
                        </div>
                    </nav>
                </div>
                <div class="col-auto col-md-6 col-lg-4">
                    <div class="row align-items-center gx-md-2 d-none d-md-flex">
                        <div class="col-6">
                            <a href="<?= get_site_url() ?>/contact-us" class="btn btn-white fw-700 d-flex w-100 text-primary">
                                Contact Our Team
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-white fw-700 d-flex w-100 text-primary">
                                <?= get_field('phone_number', 'options') ?>
                            </a>
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-between gx-2 d-md-none">
                        <div class="col-auto">
                            <a href="tel:<?= get_field('phone_number', 'options') ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <g clip-path="url(#clip0_161_652)">
                                        <path d="M16.5432 14.4651L13.147 12.8809C12.7941 12.7152 12.3989 12.6768 12.023 12.7718C11.6472 12.8668 11.3119 13.0897 11.0695 13.4059L10.0907 14.6908C8.48609 13.6097 7.12014 12.1808 6.08446 10.5L7.30821 9.47231C7.60903 9.21783 7.8212 8.86599 7.91164 8.47165C8.00208 8.07731 7.96572 7.66262 7.80821 7.29225L6.30821 3.717C6.13994 3.31889 5.84245 2.99649 5.46881 2.8073C5.09517 2.61811 4.66967 2.57444 4.26821 2.68406L1.39321 3.47156C0.97658 3.58542 0.614536 3.85653 0.376317 4.23306C0.138097 4.60959 0.0404194 5.06511 0.101963 5.5125C0.637712 9.41681 2.36329 13.0339 5.02041 15.8225C7.67754 18.6111 11.1233 20.4211 14.842 20.9816C15.2681 21.045 15.7016 20.9412 16.0595 20.6901C16.4174 20.439 16.6746 20.0582 16.782 19.6206L17.532 16.6018C17.6363 16.1804 17.594 15.7337 17.4128 15.342C17.2315 14.9504 16.9232 14.6394 16.5432 14.4651Z" fill="white" />
                                        <path d="M12.5845 10.5C12.5845 10.8481 12.7162 11.1819 12.9506 11.4281C13.185 11.6742 13.503 11.8125 13.8345 11.8125C14.166 11.8125 14.4839 11.6742 14.7184 11.4281C14.9528 11.1819 15.0845 10.8481 15.0845 10.5C15.0845 9.10761 14.5577 7.77226 13.62 6.78769C12.6823 5.80312 11.4106 5.25 10.0845 5.25C9.75295 5.25 9.43501 5.38828 9.20059 5.63442C8.96617 5.88056 8.83447 6.2144 8.83447 6.5625C8.83447 6.9106 8.96617 7.24444 9.20059 7.49058C9.43501 7.73672 9.75295 7.875 10.0845 7.875C10.7475 7.875 11.3834 8.15156 11.8522 8.64384C12.3211 9.13613 12.5845 9.80381 12.5845 10.5Z" fill="white" />
                                        <path d="M10.0845 0C9.75295 0 9.43501 0.138281 9.20059 0.384422C8.96617 0.630564 8.83447 0.964403 8.83447 1.3125C8.83447 1.6606 8.96617 1.99444 9.20059 2.24058C9.43501 2.48672 9.75295 2.625 10.0845 2.625C12.073 2.62708 13.9795 3.45744 15.3856 4.93384C16.7917 6.41023 17.5825 8.41206 17.5845 10.5C17.5845 10.8481 17.7162 11.1819 17.9506 11.4281C18.185 11.6742 18.503 11.8125 18.8345 11.8125C19.166 11.8125 19.4839 11.6742 19.7184 11.4281C19.9528 11.1819 20.0845 10.8481 20.0845 10.5C20.0815 7.71619 19.027 5.04729 17.1523 3.07883C15.2775 1.11038 12.7357 0.00312652 10.0845 0Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_161_652">
                                            <rect width="20" height="21" fill="white" transform="translate(0.0844727)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto">
                            <button class="bg-transparent border-0" id="open-slide-nav">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="21" viewBox="0 0 26 21" fill="none">
                                    <rect x="0.0844727" y="0.476562" width="25.145" height="3.82556" fill="white" />
                                    <rect x="0.0844727" y="8.43439" width="25.145" height="3.82556" fill="white" />
                                    <rect x="0.0844727" y="16.3922" width="25.145" height="3.82556" fill="white" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>