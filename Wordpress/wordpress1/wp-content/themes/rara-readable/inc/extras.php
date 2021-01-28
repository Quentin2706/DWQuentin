<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Rara_Readable
 */

if( ! function_exists( 'rara_readable_get_primary_menu_navigation' ) ) :
    /**
     * Function to add primary menu
     */
    function rara_readable_get_primary_menu_navigation() { ?>
        <nav class="main-navigation">
            <button class="toggle-button" type="button">
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
            </button>
            <div id="primary-navigation" class="primary-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'nav-menu', 
                    'container'      => false,
                    'fallback_cb'    => 'rara_readable_primary_menu_fallback',
                ) );
            ?>
            </div>
        </nav>
    <?php
    }
endif;

if ( ! function_exists( 'rara_readable_get_header_search_form' ) ) :
    /**
     * Function to add header search form
     */
    function rara_readable_get_header_search_form() { ?>
        <div class="header-t-search">
             <button class="search-btn"><i class="fa fa-search"></i></button>
            <?php get_search_form(); ?>
        </div>
    <?php
    }
endif;

if ( ! function_exists( 'rara_readable_get_social_links' ) ) :
    /**
     * Prints social links in header
     */
    function rara_readable_get_social_links(){
        /** Load default theme options */
        $default_options =  rara_readable_default_theme_options();
       
        $ed_social    = get_theme_mod( 'rara_readable_ed_social_links', $default_options['rara_readable_ed_social_links'] ); 
        $social_links = get_theme_mod( 'rara_readable_social_links', $default_options['rara_readable_social_links'] );
        
        if( $ed_social && $social_links ){ ?>
        <div class="header-social">
            <ul class="social-icons">
                <?php foreach( $social_links as $link ){ ?>
                    <li><a href="<?php echo esc_url( $link['link'] ); ?>" target="_blank" rel="nofollow"><i class="<?php echo esc_attr( $link['font'] ); ?>"></i></a></li>         
                <?php } ?>
            </ul>
        </div><!-- .header-social -->
        <?php    
        }
    }
endif;

if ( ! function_exists( 'rara_readable_get_wc_cart' ) ) :
    /**
     * Function to add WooCommerce Cart button
     */
    function rara_readable_get_wc_cart() {
        $wc_cart_page_id = get_option( 'woocommerce_cart_page_id' );
        if( rara_readable_is_woocommerce_activated() && ! empty( $wc_cart_page_id ) ) { ?>
            <div class="shopping-cart">
                <span class="cart">                                      
                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'rara-readable' ); ?>">
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                </span>
            </div>
        <?php    
        }
    }
endif;

if ( ! function_exists( 'rara_readable_comment' ) ) :
    /**
     * Callback function for Comment List
     * 
     * @link https://codex.wordpress.org/Function_Reference/wp_list_comments 
     */
    function rara_readable_comment( $comment, $args, $depth ) {
        if ( 'div' == $args['style'] ) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
        ?>
        <<?php echo esc_attr( $tag ) ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
        <?php if ( 'div' != $args['style'] ) : ?>
        <article id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <?php endif; ?>
        <div class="comment-author vcard">
        <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
        <?php 
            /* translators: %s: author link */
            printf( __( '<b class="fn">%s</b>', 'rara-readable' ), get_comment_author_link() ); 
        ?>
        </div>

        <div class="comment-metadata commentmetadata">
            <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
            <?php echo date_i18n( get_option( 'date_format' ), strtotime( get_comment_date() ) ); ?>
            </a>
            <?php edit_comment_link( __( 'Edit', 'rara-readable' ), '  ', '' ); ?>
        </div>

        <?php if ( $comment->comment_approved == '0' ) : ?>
            <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'rara-readable' ); ?></p>
        <?php endif; ?>
        
        <div class="comment-content">
           <?php comment_text(); ?>
        </div>
        
        <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        </div>
        
        <?php if ( 'div' != $args['style'] ) : ?>
        </article>
        <?php endif; ?>
    <?php
    }
endif;

if ( ! function_exists( 'rara_readable_sidebar_params' ) ) :
    /**
     * Returns no of widgets in particular sidebar
     * 
     */
    function rara_readable_sidebar_params( $sidebar_id ) {

        $total_widgets = wp_get_sidebars_widgets();

        if ( ! empty( $total_widgets[ $sidebar_id ] ) ) {
            $number_of_widgets = count( $total_widgets[$sidebar_id] );
        } else {
            $number_of_widgets = false;
        }

        return $number_of_widgets;
    }
endif;

if( ! function_exists( 'rara_readable_get_all_fonts' ) ) :
    /**
     * Return Web safe font and google font
     */
    function rara_readable_get_all_fonts(){
        $google = array();        
        $standard = array(
            'georgia-serif'       => __( 'Georgia', 'rara-readable' ),
            'palatino-serif'      => __( 'Palatino Linotype, Book Antiqua, Palatino', 'rara-readable' ),
            'times-serif'         => __( 'Times New Roman, Times', 'rara-readable' ),
            'arial-helvetica'     => __( 'Arial, Helvetica', 'rara-readable' ),
            'arial-gadget'        => __( 'Arial Black, Gadget', 'rara-readable' ),
            'comic-cursive'       => __( 'Comic Sans MS, cursive', 'rara-readable' ),
            'impact-charcoal'     => __( 'Impact, Charcoal', 'rara-readable' ),
            'lucida'              => __( 'Lucida Sans Unicode, Lucida Grande', 'rara-readable' ),
            'tahoma-geneva'       => __( 'Tahoma, Geneva', 'rara-readable' ),
            'trebuchet-helvetica' => __( 'Trebuchet MS, Helvetica', 'rara-readable' ),
            'verdana-geneva'      => __( 'Verdana, Geneva', 'rara-readable' ),
            'courier'             => __( 'Courier New, Courier', 'rara-readable' ),
            'lucida-monaco'       => __( 'Lucida Console, Monaco', 'rara-readable' ),
        );
        
        $fonts = include wp_normalize_path( get_template_directory() . '/inc/custom-controls/typography/webfonts.php' );
        
        foreach( $fonts['items'] as $font ){
            $google[$font['family']] = $font['family'];
        }

        $all_fonts = array_merge( $standard, $google );

        return $all_fonts; 
    }
endif;

if( ! function_exists( 'rara_readable_primary_menu_fallback' ) ) :
    /**
     * Fallback for primary menu
     */
    function rara_readable_primary_menu_fallback(){
        if( current_user_can( 'manage_options' ) ){
            echo '<ul id="primary-menu" class="menu-nav">';
            echo '<li><a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">' . esc_html__( 'Click here to add primary menu', 'rara-readable' ) . '</a></li>';
            echo '</ul>';
        }
    }
endif;

if ( ! function_exists( 'rara_readable_sidebar' ) ) :
    /**
     * Return sidebar
     */
    function rara_readable_sidebar() {
        $return = false;

        if ( rara_readable_is_woocommerce_activated() ) {
            if ( ( is_singular( 'product' ) || is_archive( 'product' ) ) && is_active_sidebar( 'shop-sidebar' ) ) {
                $return = 'shop-sidebar';
            } elseif ( is_active_sidebar( 'primary-sidebar' ) ) {
                $return = 'primary-sidebar';
            } else {
                $return = false;
            }
        } else {
            if ( is_active_sidebar( 'primary-sidebar' ) ) {
                $return = 'primary-sidebar';
            } else {
                $return = false;
            }
        }

        return $return; 
    }
endif;

if( ! function_exists( 'rara_readable_escape_text_tags' ) ) :
    /**
     * Remove new line tags from string
     *
     * @param $text
     *
     * @return string
     */
    function rara_readable_escape_text_tags( $text ) {
        return (string) str_replace( array( "\r", "\n" ), '', strip_tags( $text ) );
    }
endif;

if( ! function_exists( 'rara_readable_is_woocommerce_activated' ) ) :
    /**
     * Check if woocommerce plugin is active in theme
     * @link https://wordpress.stackexchange.com/questions/159177/how-to-check-if-woocommerce-is-activated-in-theme
     */
    function rara_readable_is_woocommerce_activated() {
        return class_exists( 'woocommerce' ) ? true : false;
    }
endif;

if( ! function_exists( 'wp_body_open' ) ) :
/**
 * Fire the wp_body_open action.
 * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
*/
function wp_body_open() {
	/**
	 * Triggered after the opening <body> tag.
    */
	do_action( 'wp_body_open' );
}
endif;
