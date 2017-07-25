<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adventurous_Dad_Of_5
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'adventurous-dad-of-5' ); ?></a>

	<header id="masthead" class="container-fuild site-header">
		<div class="row site-branding">
		<div class="hidden-xs hidden-sm col-md-4">
			<?php
			if (!has_custom_logo()) {
			  ?><a class="logo-link" href="<?php echo esc_url(home_url('/')); ?>">
			  <img class="img-responsive center-block default-logo" src="<?php echo get_template_directory_uri() . '/assets/images/adventurous-logo.png'; ?>" /></a>
			  <?php 
			} else { 
			    $custom_logo_id = get_theme_mod( 'custom_logo' );
			  ?>
			    <a class="logo-link text-center" href="<?php echo esc_url(home_url('/')); ?>">
			  <img class="img-responsive center-block custom-logo" src="<?php echo wp_get_attachment_url( $custom_logo_id ); ?>" /></a>
			  <?php
			}
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>  <!-- end col -->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation aligncenter">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( ':::', 'adventurous-dad-of-5' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">