<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
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

		<img class="background-wave" src="<?php echo get_template_directory_uri() . '../images/Wave_Background.png';?>" alt="background-wave" > </a>

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
