<?php
/**
 * Rara Readable Pro Theme Customizer
 *
 * @package Rara_Readable
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function rara_readable_customize_register( $wp_customize ) {
	$wp_customize->get_section( 'colors' )->panel = 'rara_readable_apperance_settings_panel';

    if ( rara_readable_is_woocommerce_activated() ) {
        global $woocommerce;
        if ( version_compare( $woocommerce->version, '3.3.3', ">=" ) ) {
            $wp_customize->get_control( 'woocommerce_catalog_columns' )->description = __( 'How many products should be shown per row? Recommended to use 4 columns and support up to 6 columns.', 'rara-readable' );
        }
    }
}
add_action( 'customize_register', 'rara_readable_customize_register' );

$rara_readable_panels       = array( 'apperance-settings', 'general-settings' );
$rara_readable_sections     = array( 'info', 'demo-content', 'site-identity', 'footer' );

$rara_readable_sub_sections = array(
	'apperance-settings' => array( 'apperance-controls' ),
	'general-settings'   => array( 'social-media', 'seo-settings', 'post-page-settings' ),
);

foreach( $rara_readable_panels as $p ){
   require get_template_directory() . '/inc/customizer/panels/' . $p . '.php';
}

foreach( $rara_readable_sections as $section ){
    require get_template_directory() . '/inc/customizer/sections/' . $section . '.php';
}

foreach( $rara_readable_sub_sections as $k => $v ){
    foreach( $v as $w ){        
        require get_template_directory() . '/inc/customizer/panels/' . $k . '/' . $w . '.php';
    }
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function rara_readable_customize_preview_js() {
	wp_enqueue_script( 'rara-readable-customizer-preview', get_template_directory_uri() . '/js'. UNMINIFY .'/customizer'. SUFFIX .'.js', array( 'customize-preview' ), RARA_READABLE_THEME_VERSION, true );
}
add_action( 'customize_preview_init', 'rara_readable_customize_preview_js' );

function rara_readable_customizer_scripts() {
    wp_enqueue_style( 'rara-readable-customizer-pro-section',get_template_directory_uri().'/css'. UNMINIFY .'/customizer-pro-section'. SUFFIX .'.css', RARA_READABLE_THEME_VERSION, 'screen' );
    wp_enqueue_script( 'rara-readable-customizer-pro-section', get_template_directory_uri() . '/js'. UNMINIFY .'/customizer-pro-section'. SUFFIX .'.js', array( 'jquery', 'customize-controls' ), RARA_READABLE_THEME_VERSION, true );
}
add_action( 'customize_controls_enqueue_scripts', 'rara_readable_customizer_scripts' );