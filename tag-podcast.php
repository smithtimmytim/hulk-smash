<?php
  get_header(); ?>

<main class="main">
  <div class="p-body">
    <?php if ( have_posts() ) : ?>
      <header class="page__header">
        <h1 class="page-header__title" id="page-title">
          <?php
            single_cat_title();
          ?>
          <small>
            <?php
              echo $wp_query->found_posts;
            ?>
          </small>
        </h1>
        
        <?php if (get_the_archive_description()) : ?>
          <?php 
            the_archive_description('<div class="page-header__description">', '</div>');
          ?>
        <?php endif; ?>

        <?php get_template_part('template-parts/podcast_subscribe_links'); ?>
      </header>

      <?php
      // Start the Loop.
      while ( have_posts() ) :
        the_post();

        get_template_part('template-parts/content/content');

      endwhile;
    endif;
    ?>

    <?php wp_pagenavi(); ?>
  </div>
</main>

<?php get_footer(); ?>
