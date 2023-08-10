<footer class="bg-primary">
    <section class="footer-top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <a href="<?= get_site_url() ?>">
                        <img src="<?= get_field('footer_logo', 'options')['url'] ?>" alt="<?= bloginfo('name') ?>">
                    </a>
                </div>
                <div class="col-4">
                    <div class="row g-2">
                        <div class="col-6">
                            <button class="w-100 bg-transparent">
                                <a href="#" class="btn btn-secondary fw-700 d-flex w-100 text-white">Contact Our Team</a>
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="w-100 bg-transparent">
                                <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-secondary fw-700 d-flex w-100 text-white"><?= get_field('phone_number', 'options') ?></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-6 text-white">
                <div class="col-2">
                    <p class="fw-700 pb-4">Popular Links</p>

                    <ul class="menu_list">
                        <li><a href="" class="text-white">Home</a></li>
                        <li><a href="" class="text-white">About Us</a></li>
                        <li><a href="" class="text-white">Locations</a></li>
                        <li><a href="" class="text-white">Shop</a></li>
                        <li><a href="" class="text-white">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-5">
                    <p class="fw-700 pb-4">Our Services</p>

                    <ul class="menu_list columns-2">
                        <li><a href="" class="text-white">Hot Water Installation</a></li>
                        <li><a href="" class="text-white">Hot water replacement</a></li>
                        <li><a href="" class="text-white">Hot water repairs</a></li>
                        <li><a href="" class="text-white">Emergency hot water repairs</a></li>
                        <li><a href="" class="text-white">Gas leak Detection</a></li>
                        <li><a href="" class="text-white">Retractable garden hose installation</a></li>
                        <li><a href="" class="text-white">Water filters</a></li>
                        <li><a href="" class="text-white">Room heaters (Supply and Install)</a></li>
                        <li><a href="" class="text-white">Zip & Billi Filter water</a></li>
                    </ul>
                </div>

                <div class="col-3">
                    <p class="fw-700 pb-4">Shop</p>

                    <ul class="menu_list">
                        <li><a href="" class="text-white">Electric Instantaneous</a></li>
                        <li><a href="" class="text-white">Electric Storage</a></li>
                        <li><a href="" class="text-white">Gas Continuous Hot Water System</a></li>
                        <li><a href="" class="text-white">Gas Storage Hot Water System</a></li>
                        <li><a href="" class="text-white">Heat Pump</a></li>
                        <li><a href="" class="text-white">Solar Hot Water System</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <p class="fw-700 pb-4">Support</p>

                    <ul class="menu_list">
                        <li><a href="" class="text-white">Contact</a></li>
                        <li><a href="" class="text-white">Privacy Policy</a></li>
                        <li><a href="" class="text-white">Refund Policy</a></li>
                        <li><a href="" class="text-white">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>

            <div class="row gx-3 gy-4">
                <div class="col-4">
                    <article class="bg-primary-light rounded-7 px-4 pt-5 pb-4 h-100 text-white position-relative">
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

                        <h4 class="fw-800 fs-14">What are the common causes of hot water system failures?</h4>
                        <p class="fs-12 pt-3">Common causes of hot water system failures include corrosion, minueral buildup, and faulty heating elements. Regular maintenance can help prevent these problems and extend the lifespan of your hot water system.</p>
                    </article>
                </div>
                <div class="col-4">
                    <article class="bg-primary-light rounded-7 px-4 pt-5 pb-4 h-100 text-white position-relative">
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

                        <h4 class="fw-800 fs-14">What are the common causes of hot water system failures?</h4>
                        <p class="fs-12 pt-3">Common causes of hot water system failures include corrosion, minueral buildup, and faulty heating elements. Regular maintenance can help prevent these problems and extend the lifespan of your hot water system.</p>
                    </article>
                </div>
                <div class="col-4">
                    <article class="bg-primary-light rounded-7 px-4 pt-5 pb-4 h-100 text-white position-relative">
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

                        <h4 class="fw-800 fs-14">What are the common causes of hot water system failures?</h4>
                        <p class="fs-12 pt-3">Common causes of hot water system failures include corrosion, minueral buildup, and faulty heating elements. Regular maintenance can help prevent these problems and extend the lifespan of your hot water system.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <hr class="border-light">
    </div>

    <section class="footer-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-4">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <a href="<?= get_site_url() ?>">
                                <img src="<?= get_field('footer_logo', 'options')['url'] ?>" alt="<?= bloginfo('name') ?>">
                            </a>
                        </div>
                        <div class="col-8">
                            <p class="text-white fs-14">Copyright <?= date('Y') ?> <span class="px-4">|</span> <?= bloginfo('name') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="row">
                        <div class="col-auto">
                            <a href="https://aiims.com.au/">
                                <img src="<?= get_site_url() ?>/wp-content/uploads/2023/08/aiims.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>

</body>

</html>