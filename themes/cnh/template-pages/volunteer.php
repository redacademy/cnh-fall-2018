<?php
/**
 * The template for displaying the volunteer opportunities on CNH.
 *
 * @package based on RED_Starter_Theme
 * Template Name: Volunteer Page Template
 */
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs', 'breadcrumbs' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    
    <?php get_template_part( 'template-parts/opportunity', 'type' ); ?>
          
    <?php 
    /** 
     * Get the opportunity entries
     */ 
      $args = array( 'post_type' => 'opportunity', 'order' => 'ASC', 'posts_per_page' => 99, 'program_type' => 'volunteer');
      
      $opportunity_posts = get_posts( $args ); ?>
    <div class="opportunity-wrapper">
    <?php
    foreach ($opportunity_posts as $post):
      setup_postdata($post);
      get_template_part('template-parts/opportunity', 'details');
    endforeach;
    wp_reset_postdata();
    ?>
    </div><!-- .opportunity-wrapper -->

  <?php cnh_numbered_pagination(); ?>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>