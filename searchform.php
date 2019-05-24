<div class="c-search search--footer">
  <form action="<?php echo home_url( '/' ); ?>" method="get">
    <label for="search-box" class="screen-reader-hide">Search</label>
    <input type="text" id="search-box" name="s" class="search__input" placeholder="Search…" value="<?php the_search_query(); ?>" />
    <button class="search__icon"><?php get_template_part('template-parts/vectors/search_icon'); ?></button>
  </form>
</div>
