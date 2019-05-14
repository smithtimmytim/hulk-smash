<?php get_header(); ?>

<main class="main">
  <?php
    while( have_posts() ) :
      the_post();

      get_template_part('template-parts/content/content');

    endwhile;
  ?>
</main>

<?php get_footer(); ?>
