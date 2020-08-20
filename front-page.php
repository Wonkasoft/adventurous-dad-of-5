<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Adventurous_Dad_Of_5
 * @author Wonkasoft,LLC <support@wonkasoft.com>
 * @version 1.1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="container-fluid site-main">
		<div class="row">
		<div class="col col-12 col-md-6 d-none d-md-inline-block">
			<?php 
				get_template_part( 'template-parts/location', 'map' );
			?>
		</div> <!-- /left col for map content -->

		<div class="col col-12 col-md-6">
			<div class="row">
				<div class="assorted-content-title col col-12 text-center">
					<h3 class="panel-title">Gear</h3>
				</div> <!-- /title for assorted content -->
				<div class="col col-12 text-center">
				</div> <!-- /col for gear content -->
			</div> <!-- /row -->

			<div class="row">
				<div class="assorted-content-title col col-12 text-center">
					<h3 class="panel-title">Location/Images</h3>
				</div> <!-- /title for assorted content -->
				<div class="col col-12 text-center">
				</div> <!-- /col for location / images content -->
			</div> <!-- /row -->

			<div class="row">
				<div class="assorted-content-title col col-12 text-center">
					<h3 class="panel-title">Blog/Vlog</h3>
				</div> <!-- /title for assorted content -->
				<div class="col col-12 text-center">
				</div> <!-- /col for blog/vlog content -->
			</div> <!-- /row -->
		</div> <!-- /right col for assorted content -->
	</div> <!-- /row -->
</main><!-- #main -->
<?php
// The tax query
$tax_query[] = array(
	'taxonomy' => 'product_visibility',
	'field'    => 'name',
	'terms'    => 'featured',
	'operator' => 'IN', // or 'NOT IN' to exclude feature products
);

// The query
$pro_query    = new WP_Query(
	array(
		'post_type'           => 'product',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => 1,
		'posts_per_page'      => -1,
		'orderby'             => 'post_title',
		'order'               => 'desc',
		'tax_query'           => $tax_query,
	)
);

if ( $pro_query->have_posts() ) : ?>
	<section id="shop-section" class="container-fluid">
			<div class="row title-row">
				<div class="col col-12 text-center">
					<h2 class="shop-title">SHOP</h2>
				</div> <!-- /shop title -->
			</div>
			<div class="row featured-products-row">
				<div class="col col-12">
					<div class="container">
						<div class="row justify-content-space-around featured-products-area">
						<?php

						while ( $pro_query->have_posts() ) :
							$pro_query->the_post();
							$pro_query_id              = get_the_ID();
							$featured_product_image_id = get_post_thumbnail_id( $pro_query_id );
																	
							?>
								<div class="col col-12 col-md-4 text-center m-auto">
									<div class="featured-product-wrap">
										<a href="<?php esc_url( the_permalink( $pro_query_id ) ); ?>" class="image-link">
											<div class="featured-product-image-wrap">
												<img class="featured-product-image m-auto" src="<?php echo esc_url( wp_get_attachment_image_src( $featured_product_image_id, 'medium', false )[0] ); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( $featured_product_image_id, 'medium', true ) ); ?>" />
											</div>
										</a>
										<div class="featured-product-content">
											<div class="featured-product-excerpt">
												<p>
													<?php esc_html( the_excerpt() ); ?>
												</p>
											</div>
											<a href="<?php esc_url( the_permalink( $pro_query_id ) ); ?>" class="btn btn-wonka btn-shadow">
												<?php the_title(); ?>
											</a>
										</div>
									</div>
								</div>
								<?php
							endwhile;
							wp_reset_postdata();
						?>
						</div>
					</div>
				</div>
			</div><!-- /.featured-products-row -->
	</section>
<?php endif; ?>
		<section id="about-section" class="container-fluid">
			<div class="row">
		<!-- Full width panel for Who is Adventurous Dad? -->
		<!-- Style inline so that it will pull image from what is set in customizer -->
		<div class="col col-12 adventurous-about" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/capture45.jpg'; ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
			<div class="text-center">
				<h1 class="about-title">Who is Adventurous Dad ?</h1>
			</div> <!-- /col for about title -->
			<div class="row align-items-start justify-content-space-between">
					<div class="col col-12 col-md-4 text-center">
						<a href="./gallery/" class="about-links">GALLERY</a>
					</div>
					
					<div class="col col-12 col-md-4 text-center">
						<a href="./about-me/" class="about-links">ABOUT ME</a>
					</div>
					<div class="col col-12 col-md-4 text-center">
						<a href="./my-sponsors/" class="about-links">MY SPONSORS</a>
					</div>
			</div><!-- /.row -->
		</div> <!-- /col xs 12 for about section -->
		<!-- End of Full width panel for Who is Adventurous Dad? section -->
		</div> <!-- /row -->
		</section>

	
</div><!-- #primary -->

<?php
get_footer();
