<?php
if (have_rows('faq')) :
    while (have_rows('faq')) : the_row();
?>

        <section class="faq" id="faq" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
            <div class="faq__container">
                <header class="faq__header">
                    <h2 class="faq__title"><?php the_sub_field('faq_title'); ?></h2>
                </header>

                <?php
                if (have_rows('faq_card')) :
                    while (have_rows('faq_card')) : the_row();
                ?>
                        <div class="faq__body">
                            <?php $faq_no = get_sub_field('faq_card_number'); ?>
                            <?php for ($i = 1; $i < $faq_no + 1; $i++) : ?>
                                <?php if (have_rows('faq_card_' . $i)) : ?>
                                    <?php while (have_rows('faq_card_' . $i)) : the_row(); ?>
                                        <div class="faq-card">
                                            <h3 class="faq-card__header"><button class="faq-card__btn" type="button"><?php the_sub_field('faq_card_title'); ?></button></h3>
                                            <div class="faq-card__desc">
                                                <p><?php the_sub_field('faq_card_description'); ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endfor; ?>

                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <footer class="faq__footer">
                    <p class="faq__question"><?php the_sub_field('faq_question'); ?></p>
                    <a class="faq__btn js-smooth-scroll" href="#form">
                        <?php the_sub_field('faq_question_btn_text'); ?>
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                            <path d="m1.102 9.916 4.3-4.336a.352.352 0 0 0 0-.498L1.103.746a.352.352 0 0 0-.498 0l-.58.58a.352.352 0 0 0 0 .498L3.495 5.33.024 8.838a.352.352 0 0 0 0 .498l.58.58c.137.137.36.137.498 0z" />
                        </svg>
                    </a>
                </footer>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>