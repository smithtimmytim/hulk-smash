<aside class="post__series">
  <div class="series__text">
    <h4 class="series__title">
      <small>Series</small>
      <?php
        $posttags = get_the_tags();
        if ($posttags) {
          foreach($posttags as $tag) {
            echo $tag->name . '</h4>'; 
            echo '<p>' . $tag->description . '</p>';
          }
        }
      ?>  
  </div>
  <ul class="series-list">
    <?php
      
      $current_id = $post->ID; 

      foreach($posttags as $tag) {
        $query = new WP_Query( array (
          'tag_id' => $tag->term_id,
          'posts_per_page' => '6'
        ));
        
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();

            if ( $current_id == $post->ID ) {
              echo '<li><strong>' . get_the_title() . '</strong></li>';
            
            } else {
              echo '<li><a href="' . get_permalink() . '" title="Permalink to' . get_the_title() . '">' . get_the_title() . '</a></li>';
            }
          }
        }
        echo '</ul>';
        if ($query->found_posts > 6 ) {
          echo '<a class="series__link" href="' . get_tag_link($tag->term_id) . '">Browse More in This Series</a>';
        }
      }
    ?>

</aside>
