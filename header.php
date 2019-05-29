<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <!--
    How much does a polar bear weigh? Just enough to break the ice.
    Made with love in Oceanside, California.
  -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php is_home() ? bloginfo('description') : wp_title(''); ?><?php if (is_singular('post')) : ?><?php if (get_field('rating')) : ?> <?php get_template_part('template-parts/head_rating'); ?><?php endif; ?><?php endif; ?> // Bright Pixels</title>

  <!-- DNS Prefetch -->
  <link rel="dns-prefetch" href="https://cloud.typography.com" />

  <!-- Indie Web -->
  <link rel="me" href="https://twitter.com/smithtimmytim" />
  <link rel="me" href="https://github.com/smithtimmytim" />
  <link rel="me" href="https://www.linkedin.com/in/smithtimmytim" />
  <link rel="me" href="https://www.flickr.com/photos/smithtimmytim" />
  <link rel="me" href="https://micro.blog/smith" />
  <link rel="me" href="https://twitter.com/brightpxblog" />

  <!-- Site Icons -->
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png" />
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">


  <!-- RSS Feeds -->
  <link rel="alternate" type="application/rss+xml" title="Master Feed for Bright Pixels" href="https://feedpress.me/brightpixels" />

  <!-- preload the fonts -->
  <link
    as="style"
    href="https://cloud.typography.com/7114076/6025012/css/fonts.css"
    onload="this.rel='stylesheet'"
    rel="preload"
  />
  
  <!-- non-JS fallback -->	
  <noscript>
    <link
      href="https://cloud.typography.com/7114076/6025012/css/fonts.css"
      media="screen"
      rel="stylesheet"
      type="text/css"
    />
  </noscript>

  <!-- Night Mode Stuff -->
  <script>
    ;(function (window, document, undefined) {
      'use strict';
      if (!('localStorage' in window)) return;
      var nightMode = localStorage.getItem('nightMode');
      if (!nightMode) return;
      document.documentElement.className += ' night-mode';
    })(window, document);
  </script>

  <?php wp_head(); ?>
</head>

<body>


<div class="header__topics">
  <button id="topics-close" class="header-topics__close">&times; <span class="caps">Close</span></button>
  <h2 class="header-topics__title">Browse by Section</h2>
  <ul>
    <?php wp_list_categories( array(
      'order'      => 'DESC',
      'orderby'    => 'count',
      'show_count' => true,
      'title_li'   => ''
    )); ?>
  </ul>
</div>

<header class="header">
  <div class="header__wrap">
    <a href="/" class="logo-monogram">
      <?php get_template_part('template-parts/vectors/logo_monogram'); ?>
    </a>

    <nav class="header__navigation">
      <ul>
        <li class="topics-menu">
          <button id="topics-toggle" class="topics-menu__label">Sections</button>       
        </li>
        <li><a class="header__subscribe" href="/subscribe/">Subscribe</a></li>
        <li>
          <button id="dark-mode-toggle" class="header__mode-toggle">
           <?php get_template_part('template-parts/vectors/sun_icon'); ?>
          </button>
        </li>
      </ul>
    </nav>
  </div>
</header>
