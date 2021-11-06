<?php
if (have_rows('ownership')) :
    while (have_rows('ownership')) : the_row();
?>
        <section class="ownership" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
            <header class="ownership__header">
                <h2 class="ownership__title"><?php the_sub_field('ownership_title'); ?></h2>
                <div class="ownership__desc">
                    <p><?php the_sub_field('ownership_description'); ?></p>
                </div>
            </header>
            <?php
            if (have_rows('ownership_item')) :
                while (have_rows('ownership_item')) : the_row();
            ?>
                    <ol class="ownership__body">

                        <?php for ($i = 1; $i < 7; $i++) : ?>
                            <?php if (have_rows('ownership_item_' . $i)) : ?>
                                <?php while (have_rows('ownership_item_' . $i)) : the_row(); ?>
                                    <li class="ownership-item">
                                        <h3 class="ownership-item__title"><?php the_sub_field('ownership_item_title'); ?></h3>
                                        <p class="ownership-item__desc"><?php the_sub_field('ownership_item_description'); ?></p>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endfor; ?>

                    </ol>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>
    <?php endwhile; ?>
<?php endif; ?>