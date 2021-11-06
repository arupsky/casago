<?php
if (have_rows('testimonial')) :
    while (have_rows('testimonial')) : the_row();
?>

        <section class="testimonial" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
            <blockquote class="testimonial__quote">
                <?php
                if (have_rows('testimonial_1')) :
                    while (have_rows('testimonial_1')) : the_row();
                ?>
                        <p><?php the_sub_field('testimonial_content'); ?></p>
                        <p>— <?php the_sub_field('testimonial_author'); ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
            </blockquote>
        </section>

    <?php endwhile; ?>
<?php endif; ?>