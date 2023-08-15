<section class="part-about">
    <div class="container">
        <div class="row gx-xl-5 align-items-center">
            <div class="col-12 col-md-7">
                <article class="animated-image-wrapper position-relative d-flex justify-content-center align-items-center">
                    <img src="http://localhost/crystal_hot_water/wp-content/uploads/2023/08/hot-water-system-bathtub.jpg" class="w-100 rounded-11 object-fit-cover h-100" alt="">
                    <img src="<?= get_template_directory_uri() ?>/images/lib/cloud.gif" class="animated-image" alt="<?= bloginfo('name') ?>">
                </article>
            </div>
            <div class="col-12 col-md-5">
                <h2 class="fs-60 highlight-primary text-capitalize fw-800 lh-1">
                    Our hot water system <span>Expertise is crystal clear</span>
                </h2>
                <p class="fw-500 py-4">
                    Our hot water technicians are all professional, well-trained and friendly, <strong>offering high quality customer service to all customers 24/7</strong>
                </p>
                <div class="row g-2">
                    <div class="col-6">
                        <button class="w-100 bg-transparent">
                            <a href="#" class="btn btn-primary fw-700 d-flex w-100 text-white">Contact Our Team</a>
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
    </div>
</section>