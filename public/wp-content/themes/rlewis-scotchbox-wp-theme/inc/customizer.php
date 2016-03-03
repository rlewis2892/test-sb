<?php
/**
 * ScotchBox WP Test Theme Theme Customizer.
 *
 * @package ScotchBox_WP_Test_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function rlewis_scotchbox_wp_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'rlewis_scotchbox_wp_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function rlewis_scotchbox_wp_theme_customize_preview_js() {
	wp_enqueue_script( 'rlewis_scotchbox_wp_theme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'rlewis_scotchbox_wp_theme_customize_preview_js' );
