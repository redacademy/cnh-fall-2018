<?php
/**
 * Template part for displaying breadcrumbs and hero img.
 *
 */
?>
<header class="page-header">    
  <!-- hero image -->
  <?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>
    <?php 
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }
    ?>
</header><!-- .page-header -->