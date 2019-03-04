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

  <div class='new-title'><?php the_title(); ?></div>
  
  <div class="rooms-carousel-container">
        <?php $rooms = CFS()->get( 'rental_room' ); // get CFS loop for rooms  ?>
        <div class="room-list-container">
          <ul class="rooms-carousel-list">
            <?php 
            $count = 0;
            foreach ( $rooms as $room ): ?>
              <li data-id ="<?php echo $count ?>"><?php echo $room['room_title'];  $count ++; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <!-- Flickity Carousel -->
        <div class="main-carousel">
          <?php
          $count = 0;
          foreach ( $rooms as $room ): ?>  
            <div class="room-separate" data-id="<?php echo $count ?>">
            
            </div>
          <?php endforeach ?>
        </div><!-- / Flickity Carousel -->
      </div><!-- / rooms-carousel-container -->

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; // End of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

