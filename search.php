<?php get_header(); ?>

<main class="main">
  <div class="p-body">

    <header class="page__header">

      <p><strong><span class="caps">Search Results</span></strong></p>

      <div class="c-search search--page">
        <form action="/" method="get">
          <label for="search-box" class="screen-reader-hide">Search</label>
          <input type="text" id="search-box" name="s" class="search__input" placeholder="Search…" value="<?php the_search_query(); ?>" autofocus>
          <button class="search__icon"><?php get_template_part('template-parts/vectors/search_icon'); ?></button>
        </form>
      </div>

      <div class="page-header__description">
        <?php $allsearch = new WP_Query("s=$s&showposts=0"); ?>
        <p>Found <?php echo $allsearch ->found_posts ?> results</p>
      </div>
    </header>

    <?php if (have_posts()) : while (have_posts()) : the_post();
      
      get_template_part('template-parts/content/excerpt');
    endwhile; 
      ?>
    
    <?php else : ?>
      <div class="text">
        <p>No posts found. Try a different search?</p>
      </div>
    <?php endif; ?>


  </div>
</main>

<?php get_footer(); ?>
