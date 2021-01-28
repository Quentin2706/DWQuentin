<?php
/**
 * Apperance Settings Panel
 *
 * @package Rara_Readable
 */

if ( ! function_exists( 'rara_readable_customize_register_apperance_settings_panel' ) ) :
	/**
	 * Add typography panel
	 */
	function rara_readable_customize_register_apperance_settings_panel( $wp_customize ) {

	    $wp_customize->add_panel( 'rara_readable_apperance_settings_panel', array(
	        'title'          => __( 'Apperance Settings', 'rara-readable' ),
	        'priority'       => 50,
	        'capability'     => 'edit_theme_options',
	    ) );
	    
	}
endif;
add_action( 'customize_register', 'rara_readable_customize_register_apperance_settings_panel' );