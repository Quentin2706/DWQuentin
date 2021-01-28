<?php
/**
 * Post and page settings
 *
 * @package Rara_Readable
 */

if ( ! function_exists( 'rara_readable_customize_register_post_and_page_settings' ) ) :
    /**
     * Add post and page controls
     */
    function rara_readable_customize_register_post_and_page_settings( $wp_customize ) {
        /** Load default theme options */
        $default_options =  rara_readable_default_theme_options();

        $wp_customize->add_section(
            'rara_readable_post_page_settings',
            array(
                'title'      => __( 'Posts(blog) & Pages Settings', 'rara-readable' ),
                'priority'   => 25,
                'capability' => 'edit_theme_options',
                'panel'      => 'rara_readable_general_settings_panel',
            )
        );
        
        /** Enable to show excerpt */
        $wp_customize->add_setting( 
            'rara_readable_ed_blog_excerpt', 
            array(
                'default'           => $default_options['rara_readable_ed_blog_excerpt'],
                'sanitize_callback' => 'rara_readable_sanitize_checkbox'
            ) 
        );
        
        $wp_customize->add_control(
            new Rara_Readable_Toggle_Control( 
                $wp_customize,
                'rara_readable_ed_blog_excerpt',
                array(
                    'section'     => 'rara_readable_post_page_settings',
                    'label'       => __( 'Enable Blog Excerpt ', 'rara-readable' ),
                    'description' => __( 'Enable to show excerpt or disable to show full post content.', 'rara-readable' ),
                )
            )
        );

        /** Excerpt length */
        $wp_customize->add_setting( 'rara_readable_excerpt_length', array(
            'default'           => $default_options['rara_readable_excerpt_length'],
            'sanitize_callback' => 'rara_readable_sanitize_number_absint'
        ) );
        
        $wp_customize->add_control(
            new Rara_Readable_Slider_Control( 
                $wp_customize,
                'rara_readable_excerpt_length',
                array(
                    'section'         => 'rara_readable_post_page_settings',
                    'label'           => __( 'Excerpt Length', 'rara-readable' ),
                    'description'     => __( 'Automatically generated excerpt length ( in words ).', 'rara-readable' ),
                    'choices'         => array(
                        'min'         => 5,
                        'max'         => 200,
                        'step'        => 1,
                    ),
                    'active_callback' => 'rara_readable_post_page_ac'
                )
            )
        );

        /** Read More Text */
        $wp_customize->add_setting(
            'rara_readable_read_more_text',
            array(
                'default'           => $default_options['rara_readable_read_more_text'],
                'sanitize_callback' => 'sanitize_text_field',
                'transport'         => 'postMessage'
            )
        );
        
        // Abort if selective refresh is not available.
        if ( isset( $wp_customize->selective_refresh ) ) {
            $wp_customize->selective_refresh->add_partial( 'rara_readable_read_more_text', array(
                'selector'            => '.entry-footer .bttn',
                'render_callback'     => 'rara_readable_readmore_btn_label_selective_refresh',
                'container_inclusive' => false,
                'fallback_refresh'    => true,
            ) );
        }

        $wp_customize->add_control(
            'rara_readable_read_more_text',
            array(
                'type'    => 'text',
                'section' => 'rara_readable_post_page_settings',
                'label'   => __( 'Read More Text', 'rara-readable' ),
            )
        );

        /** Hide Category */
        $wp_customize->add_setting( 
            'rara_readable_ed_category_meta', 
            array(
                'default'           => $default_options['rara_readable_ed_category_meta'],
                'sanitize_callback' => 'rara_readable_sanitize_checkbox'
            ) 
        );
        
        $wp_customize->add_control(
            new Rara_Readable_Toggle_Control( 
                $wp_customize,
                'rara_readable_ed_category_meta',
                array(
                    'section'     => 'rara_readable_post_page_settings',
                    'label'       => __( 'Hide Category Meta', 'rara-readable' ),
                    'description' => __( 'Enable to hide post category meta.', 'rara-readable' ),
                )
            )
        );
        
        /** Hide Posted Date */
        $wp_customize->add_setting( 
            'rara_readable_ed_post_date_meta', 
            array(
                'default'           => $default_options['rara_readable_ed_post_date_meta'],
                'sanitize_callback' => 'rara_readable_sanitize_checkbox'
            ) 
        );
        
        $wp_customize->add_control(
            new Rara_Readable_Toggle_Control( 
                $wp_customize,
                'rara_readable_ed_post_date_meta',
                array(
                    'section'     => 'rara_readable_post_page_settings',
                    'label'       => __( 'Hide Posted Date Meta', 'rara-readable' ),
                    'description' => __( 'Enable to hide posted date.', 'rara-readable' ),
                )
            )
        );

        /** Hide Posted Date */
        $wp_customize->add_setting( 
            'rara_readable_ed_post_author_meta', 
            array(
                'default'           => $default_options['rara_readable_ed_post_author_meta'],
                'sanitize_callback' => 'rara_readable_sanitize_checkbox'
            ) 
        );
        
        $wp_customize->add_control(
            new Rara_Readable_Toggle_Control( 
                $wp_customize,
                'rara_readable_ed_post_author_meta',
                array(
                    'section'     => 'rara_readable_post_page_settings',
                    'label'       => __( 'Hide Author Meta', 'rara-readable' ),
                    'description' => __( 'Enable to hide author meta.', 'rara-readable' ),
                )
            )
        );

        /** Prefix Archive Page */
        $wp_customize->add_setting( 
            'rara_readable_ed_prefix_archive', 
            array(
                'default'           => $default_options['rara_readable_ed_prefix_archive'],
                'sanitize_callback' => 'rara_readable_sanitize_checkbox'
            ) 
        );
        
        $wp_customize->add_control(
            new Rara_Readable_Toggle_Control( 
                $wp_customize,
                'rara_readable_ed_prefix_archive',
                array(
                    'section'     => 'rara_readable_post_page_settings',
                    'label'       => __( 'Hide Prefix in Archive Page', 'rara-readable' ),
                    'description' => __( 'Enable to hide prefix in archive page.', 'rara-readable' ),
                )
            )
        );

        /** Note */
        $wp_customize->add_setting(
            'rara_readable_post_note_text',
            array(
                'default'           => '',
                'sanitize_callback' => 'wp_kses_post' 
            )
        );
        
        $wp_customize->add_control(
            new Rara_Readable_Note_Control( 
                $wp_customize,
                'rara_readable_post_note_text',
                array(
                    'section'     => 'rara_readable_post_page_settings',
                    'description' => sprintf( '<hr/><b>%1$s</b>', __( 'These options affect your individual posts.', 'rara-readable' ) ),
                )
            )
        );

        /** Enable to use custom header as fallback image */
        $wp_customize->add_setting( 
            'rara_readable_ed_custom_header_fallback', 
            array(
                'default'           => $default_options['rara_readable_ed_custom_header_fallback'],
                'sanitize_callback' => 'rara_readable_sanitize_checkbox'
            ) 
        );
        
        $wp_customize->add_control(
            new Rara_Readable_Toggle_Control( 
                $wp_customize,
                'rara_readable_ed_custom_header_fallback',
                array(
                    'section'     => 'rara_readable_post_page_settings',
                    'label'       => __( 'Custom Header as a Fallback Image', 'rara-readable' ),
                    'description' => __( 'Enable to show custom header as a fallback image.', 'rara-readable' ),
                )
            )
        );

        /** Show related posts */
        $wp_customize->add_setting( 
            'rara_readable_show_related_post', 
            array(
                'default'           => $default_options['rara_readable_show_related_post'],
                'sanitize_callback' => 'rara_readable_sanitize_checkbox'
            ) 
        );
        
        $wp_customize->add_control(
            new Rara_Readable_Toggle_Control( 
                $wp_customize,
                'rara_readable_show_related_post',
                array(
                    'section'     => 'rara_readable_post_page_settings',
                    'label'       => __( 'Show Related Posts', 'rara-readable' ),
                    'description' => __( 'Enable to show related posts in single page.', 'rara-readable' ),
                )
            )
        );

        /** Related post section title */
        $wp_customize->add_setting(
            'rara_readable_related_post_section_title',
            array(
                'default'           => $default_options['rara_readable_related_post_section_title'],
                'sanitize_callback' => 'sanitize_text_field',
                'transport'         => 'postMessage'
            )
        );

        // Abort if selective refresh is not available.
        if ( isset( $wp_customize->selective_refresh ) ) {
            $wp_customize->selective_refresh->add_partial( 'rara_readable_related_post_section_title', array(
                'selector'            => '.related-posts h4.related-title',
                'render_callback'     => 'rara_readable_related_post_title_selective_refresh',
                'container_inclusive' => false,
                'fallback_refresh'    => true,
            ) );
        }
        
        $wp_customize->add_control(
            'rara_readable_related_post_section_title',
            array(
                'label'           => __( 'Related Posts Section Title', 'rara-readable' ),
                'section'         => 'rara_readable_post_page_settings',
                'type'            => 'text',
                'active_callback' => 'rara_readable_post_page_ac'
            )
        );

        /** Enable to show comments */
        $wp_customize->add_setting( 
            'rara_readable_ed_comments', 
            array(
                'default'           => $default_options['rara_readable_ed_comments'],
                'sanitize_callback' => 'rara_readable_sanitize_checkbox'
            ) 
        );
        
        $wp_customize->add_control(
            new Rara_Readable_Toggle_Control( 
                $wp_customize,
                'rara_readable_ed_comments',
                array(
                    'section'     => 'rara_readable_post_page_settings',
                    'label'       => __( 'Show Comments', 'rara-readable' ),
                    'description' => __( 'Enable to show comment in Single Post/Page.', 'rara-readable' ),
                )
            )
        );
    }
endif;
add_action( 'customize_register', 'rara_readable_customize_register_post_and_page_settings' );

if ( ! function_exists( 'rara_readable_post_page_ac' ) ) :
    /**
    * Active callback function for post page controls
    */
    function rara_readable_post_page_ac( $control ){
        $show_excerpt       = $control->manager->get_setting( 'rara_readable_ed_blog_excerpt' )->value();
        $show_related_posts = $control->manager->get_setting( 'rara_readable_show_related_post' )->value();
        $control_id         = $control->id;
    
        if ( $control_id == 'rara_readable_excerpt_length' && $show_excerpt ) return true;
        if ( $control_id == 'rara_readable_related_post_section_title' && $show_related_posts ) return true;
        
        return false;
    }
endif;