<?php
/**
 * The template for displaying the career opportunities on CNH.
 *
 * @package based on RED_Starter_Theme
 * Template Name: Career Page Template
 */
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs', 'breadcrumbs' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    
    <?php get_template_part( 'template-parts/opportunity-type'); ?>
          
    <?php 
    /** 
     * Get the career entries
     */ 
      $args = array( 'post_type' => 'opportunity', 'order' => 'ASC', 'posts_per_page' => 99, 'opportunity_type' => 'career');
      
      $opportunity_posts = get_posts( $args ); ?>
    <div class="opportunity-wrapper">
    <?php
    foreach ($opportunity_posts as $post):
      setup_postdata($post); ?>
      <article class="opportunity-entry">
        <div class="opportunity-entry-info">
          <h4><?php the_title(); ?></h4>
          <p><?php the_content(); ?></p>
          <p>
          <?php 
          if (CFS()->get( 'closing_date' ) == true):
            echo 'Closing Date: ' . CFS()->get( 'closing_date' ); 
          endif;
          ?>
          </p>
        </div><!-- .opportunity-entry-info -->

          <a class="readmore-button" href="<?php echo CFS()->get( 'view_posting' ); ?>">View Posting</a>

      </article><!-- .opportunity-entry -->
    <?php endforeach; wp_reset_postdata();
    ?>
    </div><!-- .opportunity-wrapper -->

  <?php cnh_numbered_pagination(); ?>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>