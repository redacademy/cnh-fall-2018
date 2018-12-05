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
    <link href="dist/hamburgers.css" rel="stylesheet">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php if ( get_header_image() ) : ?>
    	<div id="site-header">
        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            	<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        	</a>
    	</div>
		<?php endif; ?>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
          <span class="open-slide">
            <a href="#" onclick="openSideMenu()">
              <svg width="30" height="30">
                  <path d="M0,5 30,5" stroke="#000" stroke-width="5"></path>
                  <path d="M0,14 30,14" stroke="#000" stroke-width="5"></path>
                  <path d="M0,23 30,23" stroke="#000" stroke-width="5"></path>
              </svg>
            </a>
          </span>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
        <div id="side-menu" class="side-nav" style="width: 0px;">
          <a href="#" class="btn-close" onclick="closeSideMenu()">&times;</a>
          <ul class="side-navbar">
            <li class="side-item">
              <a href="#">Home</a>
            </li>
            <li class="side-item">
              <a href="#">About Us</a>
              <ul class="side-navbar-nest">
                <li class="nest-item">
                  <a href="#">Who We Are</a>
                </li>
                <li class="nest-item">
                  <a href="#">Contact Us</a>
                </li>
                <li class="nest-item">
                  <a href="#">Careers</a>
                </li>
              </ul>
            </li>
            <li class="side-item">
              <a href="#">Programs</a>
              <ul class="side-navbar-nest">
                <li class="nest-item">
                  <a href="#">Children/Youth</a>
                </li>
                <li class="nest-item">
                  <a href="#">Family</a>
                </li>
                <li class="nest-item">
                  <a href="#">Senior</a>
                </li>
                <li class="nest-item">
                  <a href="#">Adult</a>
                </li>
                <li class="nest-item">
                  <a href="#">Community Development</a>
                </li>
              </ul>
            </li>
            <li class="side-item">
              <a href="#">Services</a>
              <ul class="side-navbar-nest">
                <li class="nest-item">
                  <a href="#">Childcare</a>
                </li>
                <li class="nest-item">
                  <a href="#">Immigrant Services</a>
                </li>
                <li class="nest-item">
                  <a href="#">Family</a>
                </li>
                <li class="nest-item">
                  <a href="#">Youth</a>
                </li>
                <li class="nest-item">
                  <a href="#">Seniors</a>
                </li>
                <li class="nest-item">
                  <a href="#">Rentals</a>
                </li>
              </ul>
            </li>
            <li class="side-item">
              <a href="#">Get Involved</a>
              <ul class="side-navbar-nest">
                <li class="nest-item">
                  <a href="#">Become a Member</a>
                </li>
                <li class="nest-item">
                  <a href="#">Donate</a>
                </li>
                <li class="nest-item">
                  <a href="#">Volunteer</a>
                </li>
              </ul>
            </li>
            <li class="side-item">
              <a href="#">Events</a>
            </li>
          </ul>
        </div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
