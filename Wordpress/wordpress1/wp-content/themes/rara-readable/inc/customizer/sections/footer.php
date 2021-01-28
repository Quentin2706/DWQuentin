<?php
/**
 * Footer Setting
 *
 * @package Rara_Readable
 */
if ( ! function_exists( 'rara_readable_customize_register_footer' ) ) :
    /**
     * Add footer controls
     */
    function rara_readable_customize_register_footer( $wp_customize ) {
        /** Load default theme options */
        $default_options =  rara_readable_default_theme_options();

        $wp_customize->add_section(
            'rara_readable_footer_section',
            array(
                'title'      => __( 'Footer Settings', 'rara-readable' ),
                'priority'   => 199,
                'capability' => 'edit_theme_options',
            )
        );
        
        /** Footer Copyright */
        $wp_customize->add_setting(
            'rara_readable_footer_copyright',
            array(
                'default'           => $default_options['rara_readable_footer_copyright'],
                'sanitize_callback' => 'wp_kses_post',
                'transport' => 'postMessage'
            )
        );

        // Abort if selective refresh is not available.
        if ( isset( $wp_customize->selective_refresh ) ) {
            $wp_customize->selective_refresh->add_partial( 'rara_readable_footer_copyright', array(
                'selector'            => '#colophon .bottom-footer .footer-copyright span.copyright',
                'render_callback'     => 'rara_readable_site_info_selective_refresh',
                'container_inclusive' => false,
                'fallback_refresh'    => true,
            ) );
        }
        
        $wp_customize->add_control(
            'rara_readable_footer_copyright',
            array(
                'label'       => __( 'Footer Copyright Text', 'rara-readable' ),
                'section'     => 'rara_readable_footer_section',
                'type'        => 'textarea',
            )
        );
    }
endif;
add_action( 'customize_register', 'rara_readable_customize_register_footer' );