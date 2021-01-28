<?php
/**
 * Site Identiti Customizer
 *
 * @package Rara_Readable
 */
if ( ! function_exists( 'rara_readable_customize_register_site_identity' ) ) :
    /**
     * Add custom site identity controls
     */
    function rara_readable_customize_register_site_identity( $wp_customize ) {
    	/** Load default theme options */
        $default_options =  rara_readable_default_theme_options();

        /** Add postMessage support for site title and description */
        $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
        $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    	
        if ( isset( $wp_customize->selective_refresh ) ) {
            $wp_customize->selective_refresh->add_partial( 'blogname', array(
                'selector'        => '.site-title a',
                'render_callback' => 'rara_readable_customize_partial_blogname',

            ) );
            $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
                'selector'        => '.site-description',
                'render_callback' => 'rara_readable_customize_partial_blogdescription',
            ) );
        }
        
        /** Site Title Font */
        $wp_customize->add_setting( 
            'rara_readable_site_title_font', 
            array(
                'default' => $default_options['rara_readable_site_title_font'],
                'sanitize_callback' => 'rara_readable_sanitize_select'
            ) 
        );

    	$wp_customize->add_control( 
            new Rara_Readable_Select_Control( 
                $wp_customize, 
                'rara_readable_site_title_font', 
                array(
                    'label'       => __( 'Site Title Font', 'rara-readable' ),
                    'description' => __( 'Site title and tagline font.', 'rara-readable' ),
                    'section'     => 'title_tagline',
                    'priority'    => 60,
                    'choices'     => rara_readable_get_all_fonts(),
                ) 
            ) 
        );
        
        /** Site Title Font Size*/
        $wp_customize->add_setting( 
            'rara_readable_site_title_font_size', 
            array(
                'default'           => $default_options['rara_readable_site_title_font_size'],
                'sanitize_callback' => 'rara_readable_sanitize_number_absint'
            ) 
        );
        
        $wp_customize->add_control(
    		new Rara_Readable_Slider_Control( 
    			$wp_customize,
    			'rara_readable_site_title_font_size',
    			array(
    				'section'	  => 'title_tagline',
    				'label'		  => __( 'Site Title Font Size', 'rara-readable' ),
    				'description' => __( 'Change the font size of your site title.', 'rara-readable' ),
                    'priority'    => 65,
                    'choices'	  => array(
    					'min' 	=> 10,
    					'max' 	=> 100,
    					'step'	=> 1,
    				)                 
    			)
    		)
    	);
        
    }
endif;
add_action( 'customize_register', 'rara_readable_customize_register_site_identity' );