<?php get_header(); ?>
  
  <main class="main">
    <div class="p-body">
      <?php while ( have_posts() ) : the_post(); ?>

        <header class="page__header">
          <h1 class="page-header__title" id="page-title"><?php the_title();?></h1>
        </header>

        <?php the_content(); ?>

      <?php endwhile; ?>
    </div>
  </main>

<?php get_footer(); ?>
