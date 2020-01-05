<article class="post-list">
  <div class="post__meta">
    <span class="post__author p-author">
        <?php the_author_posts_link(); ?>
      </span>
      <span class="post__date">
        <a href="<?php the_permalink(); ?>" class="u-url"><time class="dt-published"><?php echo get_the_date('M j, Y'); ?></time></a>
      </span>
  </div>
  <?php if (get_the_title()) : ?><h2 class="post-list__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><? if (get_field('rating')) : ?><?php get_template_part('template-parts/vectors/svg_rating'); ?><?php endif; ?></a></h2><?php endif; ?>
  <?php the_excerpt(); ?>
</article>
