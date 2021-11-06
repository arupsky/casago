<?php
if (have_rows('university')) :
    while (have_rows('university')) : the_row();
?>

        <section class="university" id="university" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
            <div class="university__container">
                <div class="university__content">
                    <div class="university__label"><?php the_sub_field('university_tagline'); ?></div>
                    <h2 class="university__title"><?php the_sub_field('university_title'); ?></h2>
                    <div class="university__desc">
                        <p>
                            <?php the_sub_field('university_content'); ?>
                        </p>
                    </div>
                    <a class="university__btn js-smooth-scroll" href="#form">
                        <?php the_sub_field('university_btn_text'); ?>
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                            <path d="m1.102 9.916 4.3-4.336a.352.352 0 0 0 0-.498L1.103.746a.352.352 0 0 0-.498 0l-.58.58a.352.352 0 0 0 0 .498L3.495 5.33.024 8.838a.352.352 0 0 0 0 .498l.58.58c.137.137.36.137.498 0z" />
                        </svg>
                    </a>
                </div>
                <figure class="university__illustration">
                    <img src="<?php the_sub_field('university_image'); ?>" srcset="https://casago.com/wp-content/themes/Bizcor2018/images/sections/about/about@2x.jpg 2x" alt="" />
                </figure>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>