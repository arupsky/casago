<?php
if (have_rows('audience')) :
    while (have_rows('audience')) : the_row();
?>

        <section class="audiences" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
            <div class="audiences__container">
                <div class="audiences__content">
                    <div class="audiences__small-title"><?php the_sub_field('audience_tagline'); ?></div>
                    <h2 class="audiences__title"><?php the_sub_field('audience_title'); ?></h2>
                    <p class="audiences__desc"><?php the_sub_field('audience_content'); ?></p>
                    <a class="audiences__link" href="<?php the_sub_field('audience_btn_url'); ?>" target="_blank" rel="noreferrer noopener">
                        <?php the_sub_field('audience_btn_text'); ?>
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path d="M7.725 15.75A7.749 7.749 0 0 0 15.475 8 7.749 7.749 0 0 0 7.725.25 7.749 7.749 0 0 0-.025 8a7.749 7.749 0 0 0 7.75 7.75zm0-4.16V9.376H4.1A.376.376 0 0 1 3.725 9V7c0-.206.169-.375.375-.375h3.625V4.409c0-.334.403-.503.64-.265l3.572 3.594a.372.372 0 0 1 0 .528l-3.571 3.59a.375.375 0 0 1-.641-.265z" />
                        </svg>
                    </a>
                </div>
                <a class="audiences__illustration" style="background-image: url('<?php the_sub_field('audience_image'); ?>');" href="<?php the_sub_field('audience_btn_url'); ?>" target="_blank" rel="noreferrer noopener"></a>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>