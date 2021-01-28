<?php
/**
 * Rara Readable Pro Customizer selective refresh functions.
 *
 * @package Rara_Readable
 *
 */

if ( ! function_exists( 'rara_readable_customize_partial_blogname' ) ) :
	/**
	 * Render the site title for the selective refresh partial.
	 *
	 */
	function rara_readable_customize_partial_blogname() {
		$blog_name = get_bloginfo( 'name' );

		if ( $blog_name ){
			return esc_html( $blog_name );
		} else {
			return false;
		}

	}
endif;

if ( ! function_exists( 'rara_readable_customize_partial_blogdescription' ) ) :
	/**
	 * Render the site description for the selective refresh partial.
	 *
	 */
	function rara_readable_customize_partial_blogdescription() {
		$blog_description = get_bloginfo( 'description' );

		if ( $blog_description ){
			return esc_html( $blog_description );
		} else {
			return false;
		}
	}
endif;


if ( ! function_exists( 'rara_readable_readmore_btn_label_selective_refresh' ) ) :
	/**
	 * Render readmore btn label for the selective refresh partial.
	 *
	 */
	function rara_readable_readmore_btn_label_selective_refresh() {
		/** Load default theme options */
		$default_options    = rara_readable_default_theme_options();                          
		$readmore_btn_label = get_theme_mod( 'rara_readable_read_more_text', $default_options['rara_readable_read_more_text'] );

		if ( $readmore_btn_label ){
			return esc_html( $readmore_btn_label );
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'rara_readable_breadcrumb_text_selective_refresh' ) ) :
	/**
	 * Render breadcrumb home btn label for the selective refresh partial.
	 *
	 */
	function rara_readable_breadcrumb_text_selective_refresh() {
		/** Load default theme options */
        $default_options =  rara_readable_default_theme_options();                          

		$home_label = get_theme_mod( 'rara_readable_breadcrumb_home_text', $default_options['rara_readable_breadcrumb_home_text'] );

		if ( $home_label ){
			return esc_html( $home_label );
		} else {
			return false;
		}
	}
endif;


if ( ! function_exists( 'rara_readable_related_post_title_selective_refresh' ) ) :
	/**
	 * Render related post section title for the selective refresh partial.
	 *
	 */
	function rara_readable_related_post_title_selective_refresh() {
		/** Load default theme options */
		$default_options = rara_readable_default_theme_options();                          
		$related_title   = get_theme_mod( 'rara_readable_related_post_section_title', $default_options['rara_readable_related_post_section_title'] );

		if ( $related_title ){
			return esc_html( $related_title );
		} else {
			return false;
		}
	}
endif;



if ( ! function_exists( 'rara_readable_site_info_selective_refresh' ) ) :
	/**
	 * Render site info for the selective refresh partial.
	 *
	 */
	function rara_readable_site_info_selective_refresh() {
		/** Load default theme options */
		$default_options = rara_readable_default_theme_options();                          
		$site_info_text  = get_theme_mod( 'rara_readable_footer_copyright', $default_options['rara_readable_footer_copyright'] );

		if ( $site_info_text ){
			return wp_kses_post( $site_info_text );
		} else {
			return false;
		}
	}
endif;