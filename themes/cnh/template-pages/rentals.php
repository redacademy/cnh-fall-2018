<?php
/**
 * Template Name: Room Rental
 *
 *
 */
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs', 'breadcrumbs' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
  
    <div class="rooms-carousel-container">
        <?php
        
        //TODO use if statement to check if field is not empty
    
         $rooms = CFS()->get( 'rental_room' ); // get CFS loop for rooms   ?>
        <div>
          <ul class="rooms-carousel-list">
            <?php foreach ( $rooms as $room ): ?>
              <li><?php echo $room['room_title']; ?></li>
            <?php endforeach; ?>
          </ul>
          </div>
          <?php
          foreach ( $rooms as $room ): ?>
          <div class="room-wrapper">
              <h2 class="carousel-rental-title"><?php echo $room['room_title']; ?></h2>
              <div class="main-carousel">            
              <div class="carousel-cell">
                <img src="<?php echo $room['image_loop'][0]['room_image']; ?>" />
              </div>
        
              </div>
            <div class="room-stats">
                <div class="room-info">
                      <?php echo $room['room_measurements']; ?>
                </div>
                <div class="room-info">
              <?php echo $room['room_capacity']; ?>
                </div>
                <div class="room-info">
              <?php echo $room['room_features']; ?>
                </div>
            </div>
            </div>
          <?php endforeach; ?>
        </div><!-- / Flickity Carousel -->
  





    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; // End of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>