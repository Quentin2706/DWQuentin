<?php
/**
 * General Settings Panel
 *
 * @package Rara_Readable
 */

if ( ! function_exists( 'rara_readable_customize_register_general_settings_panel' ) ) :
	/**
	 * Add general settings panel
	 */
	function rara_readable_customize_register_general_settings_panel( $wp_customize ) {

	    $wp_customize->add_panel( 'rara_readable_general_settings_panel', array(
	        'title'          => __( 'General Settings', 'rara-readable' ),
	        'priority'       => 60,
	        'capability'     => 'edit_theme_options',
	    ) );
	    
	}
endif;
add_action( 'customize_register', 'rara_readable_customize_register_general_settings_panel' );