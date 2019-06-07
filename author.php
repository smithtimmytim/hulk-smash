<?php
  get_header(); ?>

  <main class="main">
    <div class="page">

      <?php
        $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
      ?>

      <header class="author author--single">
        
        <?php if (get_field('author_avatar', 'user_'. $curauth->ID )) : ?>
          <img src="<?php the_field('author_avatar', 'user_'. $curauth->ID ); ?>" alt="" class="avatar photo"  />
        <?php else : ?>
          <?php echo get_avatar( $curauth->user_email, 400 ); ?>
        <?php endif; ?>

        <div class="author__text-info">
          
          <h1 id="page-title" class="author__name"><?php echo $curauth->display_name; ?></h1>

          <h2 class="author__title"><?php echo theme_widont($curauth->description); ?></h2>

          <ul class="author__profiles slash-list">
            <?php 
              $author_url = $curauth->user_url;
            ?>
            <li><a href="<?php echo $curauth->user_url; ?>"><?php echo urlToDomain($author_url); ?></a></li>
            <?php if (get_field('twitter_username', 'user_'. $curauth->ID )): ?>
              <li><a href="https://twitter.com/<?php the_field('twitter_username', 'user_'. $curauth->ID); ?>">@<?php the_field('twitter_username', 'user_'. $curauth->ID); ?></a></li>
            <?php endif; ?>
          </ul>

        </div>

      </header>

      <?php
        
        $query = new WP_Query( array( 
          'author'   => $curauth->ID, 
          'nopaging' => 1 
        ));
        $prev_year = null;
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
              $query->the_post();
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


<?php get_footer(); ?>
