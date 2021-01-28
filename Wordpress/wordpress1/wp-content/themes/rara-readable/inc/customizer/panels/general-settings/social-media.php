<?php
/**
 * Social Media Options
 *
 * @package Rara_Readable
 */

if ( ! function_exists( 'rara_readable_customize_register_social_media' ) ) :
    /**
     * Add social media controls
     */
    function rara_readable_customize_register_social_media( $wp_customize ) {
        /** Load default theme options */
        $default_options =  rara_readable_default_theme_options();

        $wp_customize->add_section(
            'rara_readable_social_media',
            array(
                'title'      => __( 'Social Media', 'rara-readable' ),
                'priority'   => 25,
                'capability' => 'edit_theme_options',
                'panel'      => 'rara_readable_general_settings_panel',
            )
        );
        
        /** Enable Social Links */
        $wp_customize->add_setting( 
            'rara_readable_ed_social_links', 
            array(
                'default'           => $default_options['rara_readable_ed_social_links'],
                'sanitize_callback' => 'rara_readable_sanitize_checkbox'
            ) 
        );
        
        // Abort if selective refresh is not available.
        if ( isset( $wp_customize->selective_refresh ) ) {
            $wp_customize->selective_refresh->add_partial( 'rara_readable_ed_social_links', array(
                'selector'            => '.main-header .header-social ul.social-icons',
                'container_inclusive' => false,
                'fallback_refresh'    => true,
            ) );
        }

        $wp_customize->add_control(
            new Rara_Readable_Toggle_Control( 
                $wp_customize,
                'rara_readable_ed_social_links',
                array(
                    'section'     => 'rara_readable_social_media',
                    'label'       => __( 'Enable Social Links', 'rara-readable' ),
                    'description' => __( 'Enable to show social links at header.', 'rara-readable' ),
                )
            )
        );
        
        $wp_customize->add_setting( 
            new Rara_Readable_Repeater_Setting( 
                $wp_customize, 
                'rara_readable_social_links', 
                array(
                    // 'default'           => $default_options['rara_readable_social_links'],
                    'sanitize_callback' => array( 'Rara_Readable_Repeater_Setting', 'sanitize_repeater_setting' ),
                ) 
            ) 
        );
        
        $wp_customize->add_control(
            new Rara_Readable_Control_Repeater(
                $wp_customize,
                'rara_readable_social_links',
                array(
                    'section' => 'rara_readable_social_media',               
                    'label'   => __( 'Social Links', 'rara-readable' ),
                    'fields'  => array(
                        'font' => array(
                            'type'        => 'font',
                            'label'       => __( 'Font Awesome Icon', 'rara-readable' ),
                            'description' => __( 'Example: fa-bell', 'rara-readable' ),
                        ),
                        'link' => array(
                            'type'        => 'url',
                            'label'       => __( 'Link', 'rara-readable' ),
                            'description' => __( 'Example: http://facebook.com', 'rara-readable' ),
                        )
                    ),
                    'row_label' => array(
                        'type' => 'field',
                        'value' => __( 'links', 'rara-readable' ),
                        'field' => 'link'
                    ),
                    'active_callback'     => 'rara_readable_social_media_ac'                        
                )
            )
        );
        /** Social Media Settings Ends */    
    }
endif;
add_action( 'customize_register', 'rara_readable_customize_register_social_media' );

if ( ! function_exists( 'rara_readable_social_media_ac' ) ) :
    /**
    * Active callback function for social media
    */
    function rara_readable_social_media_ac( $control ){
        $enable_breadcrumb = $control->manager->get_setting( 'rara_readable_ed_social_links' )->value();
        $control_id         = $control->id;
    
        if ( $control_id == 'rara_readable_social_links' && $enable_breadcrumb ) return true;
        
        return false;
    }
endif;