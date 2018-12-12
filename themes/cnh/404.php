<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title title-404"><?php echo esc_html( 'Page not found' ); ?></h1>
					<p><?php echo esc_html( 'Sorry the page you were looking for was not found.' ); ?></p>

				</header><!-- .page-header -->

				<div class="page-content content-404">

					<div class="button-yellow button-404">
						<a href="<?php echo home_url(); ?>">Return Home</a>
					</div>
				

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
