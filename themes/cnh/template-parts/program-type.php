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
  <?php the_content(); ?>  
  </div><!-- .entry-content -->
</div><!-- .program-info -->
<?php endwhile; // end of the loop. ?>
