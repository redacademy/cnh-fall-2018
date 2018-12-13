<?php 
  /**
   * Template part for displaying the program type entry.
   * 
   * Start the loop 
   */ 
  while ( have_posts() ) : the_post(); ?>
<div class="program-info">
  <h2 class="entry-title">
    <?php the_title(); ?>
  </h2>
  <div class="entry-content">
      <!-- <img class="opening-wave" src="<?php echo get_template_directory_uri() . '/images/Wave_Background.png' ?>"> -->
  <?php the_content(); ?>  
  </div><!-- .entry-content -->
</div><!-- .program-info -->
<?php endwhile; // end of the loop. ?>