
<?php get_header(); ?>

<main class="main">
  <section class="posts">
    <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
    
          the_post(); ?>

          <?php get_template_part('template-parts/content/content'); ?>
    
        <?php }
    }
    ?>
  </section>

  <div class="archive-link">
    <a href="/archive" class="btn btn--primary">Visit Full Archive</a>
  </div>
</main>



<?php get_footer(); ?>
