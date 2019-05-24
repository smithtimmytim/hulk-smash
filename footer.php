

<footer class="footer" role="contentinfo">

  <div class="footer__description">
    <a href="/" class="footer-logo">
      <?php get_template_part('template-parts/vectors/logo'); ?>
    </a>
    <p><em>Bright Pixels</em> is a weblog about comic books, Star Wars, movies, Apple, technology, and other geekery. If this is your first time 'round these parts, I recommend you read <span class="caps"><a href="/hello/">Hello&nbsp;World</a></span>.</p>
  </div>

  <div class="footer__topics">
    <h2>Browse by Section</h2>
    <ul>
      <?php wp_list_categories( array(
        'order'      => 'DESC',
        'orderby'    => 'count',
        'title_li'   => ''
      )); ?>
    </ul>
    
  </div>

  <div class="footer__about">
    <h2 class="slash-list__title">Site Links</h2>
    <ul class="slash-list">
      <li><a href="/about">About</a></li>
      <li><a href="/archive">Archive</a></li>
      <li><a href="/subscribe">Subscribe</a></li>
      <li><a href="/styleguide">Style Guide</a></li>
    </ul>
  </div>

  <div class="footer__blogroll">
    <h2>Blogroll</h2>
    <ul>
      <li><a href="https://robothive.net/"><em>Robot Hive</em></a> by Mike Haynes</li>
      <li><a href="https://thenewsprint.co/"><em>The Newsprint</em></a> by Joshua Ginter</li>
      <li><a href="https://laurakalbag.com/">Laura Kalbag</a></li>
      <li><a href="https://bitsofco.de/"><em>bitsofcode</em></a> by Ire Aderinokun</li>
      <li><a href="https://brettterpstra.com/">Brett Terpstra</a></li>
      <li><a href="https://www.macsparky.com/"><em>MacSparky</em></a> by David Sparks</li>
      <li><a href="https://rachelandrew.co.uk/archives/">Rachel Andrew</a></li>
      <li><a href="https://katydecorah.com/">Katy DeCorah</a></li>
      <li><a href="https://pxlnv.com/"><em>Pixel Envy</em></a> by Nick Heer</li>
      <li><a href="https://www.manton.org/">Manton Reece</a></li>
      <li><a href="https://waxy.org/"><em>Waxy</em></a> by Andy Baio</li>
      <li><a href="https://daverupert.com/">Dave Rupert</a></li>
      <li><a href="https://robinrendle.com/">Robin Rendle</a></li>
      <li><a href="https://audaciousfox.net/"><em>Audacious Fox</em></a> by Kyle Dreger</li>
    </ul>

  </div>

  <?php get_search_form(); ?>  

  <div class="sub-footer">
    <small><em>Bright Pixels</em> is proudly built with <a href="https://statamic.com/">Statamic</a>, hosted on <a href="https://m.do.co/c/892de84d39e6">DigitalOcean</a>, and deployed&nbsp;with <a href="https://forge.laravel.com/">Laravel Forge</a>. Made with <?php get_template_part('template-parts/vectors/heart_icon'); ?> in Oceanside, CA.</small>

    <small>&copy; 2013&ndash;<script>document.write(new Date().getFullYear())</script> Timothy B. Smith.</small>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
