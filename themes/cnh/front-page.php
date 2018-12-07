<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>    
	<div id="primary" class="content-area">

		<?php dynamic_sidebar( 'sidebar-3' ); ?>

		<main id="main" class="site-main" role="main">
				<div class="instalame-container">
				</div>
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

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