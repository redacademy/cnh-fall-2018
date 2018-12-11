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