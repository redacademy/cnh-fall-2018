<?php
/**
 * The template for displaying the services page on CNH.
 *
 * @package based on RED_Starter_Theme
 * Template Name: Services Page Template
 */
get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="center-page">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>	
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>