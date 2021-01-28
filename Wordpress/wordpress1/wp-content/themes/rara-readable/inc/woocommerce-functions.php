<?php
/**
 * Rara Readable woocommerce hooks and functions.
 *
 * @link https://docs.woothemes.com/document/third-party-custom-theme-compatibility/
 *
 * @package Rara_Readable
 */

/**
 * Woocommerce related hooks
*/
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',                 20 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper',     10 );
remove_action( 'woocommerce_after_main_content',  'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_sidebar',             'woocommerce_get_sidebar',                10 );

add_action( 'woocommerce_before_main_content',  'rara_readable_wc_wrapper',         10 );
add_action( 'woocommerce_after_main_content',   'rara_readable_wc_wrapper_end',     10 );
add_action( 'after_setup_theme',                'rara_readable_wc_support' );
add_action( 'widgets_init',                     'rara_readable_wc_widgets_init' );
add_filter( 'woocommerce_show_page_title' ,     '__return_false' );

if ( ! function_exists( 'rara_readable_wc_support' ) ) :
    /**
     * Declare Woocommerce Support
     */
    function rara_readable_wc_support() {
        global $woocommerce;

        add_theme_support( 'woocommerce' );        

        if( version_compare( $woocommerce->version, '3.0', ">=" ) ) {
            add_theme_support( 'wc-product-gallery-zoom' );
            add_theme_support( 'wc-product-gallery-lightbox' );
            add_theme_support( 'wc-product-gallery-slider' );
        }
    }
endif;

if ( ! function_exists( 'rara_readable_wc_wrapper' ) ) :
    /**
     * Before Content
     * Wraps all WooCommerce content in wrappers which match the theme markup
     */
    function rara_readable_wc_wrapper(){    
        ?>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
        <?php
    }
endif;

if ( ! function_exists( 'rara_readable_wc_wrapper_end' ) ) :
    /**
     * After Content
     * Closes the wrapping divs
     */
    function rara_readable_wc_wrapper_end(){
        ?>
            </main>
        </div>
        <?php
    }
endif;

if ( ! function_exists( 'rara_readable_wc_widgets_init' ) ) :
    /**
     * Woocommerce Sidebar
     */
    function rara_readable_wc_widgets_init(){
        register_sidebar( array(
            'name'          => esc_html__( 'Shop Sidebar', 'rara-readable' ),
            'id'            => 'shop-sidebar',
            'description'   => esc_html__( 'Sidebar displaying only in woocommerce pages.', 'rara-readable' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );    
    }
endif;