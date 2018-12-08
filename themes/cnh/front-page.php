<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>    
	<div id="primary" class="content-area">
		<div class='events-widget'>
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div>
		<main id="main" class="site-main" role="main">
				<div class="instalame-container">
				
                        
				</div>
				
				<?php $loop = new WP_Query( array( 'post_type' => 'tribe_events', 'posts_per_page' => 10, 'orderby' => 'date', 'order' => 'ASC', 'paged' ) ); ?>
 
<!--Upcoming events-->
<table id="list">
<tr>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php get_post_meta($post->ID, 'events', true); ?>
 
        <td class="eventimg"><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) the_post_thumbnail('small-list-thumbnail'); ?></a></td >
        <td class="date"><?php echo tribe_get_start_date( null, false, 'F j' ); ?> </span>
        <td class="event">      <?php the_title('<a href="' . tribe_get_event_link() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a>'); ?> </td >
       </tr>
   
<?php endwhile; ?>
 </table>
</div><!--End main-->
<div class="main">
</div>
</div><!--End Container-->
		<?php if ( have_posts() ) : ?>
		
			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif;  ?>
		
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>
			
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php the_content(); ?>

		<?php endif; ?>
			

				<div class="frontpage-buttons">
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>