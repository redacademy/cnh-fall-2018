<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header container" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <p class="site-description"><?php ?></p>
          <a href="<?php echo esc_url( home_url() ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_CNH.svg" alt="CNH Logo" class="header-logo"/>
          </a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav><!-- #site-navigation -->

        <div class="header-extras">
          <div class="translate-icon">
            <i class="material-icons">language</i>
            <i class="fas fa-language fa-lg"></i>
          </div><!-- .translate-icon -->
          <?php echo do_shortcode('[google-translator]'); ?>
          <div class="search-btn" aria-hidden="true">
            <i class="fa fa-search fa-md"></i>
          </div>
          <?php get_search_form(); ?>
          <span class="open-slide">
            <a href="#" class="btn-open">
              <svg width="30" height="30">
                  <path d="M0,5 30,5" stroke="#282460" stroke-width="2"></path>
                  <path d="M0,14 30,14" stroke="#282460" stroke-width="2"></path>
                  <path d="M0,23 30,23" stroke="#282460" stroke-width="2"></path>
              </svg>
            </a>
          </span>
        </div><!-- .header-extras -->
        
        <?php get_template_part( 'template-parts/side-menu', 'side menu'); ?>

			</header><!-- #masthead -->

			<div id="content" class="site-content container">
