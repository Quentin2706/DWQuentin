<?php
/**
 * Typography Related Functions
 *
 * @package Rara_Readable
 */
 
function rara_readable_fonts_url(){
    /** Load default theme options */
    $default_options =  rara_readable_default_theme_options();

    $fonts_url = '';
    
    $site_title_font    = get_theme_mod( 'rara_readable_site_title_font', $default_options['rara_readable_site_title_font'] );
    $ig_site_title_font = rara_readable_is_google_font( $site_title_font );

    $primary_font         = 'georgia-serif';
    $ig_primary_font      = rara_readable_is_google_font( $primary_font );    
    $secondary_font       = 'Open Sans';
    $ig_secondary_font    = rara_readable_is_google_font( $secondary_font );
    
    /* Translators: If there are characters in your language that are not
    * supported by respective fonts, translate this to 'off'. Do not translate
    * into your own language.
    */
    $site_title = _x( 'on', 'Site Title Font: on or off', 'rara-readable' );
    $primary    = _x( 'on', 'Primary Font: on or off', 'rara-readable' );
    $secondary  = _x( 'on', 'Secondary Font: on or off', 'rara-readable' );
    
    if ( 'off' !== $site_title || 'off' !== $primary || 'off' !== $secondary ) {
        
        $font_families = array();
     
        
        if ( 'off' !== $site_title && $ig_site_title_font ) {
            
            if( ! empty( $site_title_font['variant'] ) ){
                $site_title_var = ':' . rara_readable_check_varient( $site_title_font, 'regular' );    
            }else{
                $site_title_var = '';
            }
            $font_families[] = $site_title_font . $site_title_var;
        }

        if ( 'off' !== $primary && $ig_primary_font ) {
            $primary_variant = rara_readable_check_varient( $primary_font, 'regular', true );
            if( $primary_variant ){
                $primary_var = ':' . $primary_variant;
            }else{
                $primary_var = '';    
            }            
            $font_families[] = $primary_font . $primary_var;
        }
         
        if ( 'off' !== $secondary && $ig_secondary_font ) {
            $secondary_variant = rara_readable_check_varient( $secondary_font, 'regular', true );
            if( $secondary_variant ){
                $secondary_var = ':' . $secondary_variant;    
            }else{
                $secondary_var = '';
            }
            $font_families[] = $secondary_font . $secondary_var;
        }
        
        $font_families = array_diff( array_unique( $font_families ), array('') );

        
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),            
        );
        
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
     
    return esc_url( $fonts_url );
}

/**
 * Get Google Fonts
*/
function rara_readable_get_google_fonts(){
    $fonts = include wp_normalize_path( get_template_directory() . '/inc/custom-controls/typography/webfonts.php' );
    $google_fonts = array();
    if ( is_array( $fonts ) ) {
        foreach ( $fonts['items'] as $font ) {
            $google_fonts[ $font['family'] ] = array(
                'variants' => $font['variants'],
            );
        }
    }    
    return $google_fonts;
}

/**
 * Function listing WebSafe Fonts and its attributes
*/
function rara_readable_get_websafe_font(){
    $standard_fonts = array(
        'georgia-serif' => array(
            'variants' => array( 'regular', 'italic', '700', '700italic' ),
            'fonts' => 'Georgia, serif',
        ),
        'palatino-serif' => array(
            'variants' => array( 'regular', 'italic', '700', '700italic' ),
            'fonts' => '"Palatino Linotype", "Book Antiqua", Palatino, serif',
        ),
        'times-serif' => array(
            'variants' => array( 'regular', 'italic', '700', '700italic' ),
            'fonts' => '"Times New Roman", Times, serif',
        ),
        'arial-helvetica' => array(
            'variants' => array( 'regular', 'italic', '700', '700italic' ),
            'fonts' => 'Arial, Helvetica, sans-serif',
        ),
        'arial-gadget' => array(
            'variants' => array( 'regular', 'italic', '700', '700italic' ),
            'fonts' => '"Arial Black", Gadget, sans-serif',
        ),
        'comic-cursive' => array(
            'variants' => array( 'regular', 'italic', '700', '700italic' ),
            'fonts' => '"Comic Sans MS", cursive, sans-serif',
        ),
        'impact-charcoal'  => array(
            'variants' => array( 'regular', 'italic', '700', '700italic' ),
            'fonts' => 'Impact, Charcoal, sans-serif',
        ),
        'lucida' => array(
            'variants' => array( 'regular', 'italic', '700', '700italic' ),
            'fonts' => '"Lucida Sans Unicode", "Lucida Grande", sans-serif',
        ),
        'tahoma-geneva' => array(
            'variants' => array( 'regular', 'italic', '700', '700italic' ),
            'fonts' => 'Tahoma, Geneva, sans-serif',
        ),
        'trebuchet-helvetica' => array(
            'variants' => array( 'regular', 'italic', '700', '700italic' ),
            'fonts' => '"Trebuchet MS", Helvetica, sans-serif',
        ),
        'verdana-geneva'  => array(
            'variants' => array( 'regular', 'italic', '700', '700italic' ),
            'fonts' => 'Verdana, Geneva, sans-serif',
        ),
        'courier' => array(
            'variants' => array( 'regular', 'italic', '700', '700italic' ),
            'fonts' => '"Courier New", Courier, monospace',
        ),
        'lucida-monaco' => array(
            'variants' => array( 'regular', 'italic', '700', '700italic' ),
            'fonts' => '"Lucida Console", Monaco, monospace',
        )
    ); 
    
    return $standard_fonts;
}

/**
 * Checks for matched varients in google fonts for typography fields
*/
function rara_readable_check_varient( $font_family = 'serif', $font_variants = 'regular', $body = false ){
    $variant = '';
    $var     = array();
    $google_fonts  = rara_readable_get_google_fonts(); //Google Fonts
    $websafe_fonts = rara_readable_get_websafe_font(); //Standard Web Safe Fonts
    
    if( array_key_exists( $font_family, $google_fonts ) ){
        $variants = $google_fonts[ $font_family ][ 'variants' ];

        if( in_array( $font_variants, $variants ) ){
            if( $body ){ //LOAD ALL VARIANTS FOR BODY FONT
                foreach( $variants as $v ){
                    $var[] = $v;
                }
                $variant = implode( ',', $var );
            }else{                
                $variant = $font_variants;
            }
        }else{
            $variant = 'regular';
        }
        
    }else{ //Standard Web Safe Fonts
        if( array_key_exists( $font_family, $websafe_fonts ) ){
            $variants = $websafe_fonts[ $font_family ][ 'variants' ];
            if( in_array( $font_variants, $variants ) ){
                if( $body ){ //LOAD ALL VARIANTS FOR BODY FONT
                    foreach( $variants as $v ){
                        $var[] = $v;
                    }
                    $variant = implode( ',', $var );
                }else{  
                    $variant = $font_variants;
                }
            }else{
                $variant = 'regular';
            }    
        }
    }
    return $variant;
}

/**
 * Returns font weight and font style to use in dynamic styles.
*/
function rara_readable_get_css_variant( $font_variant ){
    $v_array = array(
        '100'       => array(
            'weight'    => '100',
            'style'     => 'normal'
            ),
        '100italic' => array(
            'weight'    => '100',
            'style'     => 'italic'
            ),
        '200'       => array(
            'weight'    => '200',
            'style'     => 'normal'
            ),
        '200italic' => array(
            'weight'    => '200',
            'style'     => 'italic'
            ),
        '300'       => array(
            'weight'    => '300',
            'style'     => 'normal'
            ),
        '300italic' => array(
            'weight'    => '300',
            'style'     => 'italic'
            ),
        'regular'   => array(
            'weight'    => '400',
            'style'     => 'normal'
            ),
        'italic'    => array(
            'weight'    => '400',
            'style'     => 'italic'
            ),
        '500'       => array(
            'weight'    => '500',
            'style'     => 'normal'
            ),
        '500italic' => array(
            'weight'    => '500',
            'style'     => 'italic'
            ),
        '600'       => array(
            'weight'    => '600',
            'style'     => 'normal'
            ),
        '600italic' => array(
            'weight'    => '600',
            'style'     => 'italic'
            ),
        '700'       => array(
            'weight'    => '700',
            'style'     => 'normal'
            ),
        '700italic' => array(
            'weight'    => '700',
            'style'     => 'italic'
            ),
        '800'       => array(
            'weight'    => '800',
            'style'     => 'normal'
            ),
        '800italic' => array(
            'weight'    => '800',
            'style'     => 'italic'
            ),
        '900'       => array(
            'weight'    => '900',
            'style'     => 'normal'
            ),
        '900italic' => array(
            'weight'    => '900',
            'style'     => 'italic'
            ),
    );
    
    if( array_key_exists( $font_variant, $v_array ) ){
        return $v_array[ $font_variant ];
    }
}

/**
 * Function to check if it's a google font
*/
function rara_readable_is_google_font( $font ){
    $return = false;
    $websafe_fonts = rara_readable_get_websafe_font();
    if( $font ){
        if( array_key_exists( $font, $websafe_fonts ) ){
            //Web Safe Font
            $return = false;
        }else{
            //Google Font
            $return = true;
        }
    }
    return $return; 
}

/**
 * Function to get valid font, weight and style
*/
function rara_readable_get_fonts( $font_family, $font_variant = "regular" ){
    
    $fonts = array();
    $websafe_fonts = rara_readable_get_websafe_font(); //Web Safe Font
    
    if( $font_family ){
        if( rara_readable_is_google_font( $font_family ) ){
            $fonts['font'] = esc_attr( $font_family ); //Google Font
            if( $font_variant ){
                $weight_style    = rara_readable_get_css_variant( rara_readable_check_varient( $font_family, $font_variant ) );
                $fonts['weight'] = $weight_style['weight'];
                $fonts['style']  = $weight_style['style'];
            }else{
                $fonts['weight'] = '400';
                $fonts['style']  = 'normal';
            }
        }else{
            if( array_key_exists( $font_family, $websafe_fonts ) ){
                $fonts['font'] = $websafe_fonts[ $font_family ]['fonts']; //Web Safe Font
                if( $font_variant ){
                    $weight_style    = rara_readable_get_css_variant( rara_readable_check_varient( $font_family, $font_variant ) );
                    $fonts['weight'] = $weight_style['weight'];
                    $fonts['style']  = $weight_style['style'];
                }else{
                    $fonts['weight'] = '400';
                    $fonts['style']  = 'normal';
                }
            }
        }   
    }else{
        $fonts['font']   = '"Times New Roman", Times, serif';
        $fonts['weight'] = '400';
        $fonts['style']  = 'normal';
    }
    
    return $fonts;
}