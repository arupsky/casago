<?php
if (have_rows('hero')) :
    while (have_rows('hero')) : the_row();
?>
        <section class="hero">
            <div class="hero__container">
                <header class="hero-header">
                    <h1 class="hero-header__title" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
                        <?php the_sub_field('hero_header'); ?>
                    </h1>

                    <div data-aos="fade-up" data-aos-delay="350" data-aos-once="true" data-aos-anchor=".hero-header__title">
                        <a class="hero-header__btn js-smooth-scroll" href="#form">
                            <?php the_sub_field('hero_main_btn_text'); ?>
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 12">
                                <path d="m3.104 11.629 4.782-4.781a.841.841 0 0 0-.004-1.196L3.101.872a.84.84 0 0 0-1.192 0l-.791.8a.84.84 0 0 0 0 1.192l3.389 3.39-3.389 3.389a.84.84 0 0 0 0 1.191l.795.795a.84.84 0 0 0 1.191 0z" />
                            </svg>
                        </a>
                    </div>
                </header>
                <div class="hero-body">
                    <?php
                    if (have_rows('hero_cards')) :
                        while (have_rows('hero_cards')) : the_row();
                    ?>
                            <div class="hero-body__container">
                                <?php for ($i = 1; $i < 4; $i++) : ?>
                                    <?php
                                    if (have_rows('hero_card_' . $i)) :
                                        while (have_rows('hero_card_' . $i)) : the_row();
                                    ?>
                                            <div class="hero-card" data-aos="fade-up" data-aos-delay="450" data-aos-once="true" data-aos-anchor=".hero-header__title">
                                                <div class="hero-card__label"><?php the_sub_field('hero_card_tagline'); ?></div>
                                                <h2 class="hero-card__title"><?php the_sub_field('hero_card_headline'); ?></h2>
                                                <div class="hero-card__desc">
                                                    <p><?php the_sub_field('hero_card_content'); ?></p>
                                                </div>
                                                <a class="hero-card__btn js-smooth-scroll" href="#form">
                                                    <?php the_sub_field('hero_card_btn_text'); ?>
                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                                                        <path d="m1.577 9.595 4.3-4.336a.352.352 0 0 0 0-.498L1.578.425a.352.352 0 0 0-.498 0l-.58.58a.352.352 0 0 0 0 .499L3.97 5.01.499 8.517a.352.352 0 0 0 0 .498l.58.58c.138.138.36.138.498 0z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <ul class="hero-body-logos" data-aos="fade-up" data-aos-delay="750" data-aos-once="true" data-aos-anchor=".hero-header__title">
                        <?php
                        if (have_rows('hero_logos')) :
                            while (have_rows('hero_logos')) : the_row();
                        ?>
                                <?php for ($i = 1; $i < 6; $i++) : ?>
                                    <li class="hero-body-logos__item">
                                        <img src="<?php the_sub_field("hero_logo_" . $i); ?>" srcset="https://casago.com/wp-content/themes/Bizcor2018/images/sections/hero/entrepreneur@2x.png 2x" alt="Entrepreneur" draggable="false" />
                                    </li>
                                <?php endfor; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>