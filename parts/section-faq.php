<?php if (have_rows('faqs')) : ?>
    <section class="faqs pt-8 pb-10">
        <div class="container">
            <h2 class="fs-60 fw-800 text-center highlight-primary text-capitalize pb-7">Our <span>Frequently Asked Questions</span></h2>
            <div class="accordion-container">
                <?php
                $index = 1;
                while (have_rows('faqs')) : the_row();
                    $question = get_sub_field('question');
                    $answer = get_sub_field('answer');
                ?>
                    <div class="accordion-card">
                        <div class="accordion-head<?= ($index == 1) ? " active" : ""; ?>">
                            <div class="row g-0 w-100 justify-content-between">
                                <div class="col h-inherit">
                                    <?= $question ?>
                                </div>
                                <div class="col-auto h-inherit">
                                    <div class="plusminus">
                                        <?php if ($index == 1) { ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 32 20" fill="none">
                                                <path d="M0.251953 19.2454L0.251953 12.0247L16.0733 0.43678L16.0733 7.65749L0.251953 19.2454Z" fill="white" />
                                                <path d="M31.8945 19.2454L31.8945 12.0247L16.0732 0.436778L16.0732 7.65749L31.8945 19.2454Z" fill="white" />
                                            </svg>
                                        <?php } else { ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 32 20" fill="none">
                                                <path d="M0.251953 0.606812L0.251953 7.82752L16.0733 19.4154L16.0733 12.1947L0.251953 0.606812Z" fill="#DD1E26" />
                                                <path d="M31.8945 0.606812L31.8945 7.82752L16.0732 19.4154L16.0732 12.1947L31.8945 0.606812Z" fill="#DD1E26" />
                                            </svg>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-body" style="<?= ($index == 1) ? 'display: block;' : ''; ?>">
                            <?= $answer ?>
                        </div>
                    </div>
                <?php
                    $index++;
                endwhile;
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>