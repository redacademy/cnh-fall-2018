<?php
/**
 * The template for displaying the about page on CNH.
 *
 * @package based on RED_Starter_Theme
 * Template Name: About Page Template
 */
get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<?php 
    			if ( function_exists('yoast_breadcrumb') ) {
     			   yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
    			}
			?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>