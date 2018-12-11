<?php
/**
 * The template for displaying all single programs.
 *
 * @package based on RED_Starter_Theme
 * Template Name: Program Type Template
 */
get_header(); ?>

<header class="page-header">    
  <!-- program thumbnail -->
  <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail( 'full' ); ?>
    <?php endif; ?>
    </a>
    <?php 
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }
    ?>
</header><!-- .page-header -->

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php /* Start the Loop */ ?>
    <div class="program-wrapper">
    <?php 
    /**
     * Get the program entries 
     */ 
    while ( have_posts() ) : the_post(); ?>
      <div class="program-entry">
        <div class="program-info">
          <h2 class="entry-title">
            <?php the_title(); ?>
            <!-- <?php single_term_title(); ?> -->
          </h2>

          <div class="entry-content">
              <!-- <img class="opening-wave" src="<?php echo get_template_directory_uri() . '/images/Wave_Background.png' ?>"> -->
              <?php the_content(); ?>
          </div><!-- .entry-content -->
        </div><!-- .program-info -->
      </div><!-- .program-entry -->
    <?php endwhile; // end of the loop. ?>
    </div><!-- .program-wrapper -->

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>