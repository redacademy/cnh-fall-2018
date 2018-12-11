<?php
/**
 * The template for displaying all single services.
 *
 * @package based on RED_Starter_Theme
 * Template Name: Service Type Template
 */
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs', 'breadcrumbs' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    
    <?php get_template_part( 'template-parts/service', 'type' ); ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>