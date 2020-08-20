<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adventurous_Dad_Of_5
 * @author Wonkasoft,LLC <support@wonkasoft.com>
 * @version 1.1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" style="background: url(<?php echo get_header_image(); ?>); background-repeat: no-repeat; background-size: cover; background-position: center bottom;" class="container-fluid site-header">
		<div class="site-branding row">
		<div class="col col-md-2 d-none d-md-inline-block text-center">
			<?php
			if ( !has_custom_logo() ) {
			  ?><a class="logo-link text-center d-inline-block" href="<?php echo esc_url(home_url('/')); ?>">
			  <img class="img-responsive m-auto default-logo" width="150px" height="150px" src="<?php echo get_template_directory_uri() . '/assets/img/wonka-logo.svg'; ?>" /></a>
			  <?php 
			} else { 
			    $custom_logo_id = get_theme_mod( 'custom_logo' );
			  ?>
			    <a class="logo-link text-center d-inline-block" href="<?php echo esc_url(home_url('/')); ?>">
			  <img class="img-responsive center-block custom-logo" src="<?php echo wp_get_attachment_url( $custom_logo_id ); ?>" /></a>
			  <?php
			}
			?>
			</div>  <!-- end col -->
			<div class="col col-md-5 d-none d-md-inline-block">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div>  <!-- end col -->
		<?php wp_nav_menu( array( 
		  'menu_class' => 'w-sub-menu', 
		  'container_class' => 'col col-md-5 d-inline-block d-md-none',
		  'theme_location' => 'menu-2', 
		  'fallback_cb' => 'WS_Walker_Nav_Badge::fallback',
		  'walker' => new WS_Walker_Nav_Badge(),
		  'depth' => 1,
		  ) ); ?>
		  <div class="col col-md-2 d-none d-md-inline-block ml-auto">
		  <?php get_search_form(); ?>
		  </div>
		</div><!-- .site-branding -->
		<div class="col col-12">
			<div class="col col-md-8 m-auto">
			<nav id="site-navigation" class="navbar navbar-expand-lg navbar-light navbar-default">
			    <div class="navbar-header">
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#adventurous-navbar" aria-controls="adventurous-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="sr-only">Menu</span>
			        <span class="navbar-toggler-icon"></span>
			    </button>
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
