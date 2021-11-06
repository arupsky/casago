<?php
if (have_rows('support')) :
    while (have_rows('support')) : the_row();
?>

        <section class="support" id="support" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
            <header class="support__header">
                <h2 class="support__title"><?php the_sub_field('support_title'); ?></h2>
                <div class="support__desc">
                    <p><?php the_sub_field('support_subtitle'); ?></p>
                </div>
            </header>
            <?php
            if (have_rows('support_card')) :
                while (have_rows('support_card')) : the_row();
            ?>
                    <div class="support__body">
                        <?php for ($i = 1; $i < 7; $i++) : ?>
                            <?php
                            if (have_rows('support_card_' . $i)) :
                                while (have_rows('support_card_' . $i)) : the_row();
                            ?>
                                    <article class="support-card">
                                        <div class="support-card__icon --<?php the_sub_field('support_card_icon_background_color'); ?>">
                                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
                                                <path d="<?php the_sub_field('support_card_icon_name'); ?>" />
                                            </svg>
                                        </div>
                                        <h3 class="support-card__title"><?php the_sub_field('support_card_title'); ?></h3>
                                        <div class="support-card__desc">
                                            <p><?php the_sub_field('support_card_content'); ?></p>
                                        </div>
                                    </article>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>

    <?php endwhile; ?>
<?php endif; ?>