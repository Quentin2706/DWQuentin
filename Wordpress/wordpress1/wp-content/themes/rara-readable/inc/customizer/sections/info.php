<?php
/**
 * Rara Readable Theme Info
 *
 * @package Rara_Readable
 */

if ( ! function_exists( 'rara_readable_customizer_theme_info' ) ) :
	/**
     * Add theme info
     */
	function rara_readable_customizer_theme_info( $wp_customize ) {
		
	    $wp_customize->add_section( 'rara_readable_theme_info', array(
			'title'       => __( 'Demo & Documentation' , 'rara-readable' ),
			'priority'    => 6,
		) );
	    
	    /** Important Links */
		$wp_customize->add_setting( 'rara_readable_theme_info_theme',
	        array(
	            'default' => '',
	            'sanitize_callback' => 'wp_kses_post',
	        )
	    );
	    
	    $theme_info = '<p>';

	    /* translators: 1: string, 2: preview url, 3: string */
		$theme_info .= sprintf( '%1$s<a href="%2$s" target="_blank">%3$s</a>', esc_html__( 'Demo Link : ', 'rara-readable' ), esc_url( __( 'https://rarathemes.com/previews/?theme=rara-readable', 'rara-readable' ) ), esc_html__( 'Click here.', 'rara-readable' ) );

	    $theme_info .= '</p><p>';

	    /* translators: 1: string, 2: documentation url, 3: string */
	    $theme_info .= sprintf( '%1$s<a href="%2$s" target="_blank">%3$s</a>', esc_html__( 'Documentation Link : ', 'rara-readable' ), esc_url( 'https://docs.rarathemes.com/docs/rara-readable/' ), esc_html__( 'Click here.', 'rara-readable' ) );

	    $theme_info .= '</p>';

		$wp_customize->add_control( new Rara_Readable_Note_Control( $wp_customize,
	        'rara_readable_theme_info_theme', 
	            array(
	                'section'     => 'rara_readable_theme_info',
	                'description' => $theme_info
	            )
	        )
	    );
	    
	}
endif;
add_action( 'customize_register', 'rara_readable_customizer_theme_info' );

if( class_exists( 'WP_Customize_Section' ) ) :
/**
 * Adding Go to Pro Section in Customizer
 * https://github.com/justintadlock/trt-customizer-pro
 */
class Rara_Readable_Customize_Section_Pro extends WP_Customize_Section {

	/**
	 * The type of customize section being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'pro-section';

	/**
	 * Custom button text to output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_text = '';

	/**
	 * Custom pro button URL.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_url = '';

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function json() {
		$json = parent::json();

		$json['pro_text'] = $this->pro_text;
		$json['pro_url']  = esc_url( $this->pro_url );

		return $json;
	}

	/**
	 * Outputs the Underscore.js template.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	protected function render_template() { ?>
		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
			<h3 class="accordion-section-title">
				{{ data.title }}
				<# if ( data.pro_text && data.pro_url ) { #>
					<a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
				<# } #>
			</h3>
		</li>
	<?php }
}
endif;

add_action( 'customize_register', 'rara_readable_page_sections_pro' );

function rara_readable_page_sections_pro( $manager ) {
	// Register custom section types.
	$manager->register_section_type( 'Rara_Readable_Customize_Section_Pro' );

	// Register sections.
	$manager->add_section(
		new Rara_Readable_Customize_Section_Pro(
			$manager,
			'rara_readable_page_view_pro',
			array(
				'title'    => esc_html__( 'Pro Available', 'rara-readable' ),
                'priority' => 5, 
				'pro_text' => esc_html__( 'VIEW PRO THEME', 'rara-readable' ),
				'pro_url'  => 'https://rarathemes.com/wordpress-themes/rara-readable-pro/'
			)
		)
	);
}