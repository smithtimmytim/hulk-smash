<article class="<?php if (is_singular('post')) : ?>post<?php else: ?>posts__post<?php endif; ?> <?php if (is_linked_list()):?>format-link<?php else:?>format-post<?php endif; ?> p-body h-entry">
  <header class="post__header">
    <span class="post__category">
      <?php the_category(' '); ?>
      <?php if (get_field('episode_number')) : ?>
        <span class="post__podcast-name">The Bright Pixels Podcast № <?php the_field('episode_number'); ?></span>
      <?php endif; ?>

    </span>
    <h1 class="p-name">
      <?php if (is_linked_list()): ?>

        <a class="u-bookmark-of" href="<?php the_linked_list_link(); ?>"><?php the_title(); ?></a>&nbsp;<span class="link-arrow">→</span>

      <?php else: ?>

        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      
      <?php endif; ?>
    </h1>
    <?php if (get_field('subtitle')) : ?>
      <h2 class="post__subtitle"><?php echo theme_widont(get_field('subtitle')); ?></h2>
    <?php endif; ?>
    <div class="post__meta">
      <span class="post__author p-author">
        <?php the_author_posts_link(); ?>
      </span>
      <span class="post__date">
        <a href="<?php the_permalink(); ?>" class="u-url"><time class="dt-published"><?php echo get_the_date('M d, Y'); ?></time></a>
      </span>
      <?php if (comments_open()) : ?>
      <span class="post__comments-link">
        <a href="<?php the_permalink(); ?>#post-discussion">
          Discuss
          <?php if (get_comments_number() > 0 ) {
            echo '(' . get_comments_number() . ')';
          }
        ?>
        </a>
      </span>
      <?php endif; ?>
    </div>

    <?php if (get_field('rating')) : ?>
      <?php get_template_part('template-parts/vectors/svg_rating'); ?>
    <?php endif; ?>
  </header>

  <div class="e-content">
    <?php if (get_field('audio_url')) : ?>
      <div class="post__player">
        <audio id="main-audio" controls="controls" width="100%">
          <source src="<?php the_field('audio_url'); ?>" type="audio/mpeg">
        </audio>
        <small>Proudly hosted by <a href="https://transistor.fm/?via=timothy">Transistor</a></small>
      </div>
    <?php endif; ?>
    <?php the_content(); ?>
  </div>

  <?php if (is_singular('post')) : ?>
    <footer class="post__footer">

      <?php if (has_tag()) {
        get_template_part('template-parts/series_aside');
      }
      ?>

      <?php if( get_field('letterboxd_url')) : ?>
        <p class="letterboxd__link"><?php get_template_part('template-parts/vectors/letterboxd_icon'); ?><em>Read this review on <a href="<?php the_field('letterboxd_url') ?>" title="Read my review of ‘<?php the_title(); ?>’ on Letterboxd">Letterboxd</a></em></p>
      <?php endif; ?>

      <div class="post__share">
        <button id="share-button" class="post__share-button">
          <?php get_template_part('template-parts/vectors/share_icon'); ?>
          Share
        </button>
      </div>
      
      <?php get_template_part('template-parts/newsletter_form'); ?>

      <section class="post__related-posts">
        <?php if ( function_exists( 'echo_crp' ) ) { echo_crp(); } ?>
      </section>
      
      <?php if (comments_open() || get_comments_number() > 0) : ?>
        <section id="post-discussion" class="post__comments">
          <h2 class="comments__title">Discussion</h2>

          <button id="show-comments" class="btn btn--xsmall btn--primary btn--outline btn--icon">
            <?php
              if (get_comments_number() > 0 ) {
                get_template_part('template-parts/vectors/comment_icon');
                echo 'Show Discussion ';
                echo '(' . get_comments_number() . ')';
              } else {
                get_template_part('template-parts/vectors/comment_icon');
                echo 'Start the Conversation';
              }
            ?>
          </button>
          
          <div class="post-comments__comments">
           <?php comments_template(); ?>
          </div>
          
        </section>
      <?php endif; ?>
    </footer>
  <?php endif; ?>

</article>
