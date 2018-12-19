<?php
/**
 * The template for displaying all community - create programs.
 *
 * @package based on RED_Starter_Theme
 * Template Name: Community - Create Programs Template
 */
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs', 'breadcrumbs' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    
    <?php get_template_part( 'template-parts/program', 'type' ); ?>
          
    <?php 
    /** 
     * Get the program entries
     */ 
      $args = array( 'post_type' => 'program', 'order' => 'ASC', 'posts_per_page' => 666, 'program_type' => 'create');
      
      $program_posts = get_posts( $args ); ?>
    <div class="program-wrapper">
    <?php foreach ( $program_posts as $post ) : setup_postdata( $post ); ?>
      <article class="program-entry">
        <div class="program-entry-info">
          <h4><?php the_title(); ?></h4>
          <p><?php the_content(); ?></p>
        </div><!-- .program-entry-info -->
      </article><!-- .program-entry -->
    <?php endforeach; wp_reset_postdata(); ?>
    </div><!-- .program-wrapper -->

  <?php cnh_numbered_pagination(); ?>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>