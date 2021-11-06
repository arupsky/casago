<?php
if (have_rows('investment')) :
    while (have_rows('investment')) : the_row();
?>

        <section class="investment" id="investment" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
            <header class="investment__header">
                <h2 class="investment__title"><?php the_sub_field('investment_title'); ?></h2>
                <div class="investment__desc">
                    <p><?php the_sub_field('investment_subtitle'); ?></p>
                </div>
            </header>
            <div class="investment__body">
                <?php
                if (have_rows('investment_card')) :
                    while (have_rows('investment_card')) : the_row();
                ?>
                        <div class="investment-card">
                            <?php
                            if (have_rows('investment_card_1')) :
                                while (have_rows('investment_card_1')) : the_row();
                            ?>
                                    <div class="investment-card__value"><?php the_sub_field('investment_card_value'); ?></div>
                                    <div class="investment-card__label"><?php the_sub_field('investment_card_label'); ?></div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="investment-card">
                            <?php
                            if (have_rows('investment_card_2')) :
                                while (have_rows('investment_card_2')) : the_row();
                            ?>
                                    <div class="investment-card__value"><?php the_sub_field('investment_card_value'); ?></div>
                                    <div class="investment-card__label"><?php the_sub_field('investment_card_label'); ?></div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>