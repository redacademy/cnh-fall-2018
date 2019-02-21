<?php
/**
 * The template for displaying all pages without sidebars.
 *
 * @package based RED_Starter_Theme
 * Template Name: Page No Sidebar Template
 */
get_header(); ?>

<header class="page-header">    
  <!-- hero image -->
  <?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>
</header><!-- .page-header -->

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">test

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; // End of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
