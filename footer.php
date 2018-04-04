<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adventurous_Dad_Of_5
 */

?>

	</div> <!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="row">
		<div class="col-xs-12">
			<div class="col-xs-12 col-md-3">
			<h3 class="footer-header">EXPLORE</h3>
			<nav id="footer-1-navigation" class="footer-1-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-3',
						'menu_id'        => 'explore-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
			</div> <!-- /column -->
			
			<div class="col-xs-12 col-md-3">
			<h3 class="footer-header">ABOUT</h3>
				<nav id="footer-2-navigation" class="footer-2-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-4',
							'menu_id'        => 'about-menu',
						) );
					?>
				</nav><!-- #site-navigation -->
			</div> <!-- /column -->
			
			<div class="col-xs-12 col-md-3">
			<h3 class="footer-header">CONTACT</h3>
				<nav id="footer-3-navigation" class="footer-3-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-5',
							'menu_id'        => 'contact-menu',
						) );
					?>
				</nav><!-- #site-navigation -->
			</div> <!-- /column -->
			
			<div class="col-xs-12 col-md-3">
				<h3 class="footer-header">CONNECT</h3>
				<span>UPDATES & SPECIALS SIGN UP NOW</span>
				
				<form class="form-inline">
				  <div class="form-group">
				    <input type="email" class="form-control" id="email-signup" placeholder="jane.doe@example.com">
				  </div>
				  <button type="submit" class="btn btn-default">Sign Up</button>
				</form>	

				<nav id="footer-4-navigation" class="footer-4-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-6',
							'menu_id'        => 'connect-menu',
						) );
					?>
				</nav><!-- #site-navigation -->
			</div> <!-- /column -->
		</div> <!-- /column -->
	</div> <!-- /row -->
	<div class="row">
			<div class="col-xs-12 info-bar">
			<div class="col-xs-12 text-center">
					<div class="site-info">
						&copy; <?php echo date( 'Y' ); ?> All rights reserved
						<span class="sep"> | </span>
						<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Site Created for %1$s by %2$s', 'adventurous-dad-of-5' ), 'Adventurous Dad of 5', '<a href="https://wonkasoft.com/" target="_blank">Wonkasoft</a>' );
						?>
					</div> <!-- .site-info -->
					</div>
			</div> <!-- /column -->
			</div> <!-- /row -->
	</footer> <!-- /row #colophon -->
</div> <!-- #page -->

<?php wp_footer(); ?>

</body>
</html>