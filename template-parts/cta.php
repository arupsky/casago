<?php
if (have_rows('cta')) :
    while (have_rows('cta')) : the_row();
?>
        <section class="cta" id="form" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
            <div class="cta__container">
                <div class="cta__content">
                    <div class="cta__logo"><img src="<?php the_sub_field('cta_logo'); ?>" alt="Casago - homes on the go" /></div>
                    <h2 class="cta__title"><?php the_sub_field('cta_title'); ?></h2>
                    <div class="cta__desc">
                        <?php the_sub_field('cta_description'); ?>
                    </div>
                </div>
                <div class="cta__form"><iframe src="<?php the_sub_field('cta_from_source'); ?>" style="border: none; width: 100%;" scrolling="no" id="gitwH8IvmThWgTLPg7Q5"></iframe></div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>