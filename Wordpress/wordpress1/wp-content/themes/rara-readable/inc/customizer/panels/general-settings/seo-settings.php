<?php
/**
 * SEO Settings Options
 *
 * @package Rara_Readable
 */

if ( ! function_exists( 'rara_readable_customize_register_seo_settings' ) ) :
    /**
     * Add seo settings controls
     */
    function rara_readable_customize_register_seo_settings( $wp_customize ) {
        /** Load default theme options */
        $default_options =  rara_readable_default_theme_options();

        $wp_customize->add_section(
            'rara_readable_seo_settings',
            array(
                'title'      => __( 'SEO Settings', 'rara-readable' ),
                'priority'   => 25,
                'capability' => 'edit_theme_options',
                'panel'      => 'rara_readable_general_settings_panel',
            )
        );

        // Last update post date
        $wp_customize->add_setting(
            'rara_readable_ed_last_update_date',
            array(
                'default'           => $default_options['rara_readable_ed_last_update_date'],
                'sanitize_callback' => 'rara_readable_sanitize_checkbox',
            )
        );
        
        $wp_customize->add_control(
            new Rara_Readable_Toggle_Control( 
                $wp_customize,
                'rara_readable_ed_last_update_date',
                array(
                    'section'     => 'rara_readable_seo_settings',
                    'label'       => __( 'Enable Last Update Post Date', 'rara-readable' ),
                    'description' => __( 'Enable to show last updated post date on listing as well as in single post.', 'rara-readable' ),
                )
            )
        );

        /** BreadCrumb Settings */

        // Enable/Disable BreadCrumb
        $wp_customize->add_setting(
            'rara_readable_ed_breadcrumb',
            array(
                'default'           => $default_options['rara_readable_ed_breadcrumb'],
                'sanitize_callback' => 'rara_readable_sanitize_checkbox',
            )
        );
        
        $wp_customize->add_control(
            new Rara_Readable_Toggle_Control( 
                $wp_customize,
                'rara_readable_ed_breadcrumb',
                array(
                    'section'     => 'rara_readable_seo_settings',
                    'label'       => __( 'Enable Breadcrumb', 'rara-readable' ),
                    'description' => __( 'Enable to show breadcrumb in inner pages.', 'rara-readable' ),
                )
            )
        );

        // Home Text
        $wp_customize->add_setting(
            'rara_readable_breadcrumb_home_text',
            array(
                'default'           => $default_options['rara_readable_breadcrumb_home_text'],
                'sanitize_callback' => 'sanitize_text_field',
                'transport'         => 'postMessage'
            )
        );
        
        // Abort if selective refresh is not available.
        if ( isset( $wp_customize->selective_refresh ) ) {
            $wp_customize->selective_refresh->add_partial( 'rara_readable_breadcrumb_home_text', array(
                'selector'            => '.breadcrumb a.home_crumb',
                'render_callback'     => 'rara_readable_breadcrumb_text_selective_refresh',
                'container_inclusive' => false,
                'fallback_refresh'    => true,
            ) );
        }

        $wp_customize->add_control(
            'rara_readable_breadcrumb_home_text',
            array(
                'label'           => __( 'Breadcrumb Home Text', 'rara-readable' ),
                'section'         => 'rara_readable_seo_settings',
                'type'            => 'text',
                'active_callback' => 'rara_readable_breadcrumb_ac'
            )
        );
        
        // Breadcrumb Separator
        $wp_customize->add_setting(
            'rara_readable_breadcrumb_separator',
            array(
                'default'           => $default_options['rara_readable_breadcrumb_separator'],
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        
        $wp_customize->add_control(
            'rara_readable_breadcrumb_separator',
            array(
                'label'           => __( 'Breadcrumb Separator', 'rara-readable' ),
                'section'         => 'rara_readable_seo_settings',
                'type'            => 'text',
                'active_callback' => 'rara_readable_breadcrumb_ac'
            )
        );
        /** BreadCrumb Settings Ends */
    
    }
endif;
add_action( 'customize_register', 'rara_readable_customize_register_seo_settings' );

if ( ! function_exists( 'rara_readable_breadcrumb_ac' ) ) :
    /**
    * Active callback function for breadcrumb
    */
    function rara_readable_breadcrumb_ac( $control ){
        $enable_breadcrumb = $control->manager->get_setting( 'rara_readable_ed_breadcrumb' )->value();
        $control_id         = $control->id;
    
        if ( $control_id == 'rara_readable_breadcrumb_home_text' && $enable_breadcrumb ) return true;
        if ( $control_id == 'rara_readable_breadcrumb_separator' && $enable_breadcrumb ) return true;
        
        return false;
    }
endif;