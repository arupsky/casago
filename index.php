<?php get_header(); ?>

<main id="primary" class="site-main">

  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post(); ?>
      <article <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <?php
          the_content();
          ?>
        </div><!-- .entry-content -->
      </article>


  <?php
    endwhile;

  endif;
  ?>

</main><!-- #main -->

<?php get_footer(); ?>