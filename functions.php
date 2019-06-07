<?php

/* Hulk Smash functions and definitions

*/

add_theme_support( 'post-thumbnails' ); 

function _themename_assets() {
  wp_enqueue_style( '_themename-stylesheet', get_template_directory_uri() . '/dist/css/hulk-smash.css', array(), '2019.3', 'all' );

  wp_enqueue_script( '_themename-scripts', get_template_directory_uri() . '/dist/js/hulk-smash.js', array(), '2019.3', true );
}
add_action('wp_enqueue_scripts', '_themename_assets');

function wpdocs_excerpt_more( $more ) {
  return '…<a href="'.get_the_permalink().'" class="post-list__more" rel="nofollow"><span class="caps">More</span></a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function wpdocs_custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function bpx_total_posts() { 
  $total = wp_count_posts()->publish;
  echo $total;
}

// Theme Widont
function theme_widont( $str = '' ) {

  // Strip spaces.
  $str = trim( $str );
  // Find the last space.
  $space = strrpos( $str, ' ' );

  // If there's a space then replace the last on with a non breaking space.
  if ( false !== $space ) {
    $str = substr( $str, 0, $space ) . '&nbsp;' . substr( $str, $space + 1 );
  }

  // Return the string.
  return $str;
}

?>
