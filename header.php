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
<div id="page" class="container-fluid site">
	<header id="masthead" style="background: url(<?php echo get_header_image(); ?>); background-repeat: no-repeat; background-size: cover; background-position: center bottom;" class="row site-header">
		<div class="site-branding">
		<div class="hidden-xs hidden-sm col-md-2">
			<?php
			if (!has_custom_logo()) {
			  ?><a class="logo-link" href="<?php echo esc_url(home_url('/')); ?>">
			  <img class="img-responsive center-block default-logo" src="<?php echo get_template_directory_uri() . '/img/adventurous-logo.png'; ?>" /></a>
			  <?php 
			} else { 
			    $custom_logo_id = get_theme_mod( 'custom_logo' );
			  ?>
			    <a class="logo-link text-center" href="<?php echo esc_url(home_url('/')); ?>">
			  <img class="img-responsive center-block custom-logo" src="<?php echo wp_get_attachment_url( $custom_logo_id ); ?>" /></a>
			  <?php
			}
			?>
			</div>  <!-- end col -->
			<div class="hidden-xs hidden-sm col-md-5">
			<?php
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
		<?php wp_nav_menu( array( 
		  'menu_class' => 'w-sub-menu pull-right', 
		  'container_class' => 'hidden-xs hidden-sm col-md-5 pull-right',
		  'theme_location' => 'sub', 
		  'fallback_cb' => 'WS_Walker_Nav_Badge::fallback',
		  'walker' => new WS_Walker_Nav_Badge(),
		  'depth' => 1,
		  ) ); ?>
		</div><!-- .site-branding -->
		<div class="col-xs-12">
			<div class="col-md-8 col-md-offset-2">
			<nav id="site-navigation" class="navbar navbar-default">
			    <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#adventurous-navbar" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container_class' => 'collapse navbar-collapse',
						'container_id' => 'adventurous-navbar',
					) );
				?>
				</div> <!-- end .navbar-header -->
			</nav><!-- #site-navigation -->
			</div>
		</div> <!-- /col -->

	</header><!-- #masthead -->
	<div id="content" class="row site-content">
