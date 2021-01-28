<?php
/**
 * Rara Readable Demo Content
 *
 * @package Rara_Readable
 */

if ( ! function_exists( 'rara_readable_customizer_demo_content' ) ) :
	/**
     * Add demo content info
     */
	function rara_readable_customizer_demo_content( $wp_customize ) {
		
	    $wp_customize->add_section( 'rara_readable_theme_demo_content' , array(
			'title'       => __( 'Demo Content Import' , 'rara-readable' ),
			'priority'    => 7,
			));
	        
	    $wp_customize->add_setting(
			'rara_readable_demo_content_instruction',
			array(
				'sanitize_callback' => 'wp_kses_post'
			)
		);

	    /* translators: 1: string, 2: url, 3: string */
	    $demo_content_description = sprintf( '%1$s<a class="documentation" href="%2$s" target="_blank">%3$s</a>', esc_html__( 'Rara Readable comes with demo content import feature. You can import the demo content with just one click. For step-by-step video tutorial, ', 'rara-readable' ), esc_url( 'https://rarathemes.com/blog/import-demo-content-rara-themes/' ), esc_html__( 'Click here', 'rara-readable' ) );


		$wp_customize->add_control(
			new Rara_Readable_Note_Control( 
				$wp_customize,
				'rara_readable_demo_content_instruction',
				array(
					'section'		=> 'rara_readable_theme_demo_content',
					'description'	=> $demo_content_description
				)
			)
		);
	    
		$theme_demo_content_desc = '';

		if( ! class_exists( 'RDDI_init' ) ) {
			$theme_demo_content_desc .= '<span class="sticky_info_row"><label class="row-element">' . __( 'Plugin required', 'rara-readable' ) . ': </label><a href="' . esc_url( 'https://wordpress.org/plugins/rara-one-click-demo-import/' ) . '" target="_blank">' . __( 'Rara One Click Demo Import', 'rara-readable' ) . '</a></span><br />';
		}

		$theme_demo_content_desc .= '<span class="sticky_info_row download-link"><label class="row-element">' . __( 'Download Demo Content', 'rara-readable' ) . ': </label><a href="' . esc_url( 'https://docs.rarathemes.com/docs/rara-readable/theme-installation-and-activation/how-to-import-demo-content/' ) . '" target="_blank">' . __( 'Click here', 'rara-readable' ) . '</a></span><br />';

		$wp_customize->add_setting( 'theme_demo_content_info',array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
			));

		// Demo content 
		$wp_customize->add_control( new Rara_Readable_Note_Control( $wp_customize ,'theme_demo_content_info',array(
			'section'     => 'rara_readable_theme_demo_content',
			'description' => $theme_demo_content_desc
			)));

	}
endif;
add_action( 'customize_register', 'rara_readable_customizer_demo_content' );