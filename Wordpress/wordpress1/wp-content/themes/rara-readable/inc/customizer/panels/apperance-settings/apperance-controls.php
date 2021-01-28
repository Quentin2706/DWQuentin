<?php
/**
 * Apperance settings controls
 *
 * @package Rara_Readable
 */

if ( ! function_exists( 'rara_readable_customize_register_appreance_controls' ) ) :
    /**
     * Add apperance setting controls
     */
    function rara_readable_customize_register_appreance_controls( $wp_customize ) {
        // Move default section to apperance settings panel
		$wp_customize->get_section( 'header_image' )->panel       = 'rara_readable_apperance_settings_panel';
		$wp_customize->get_section( 'header_image' )->title       = __( 'Single Post/Page Fallback Image', 'rara-readable' );
		$wp_customize->get_section( 'header_image' )->description = __( 'Fallback image for single post/page header.', 'rara-readable' );
		$wp_customize->get_section( 'header_image' )->priority    = 100;
		
		$wp_customize->get_section( 'background_image' )->panel   = 'rara_readable_apperance_settings_panel';
		$wp_customize->get_section( 'background_image' )->title   = __( 'Background', 'rara-readable' );
    }
endif;
add_action( 'customize_register', 'rara_readable_customize_register_appreance_controls' );