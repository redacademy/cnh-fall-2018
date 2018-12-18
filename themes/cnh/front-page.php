<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>    
		<main id="main" class="site-main" role="main">
					<div id="primary" class="content-frontpage">
<div class="main">
		<?php if ( have_posts() ) : ?>
		
			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif;  ?>
		
			<?php /* Start the Loop */ ?>
			
	
			<?php while ( have_posts() ) : the_post(); ?>
			<header class="entry-header">
				<?php if ( has_post_thumbnail() ) : ?>
        		<?php the_post_thumbnail( 'full' ); ?>	
			</header>
				<?php endif; ?>
				<div class="frontpage-content">	
				<h2 class="we-are-a-place-title">We are a place...</h2>
				<?php the_content(); ?>

			<?php endwhile; ?>
			
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php the_content(); ?>

		<?php endif; ?>

		<!--Upcoming events-->	
		<h2 class="upcoming-events-title"> Upcoming Events</h2>
		<div class='upcoming-events'>
<?php $loop = new WP_Query( array( 'post_type' => 'tribe_events', 'posts_per_page' => 10, 'orderby' => 'date', 'order' => 'ASC', 'paged' ) ); ?> 


<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php

// get_post_meta($post->ID, 'events', true);
$event_id = get_the_ID();
?>
        <div class="singular-event">
		<div class="date"><div class="date-text-container"><p class="day"><?php echo tribe_get_start_date( null, false, 'l' ); ?></p><p class="date-text"><?php echo tribe_get_start_date( null, false, 'M j' ); ?></p></div> </div>
		<div class="eventimg"><?php if ( has_post_thumbnail() ) the_post_thumbnail('medium-list-thumbnail'); ?>
        <div class="location-box" ><?php the_title('<a href="' . tribe_get_event_link() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a>'); ?> </div></div >
		
	    <div class="hover-details" >      
		<div class="hover-title"><?php the_title('<a href="' . tribe_get_event_link() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a>'); ?></div>
		
		<div class="hover-description"><?php echo tribe_events_get_the_excerpt(); ?></div>
		<div class="hover-venue"><span>Where: </span><?php echo tribe_get_venue($event_id);?></div>
		<div class="hover-time"><span>When: </span><?php echo tribe_get_start_time($event_id, 'g A'); ?><span>-</span><?php echo tribe_get_end_time($event_id, 'g A'); ?></div>
		</div>
		
	</div>
	
<?php endwhile; ?>

		</div>
		<div class="view-calendar-container">
		<a class="view-calendar button-yellow">view calendar</a>
		</div>
		<!--end of upcoming events-->

<!--start of instagram-->

	<h2 class="instagram-updates-title"> Instagram Updates</h2>
				<div class="instalame-container">
				
                        
				</div>
				<div class="follow-box">
					<div class="follow-content">
					<p class="follow-us">follow us</p>
					<a href="https://www.facebook.com/cnh.bc.ca"><img class="facebook-w-o-border" src='http://cnh.van.cp.academy.red/wp-content/uploads/2018/12/facebook-in-orange.png'></a>
					<a href="https://www.instagram.com/collingwoodnh/"><img class="inst-w-o-border" src='http://cnh.van.cp.academy.red/wp-content/uploads/2018/12/instagram-in-orange.png'></a>
</div>
</div>
			</div><!--End main-->
</div>
</div><!--End Container-->

			

				<div class="frontpage-buttons">
					<a class="childcare-button button-yellow all-button" href="/childcare">childcare</a>
					<a class="senior-programs-button button-pink all-button" href="programs/seniors">senior programs</a>
					<a class="donate-button button-yellow all-button" href="/donate">donate</a>
				</div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>