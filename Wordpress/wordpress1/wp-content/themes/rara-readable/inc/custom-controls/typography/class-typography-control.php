<?php
/**
 * Customizer Typography Control
 *
 * Taken from Kirki.
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if( ! class_exists( 'Rara_Readable_Typography_Control' ) ) {
    
    class Rara_Readable_Typography_Control extends WP_Customize_Control {
    
    	public $tooltip = '';
    	public $js_vars = array();
    	public $output = array();
    	public $option_type = 'theme_mod';
    	public $type = 'typography';
    
    	/**
    	 * Refresh the parameters passed to the JavaScript via JSON.
    	 *
    	 * @access public
    	 * @return void
    	 */
    	public function to_json() {
    		parent::to_json();
    
    		if ( isset( $this->default ) ) {
    			$this->json['default'] = $this->default;
    		} else {
    			$this->json['default'] = $this->setting->default;
    		}
    		$this->json['js_vars'] = $this->js_vars;
    		$this->json['output']  = $this->output;
    		$this->json['value']   = $this->value();
    		$this->json['choices'] = $this->choices;
    		$this->json['link']    = $this->get_link();
    		$this->json['tooltip'] = $this->tooltip;
    		$this->json['id']      = $this->id;
    		$this->json['l10n']    = apply_filters( 'rara-readable-typography-control/il8n/strings', array(
    			'on'                 => esc_attr__( 'ON', 'rara-readable' ),
    			'off'                => esc_attr__( 'OFF', 'rara-readable' ),
    			'all'                => esc_attr__( 'All', 'rara-readable' ),
    			'cyrillic'           => esc_attr__( 'Cyrillic', 'rara-readable' ),
    			'cyrillic-ext'       => esc_attr__( 'Cyrillic Extended', 'rara-readable' ),
    			'devanagari'         => esc_attr__( 'Devanagari', 'rara-readable' ),
    			'greek'              => esc_attr__( 'Greek', 'rara-readable' ),
    			'greek-ext'          => esc_attr__( 'Greek Extended', 'rara-readable' ),
    			'khmer'              => esc_attr__( 'Khmer', 'rara-readable' ),
    			'latin'              => esc_attr__( 'Latin', 'rara-readable' ),
    			'latin-ext'          => esc_attr__( 'Latin Extended', 'rara-readable' ),
    			'vietnamese'         => esc_attr__( 'Vietnamese', 'rara-readable' ),
    			'hebrew'             => esc_attr__( 'Hebrew', 'rara-readable' ),
    			'arabic'             => esc_attr__( 'Arabic', 'rara-readable' ),
    			'bengali'            => esc_attr__( 'Bengali', 'rara-readable' ),
    			'gujarati'           => esc_attr__( 'Gujarati', 'rara-readable' ),
    			'tamil'              => esc_attr__( 'Tamil', 'rara-readable' ),
    			'telugu'             => esc_attr__( 'Telugu', 'rara-readable' ),
    			'thai'               => esc_attr__( 'Thai', 'rara-readable' ),
    			'serif'              => esc_attr_x( 'Serif', 'font style', 'rara-readable' ),
    			'sans-serif'         => esc_attr_x( 'Sans Serif', 'font style', 'rara-readable' ),
    			'monospace'          => esc_attr_x( 'Monospace', 'font style', 'rara-readable' ),
    			'font-family'        => esc_attr__( 'Font Family', 'rara-readable' ),
    			'font-size'          => esc_attr__( 'Font Size', 'rara-readable' ),
    			'font-weight'        => esc_attr__( 'Font Weight', 'rara-readable' ),
    			'line-height'        => esc_attr__( 'Line Height', 'rara-readable' ),
    			'font-style'         => esc_attr__( 'Font Style', 'rara-readable' ),
    			'letter-spacing'     => esc_attr__( 'Letter Spacing', 'rara-readable' ),
    			'text-align'         => esc_attr__( 'Text Align', 'rara-readable' ),
    			'text-transform'     => esc_attr__( 'Text Transform', 'rara-readable' ),
    			'none'               => esc_attr__( 'None', 'rara-readable' ),
    			'uppercase'          => esc_attr__( 'Uppercase', 'rara-readable' ),
    			'lowercase'          => esc_attr__( 'Lowercase', 'rara-readable' ),
    			'top'                => esc_attr__( 'Top', 'rara-readable' ),
    			'bottom'             => esc_attr__( 'Bottom', 'rara-readable' ),
    			'left'               => esc_attr__( 'Left', 'rara-readable' ),
    			'right'              => esc_attr__( 'Right', 'rara-readable' ),
    			'center'             => esc_attr__( 'Center', 'rara-readable' ),
    			'justify'            => esc_attr__( 'Justify', 'rara-readable' ),
    			'color'              => esc_attr__( 'Color', 'rara-readable' ),
    			'select-font-family' => esc_attr__( 'Select a font-family', 'rara-readable' ),
    			'variant'            => esc_attr__( 'Variant', 'rara-readable' ),
    			'style'              => esc_attr__( 'Style', 'rara-readable' ),
    			'size'               => esc_attr__( 'Size', 'rara-readable' ),
    			'height'             => esc_attr__( 'Height', 'rara-readable' ),
    			'spacing'            => esc_attr__( 'Spacing', 'rara-readable' ),
    			'ultra-light'        => esc_attr__( 'Ultra-Light 100', 'rara-readable' ),
    			'ultra-light-italic' => esc_attr__( 'Ultra-Light 100 Italic', 'rara-readable' ),
    			'light'              => esc_attr__( 'Light 200', 'rara-readable' ),
    			'light-italic'       => esc_attr__( 'Light 200 Italic', 'rara-readable' ),
    			'book'               => esc_attr__( 'Book 300', 'rara-readable' ),
    			'book-italic'        => esc_attr__( 'Book 300 Italic', 'rara-readable' ),
    			'regular'            => esc_attr__( 'Normal 400', 'rara-readable' ),
    			'italic'             => esc_attr__( 'Normal 400 Italic', 'rara-readable' ),
    			'medium'             => esc_attr__( 'Medium 500', 'rara-readable' ),
    			'medium-italic'      => esc_attr__( 'Medium 500 Italic', 'rara-readable' ),
    			'semi-bold'          => esc_attr__( 'Semi-Bold 600', 'rara-readable' ),
    			'semi-bold-italic'   => esc_attr__( 'Semi-Bold 600 Italic', 'rara-readable' ),
    			'bold'               => esc_attr__( 'Bold 700', 'rara-readable' ),
    			'bold-italic'        => esc_attr__( 'Bold 700 Italic', 'rara-readable' ),
    			'extra-bold'         => esc_attr__( 'Extra-Bold 800', 'rara-readable' ),
    			'extra-bold-italic'  => esc_attr__( 'Extra-Bold 800 Italic', 'rara-readable' ),
    			'ultra-bold'         => esc_attr__( 'Ultra-Bold 900', 'rara-readable' ),
    			'ultra-bold-italic'  => esc_attr__( 'Ultra-Bold 900 Italic', 'rara-readable' ),
    			'invalid-value'      => esc_attr__( 'Invalid Value', 'rara-readable' ),
    		) );
    
    		$defaults = array( 'font-family'=> false );
    
    		$this->json['default'] = wp_parse_args( $this->json['default'], $defaults );
    	}
    
    	/**
    	 * Enqueue scripts and styles.
    	 *
    	 * @access public
    	 * @return void
    	 */
    	public function enqueue() {
    		wp_enqueue_style( 'rara-readable-typography', get_template_directory_uri() . '/inc/custom-controls/typography/typography.css', null );
            /*
    		 * JavaScript
    		 */
            wp_enqueue_script( 'jquery-ui-core' );
    		wp_enqueue_script( 'jquery-ui-tooltip' );
    		wp_enqueue_script( 'jquery-stepper-min-js' );
    		
    		// Selectize
    		wp_enqueue_script( 'rara-readable-selectize', get_template_directory_uri() . '/inc/custom-controls/select/selectize.js', array( 'jquery' ), false, true );
    
    		// Typography
    		wp_enqueue_script( 'rara-readable-typography', get_template_directory_uri() . '/inc/custom-controls/typography/typography.js', array(
    			'jquery',
    			'rara-readable-selectize'
    		), false, true );
    
    		$google_fonts   = Rara_Readable_Fonts::get_google_fonts();
    		$standard_fonts = Rara_Readable_Fonts::get_standard_fonts();
    		$all_variants   = Rara_Readable_Fonts::get_all_variants();
    
    		$standard_fonts_final = array();
    		foreach ( $standard_fonts as $key => $value ) {
    			$standard_fonts_final[] = array(
    				'family'      => $value['stack'],
    				'label'       => $value['label'],
    				'is_standard' => true,
    				'variants'    => array(
    					array(
    						'id'    => 'regular',
    						'label' => $all_variants['regular'],
    					),
    					array(
    						'id'    => 'italic',
    						'label' => $all_variants['italic'],
    					),
    					array(
    						'id'    => '700',
    						'label' => $all_variants['700'],
    					),
    					array(
    						'id'    => '700italic',
    						'label' => $all_variants['700italic'],
    					),
    				),
    			);
    		}
    
    		$google_fonts_final = array();
    
    		if ( is_array( $google_fonts ) ) {
    			foreach ( $google_fonts as $family => $args ) {
    				$label    = ( isset( $args['label'] ) ) ? $args['label'] : $family;
    				$variants = ( isset( $args['variants'] ) ) ? $args['variants'] : array( 'regular', '700' );
    
    				$available_variants = array();
    				foreach ( $variants as $variant ) {
    					if ( array_key_exists( $variant, $all_variants ) ) {
    						$available_variants[] = array( 'id' => $variant, 'label' => $all_variants[ $variant ] );
    					}
    				}
    
    				$google_fonts_final[] = array(
    					'family'   => $family,
    					'label'    => $label,
    					'variants' => $available_variants
    				);
    			}
    		}
    
    		$final = array_merge( $standard_fonts_final, $google_fonts_final );
    		wp_localize_script( 'rara-readable-typography', 'rara_readable_all_fonts', $final );
    	}
    
    	/**
    	 * An Underscore (JS) template for this control's content (but not its container).
    	 *
    	 * Class variables for this control class are available in the `data` JS object;
    	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
    	 *
    	 * I put this in a separate file because PhpStorm didn't like it and it fucked with my formatting.
    	 *
    	 * @see    WP_Customize_Control::print_template()
    	 *
    	 * @access protected
    	 * @return void
    	 */
    	protected function content_template() { ?>
    		<# if ( data.tooltip ) { #>
                <a href="#" class="tooltip hint--left" data-hint="{{ data.tooltip }}"><span class='dashicons dashicons-info'></span></a>
            <# } #>
            
            <label class="customizer-text">
                <# if ( data.label ) { #>
                    <span class="customize-control-title">{{{ data.label }}}</span>
                <# } #>
                <# if ( data.description ) { #>
                    <span class="description customize-control-description">{{{ data.description }}}</span>
                <# } #>
            </label>
            
            <div class="wrapper">
                <# if ( data.default['font-family'] ) { #>
                    <# if ( '' == data.value['font-family'] ) { data.value['font-family'] = data.default['font-family']; } #>
                    <# if ( data.choices['fonts'] ) { data.fonts = data.choices['fonts']; } #>
                    <div class="font-family">
                        <h5>{{ data.l10n['font-family'] }}</h5>
                        <select id="rara-typography-font-family-{{{ data.id }}}" placeholder="{{ data.l10n['select-font-family'] }}"></select>
                    </div>
                    <div class="variant rara-variant-wrapper">
                        <h5>{{ data.l10n['style'] }}</h5>
                        <select class="variant" id="rara-typography-variant-{{{ data.id }}}"></select>
                    </div>
                <# } #>   
                
            </div>
            <?php
    	}
    
    }
}