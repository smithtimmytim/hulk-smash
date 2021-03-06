<?php

/* Hulk Smash functions and definitions

*/

add_theme_support( 'post-thumbnails' );

add_theme_support( 'post-formats', array( 'status' ) ); 

function _themename_assets() {
  wp_enqueue_style( '_themename-stylesheet', get_template_directory_uri() . '/dist/css/hulk-smash.css', array(), '2020.002', 'all' );

  wp_enqueue_script( '_themename-scripts', get_template_directory_uri() . '/dist/js/hulk-smash.js', array(), '2020.002', true );
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

function urlToDomain($url) {
   return implode(array_slice(explode('/', preg_replace('/https?:\/\/(www\.)?/', '', $url)), 0, 1));
}

add_action('init', 'newsletterRSS');
function newsletterRSS() {
  add_feed('newsletter', 'newsletterRSSFunc');
}

function newsletterRSSFunc() {
  get_template_part('rss', 'newsletter');
}

// Comment Replies
function wpse218049_enqueue_comments_reply() {

  if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
    // Load comment-reply.js (into footer)
    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
  }
  
}
add_action(  'wp_enqueue_scripts', 'wpse218049_enqueue_comments_reply' );

?>
