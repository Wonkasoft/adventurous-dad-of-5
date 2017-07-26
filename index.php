<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Adventurous_Dad_Of_5
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="col-xs-12 col-md-6">
			<img class="img-responsive" src="<?php echo get_template_directory_uri() . '/img/map.png'; ?>">
		</div> <!-- /left col for map content -->

		<div class="col-xs-12 col-md-6">
			<div class="row">
				<div class="assorted-content-title col-xs-12 text-center">
					Gear
				</div> <!-- /title for assorted content -->
				<div class="col-xs-12 text-center">
				</div> <!-- /col for gear content -->
			</div> <!-- /row -->

			<div class="row">
				<div class="assorted-content-title col-xs-12 text-center">
					Location/Images
				</div> <!-- /title for assorted content -->
				<div class="col-xs-12 text-center">
				</div> <!-- /col for location / images content -->
			</div> <!-- /row -->

			<div class="row">
				<div class="assorted-content-title col-xs-12 text-center">
					Blog/Vlog
				</div> <!-- /title for assorted content -->
				<div class="col-xs-12 text-center">
				</div> <!-- /col for blog/vlog content -->
			</div> <!-- /row -->
		</div> <!-- /right col for assorted content -->
		
		<div class="col-xs-12 text-center">
			<h1 class="shop-title">SHOP</h1>
		</div> <!-- /shop title -->

		<!-- Shop Modules -->
		<div class="col-xs-12 col-md-10 col-md-offset-1 shop-module">
			<div class="col-xs-12 col-md-4">
				
			</div>

			<div class="col-xs-12 col-md-4">

			</div>

			<div class="col-xs-12 col-md-4">

			</div>
		</div> <!-- /12 xs col wrap 10 md offset 1-->
		<!-- End of Shop Modules -->

		<!-- Full width panel for Who is Adventurous Dad? -->
		<div class="col-xs-12 adventurous-about">
			<div class="col-xs-12 text-center">
				<h1 class="about-title">Who is Adventurous Dad ?</h1>
			</div> <!-- /col for about title -->
			<div class="col-xs-12 col-md-10 col-md-offset-1">
				
				<div class="col-xs-12 col-md-4 text-center">
					<a href="#" class="about-links">GALLERY</a>
				</div>
				
				<div class="col-xs-12 col-md-4 text-center">
					<a href="#" class="about-links">ABOUT ME</a>
				</div>
				<div class="col-xs-12 col-md-4 text-center">
					<a href="#" class="about-links">MY SPONSORS</a>
				</div>
			</div> <!-- /col xs-12 col-md-10 col-md-offset-1 -->
		</div> <!-- /col xs 12 for about section -->
		<!-- End of Full width panel for Who is Adventurous Dad? section -->


	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
