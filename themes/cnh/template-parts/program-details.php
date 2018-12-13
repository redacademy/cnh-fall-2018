<article class="program-entry">
  <div class="program-entry-info">
    <h4><?php the_title(); ?></h4>
    <p><?php the_content(); ?></p>
    <div class="program-details">
      <p>
        <?php 
        if ( CFS()->get( 'program_date' ) == true):
          echo '<span class="program-info">When: </span>' . CFS()->get( 'program_date' );
        endif;
        ?>
        <?php 
        if ( CFS()->get( 'program_time' ) == true):
          echo '(' . CFS()->get( 'program_time' ) . ')';
        endif;
        ?>
      </p>
      <p>
        <?php 
        if ( CFS()->get( 'program_location' ) == true):
          $programLocations = CFS()->get( 'program_location' );
          foreach ( $programLocations as $key => $label ) {
            echo 'Location: ' . $label;
          }
        endif;
        ?>
      </p>
      <p>
      <?php 
      if (CFS()->get( 'program_cost' ) == true):
        echo 'Cost: ' . CFS()->get( 'program_cost' ); 
      endif;
      ?>
      </p>
    </div><!-- .program-details -->
  </div><!-- .program-entry-info -->
</article><!-- .program-entry -->
