<article class="<?php if (is_singular('post')) : ?>post<?php else: ?>posts__post<?php endif; ?> format-status p-body h-entry">

  <div class="e-content">
    <?php the_content(); ?>
  </div>

  <header class="post__header">
    <div class="post__meta">
      
      <span class="post__date">
        <a href="<?php the_permalink(); ?>" class="u-url"><time class="dt-published"><?php echo get_the_date('g:ia · M d, Y'); ?></time></a>
      </span>
    </div>
  </header>

  <?php if (is_singular('post')) : ?>
    <footer class="post__footer">
      
      <?php if (comments_open() || get_comments_number() > 0) : ?>
        <section id="post-discussion" class="post__comments">
          <h2 class="comments__title">Discussion</h2>
          
          <div class="post-comments__comments">
           <?php comments_template(); ?>
          </div>
          
        </section>
      <?php endif; ?>
      
      <?php get_template_part('template-parts/carbon_ad'); ?>
    </footer>
  <?php endif; ?>

</article>
