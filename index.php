
<?php get_header(); ?>

<main class="main">
  <section class="posts">
    <?php
      if ( have_posts() ) {
        $post = $posts[0];
        $c = 0;
        while ( have_posts() ) {
    
          the_post(); ?>
          

          <?php 

            if ( has_post_format( 'status' )) {
              
              get_template_part('template-parts/content/status');

            } else {

              get_template_part('template-parts/content/content');

            }

          ?>

          <?php
          $c++;
          
          if ($c == 1) {
            get_template_part('template-parts/carbon_ad');
          } ?>
    
        <?php }
    }
    ?>
  </section>

  <div class="archive-link">
    <a href="/archive" class="btn btn--primary">Visit Full Archive</a>
  </div>
</main>



<?php get_footer(); ?>
