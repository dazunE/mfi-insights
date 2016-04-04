<?php
/**
 * MFI Insights Theme Customizer.
 *
 * @package MFI_Insights
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mfi_insights_customize_register( $wp_customize ) {

	$wp_customize->add_section( 
		'ninteen_theme_header_customization',
		array( 
			'title' => 'Header Section',
			'priority' => 30
	 ) );

	$wp_customize->add_setting(

		'ninteen_theme_header_logo',
		array(
				'default' => 'logo.png',
				'transport' => 'postMessage'
			)

	);

	$wp_customize->add_control(

		'ninteen_theme_header_logo',
		array(
			'section' => 'title_tagline',
			'label'  => 'Site Logo',
			'type'  => 'text')
	);

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->remove_control( 'blogdescription' );
	$wp_customize->remove_control( 'header_textcolor' );
	$wp_customize->remove_control( 'header_image' );

}
add_action( 'customize_register', 'mfi_insights_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mfi_insights_customize_preview_js() {
	wp_enqueue_script( 'mfi_insights_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'mfi_insights_customize_preview_js' );
