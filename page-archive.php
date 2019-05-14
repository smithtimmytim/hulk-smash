<?php
/*
* Template Name: Archive
*/
get_header(); ?>

<main class="main">
  <div class="page">
    <header class="page__header page__header--full">
    <h1 class="page-header__title" id="page-title">Archive</h1>
    <div class="page-header__description">
      <p>This site has been published since 2013, and has <strong><?php bpx_total_posts() ?></strong> entries.</p>
    </div>
  </header>

  <?php
    query_posts(array('nopaging' => 1, /* we want all posts, so disable paging. Order by date is default */));
    $prev_year = null;
    if ( have_posts() ) {
      while ( have_posts() ) {
          the_post();
          $this_year = get_the_date('Y');
          if ($prev_year != $this_year) {
              // Year boundary
              if (!is_null($prev_year)) {
                // A list is already open, close it first
                echo '</ul></section>';
              }
              echo '<section class="group-section"><h2 class="group__name">' . $this_year . '</h2><ul class="group__post-list group__post-list--2-col">';
          }
          echo '<li class="group-post__item group-post__item--bold"><a href="'. get_permalink() .'">' . get_the_title();
          if (get_field('rating')) {
            echo '&nbsp;';
            echo get_template_part('template-parts/vectors/svg_rating');
          }
          echo '</a><span class="group-post__meta-info">' . get_the_date('M d') . '</li>';
          $prev_year = $this_year;
      }
      echo '</ul></section>';
    }
  ?>


  </div>
</main>

<? get_footer(); ?>
