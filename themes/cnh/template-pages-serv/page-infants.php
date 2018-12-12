<?php
/**
 * The template for displaying all childcare - infants & toddlers services.
 *
 * @package based on RED_Starter_Theme
 * Template Name: Childcare - Infants & Toddlers Services Template
 */
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs', 'breadcrumbs' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    
    <?php get_template_part( 'template-parts/service-type' ); ?>
          
    <?php 
    /** 
     * Get the program entries
     */ 
      $args = array( 'post_type' => 'service', 'order' => 'ASC', 'posts_per_page' => 6, 'service_type' => 'infants-toddlers');
      
      $service_posts = get_posts( $args ); ?>
    <div class="service-wrapper">
    <?php foreach ( $service_posts as $post ) : setup_postdata( $post ); ?>
      <article class="service-entry">
        <div class="service-entry-info">
          <h4><?php the_title(); ?></h4>
          <p><?php the_content(); ?></p>
        </div><!-- .service-entry-info -->
      </article><!-- .service-entry -->
    <?php endforeach; wp_reset_postdata(); ?>
    </div><!-- .service-wrapper -->

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>