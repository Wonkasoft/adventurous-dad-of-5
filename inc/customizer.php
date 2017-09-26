<?php
/**
 * Adventurous Dad Of 5 Theme Customizer
 *
 * @package Adventurous_Dad_Of_5
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function adventurous_dad_of_5_customize_register( $wp_customize ) {
	
	//  Adding customizer section for the 6 featured images on the home page
	$wp_customize->add_section( 'featured_images' , array(
    'title'      => __( 'Featured Images', 'adventurous-dad-of-5' ),
    'priority'   => 30,
	) );

	// Loop for all 6 featured images and link controls / settings
	// Started at 1 so the first image label will read 1 and not 0
	for ($i=1; $i < 7; $i++) { 
		
		$wp_customize->add_setting( 'featured_image_'.$i , array(
	    'default'   => '',
	    'transport' => 'refresh',
		) );

		$wp_customize->add_setting( 'featured_link_'.$i , array(
	    'default'   => '',
	    'transport' => 'refresh',
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_image_'.$i, array(
			'label'      => __( 'Featured Image '.$i, 'adventurous-dad-of-5' ),
			'section'    => 'featured_images',
			'setting'   => 'featured_image_'.$i,
			'description'	=> 'Choose an image for featured section in slot '.$i,
		) ) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_link_'.$i, array(
			'label'      	=> __( 'Featured Link '.$i, 'adventurous-dad-of-5' ),
			'section'    	=> 'featured_images',
			'setting'   	=> 'featured_link_'.$i,
			'type'			 	=> 'url',
			'description'	=> 'https://yourlink.com',
		) ) );

	}

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'adventurous_dad_of_5_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'adventurous_dad_of_5_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'adventurous_dad_of_5_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function adventurous_dad_of_5_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function adventurous_dad_of_5_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function adventurous_dad_of_5_customize_preview_js() {
	wp_enqueue_script( 'adventurous-dad-of-5-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'adventurous_dad_of_5_customize_preview_js' );
