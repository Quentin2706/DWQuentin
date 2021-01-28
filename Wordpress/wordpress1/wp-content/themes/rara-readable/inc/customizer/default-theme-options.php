<?php
/**
 * Customizer default value.
 *
 * @package Rara_Readable
 */

function rara_readable_default_theme_options() {
	$default_options = array(
        // Site Identitiy
        'rara_readable_site_title_font'        => 'georgia-serif',
        'rara_readable_site_title_font_size'   => 50,

        // Last update post date
        'rara_readable_ed_last_update_date'    => '1',

        // Social media
        'rara_readable_ed_social_links'        => '1',
        'rara_readable_social_links'           => array(),
        
        // Breadcrumb
        'rara_readable_ed_breadcrumb'              => '1',
        'rara_readable_breadcrumb_home_text'       => __( 'Home', 'rara-readable' ),
        'rara_readable_breadcrumb_separator'       => __( '>', 'rara-readable' ),
        
        // Post page settings
        'rara_readable_ed_blog_excerpt'            => '1',
        'rara_readable_excerpt_length'             => 25,
        'rara_readable_read_more_text'             => __( 'Read More', 'rara-readable' ),
        'rara_readable_ed_custom_header_fallback'  => '1',
        'rara_readable_show_related_post'          => '1',
        'rara_readable_related_post_section_title' => __( 'Related Posts:', 'rara-readable' ),
        'rara_readable_ed_comments'                => '1',
        'rara_readable_ed_category_meta'           => '',
        'rara_readable_ed_post_date_meta'           => '',
        'rara_readable_ed_post_author_meta'           => '',
        'rara_readable_ed_prefix_archive'          => '',

        // Footer settings
        /* translators: 1: year, 2: blog name */
        'rara_readable_footer_copyright'           => sprintf( __( '&copy; %1$s %2$s. All Rights Reserved.', 'rara-readable'), date_i18n( 'Y' ), '<a href="'. esc_url( home_url( '/' ) ).'">'. get_bloginfo( 'name' ) .'</a>'  ),
	);

	$output = apply_filters( 'rara_readable_default_theme_options', $default_options );

	return $output;
}