<?php
/**
 * Custom functions
 *
 * @package Rara_Readable
 */

if ( ! function_exists( 'rara_readable_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function rara_readable_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Rara Readable Pro, use a find and replace
         * to change 'rara-readable' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'rara-readable', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary-menu' => esc_html__( 'Primary', 'rara-readable' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'rara_readable_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Set up the WordPress core custom header feature
        add_theme_support( 'custom-header', apply_filters( 'rara_readable_custom_header_args', array(
            'default-image' => get_template_directory_uri() . '/images/custom-header.jpg',
            'width'         => 880,
            'height'        => 303,
            'header-text'   => false,
        ) ) );

        register_default_headers( array(
            'default-image' => array(
                'url'           => '%s/images/custom-header.jpg',
                'thumbnail_url' => '%s/images/custom-header.jpg',
                'description'   => __( 'Default Header Image', 'rara-readable' ),
            ),
        ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'width'       => 312,
            'height'      => 68,
            'flex-width'  => true,
            'flex-height' => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );

        // Custom Image Size
        add_image_size( 'rara-readable-single-post',880,303,true );
        add_image_size( 'rara-readable-fullwidth',880,460,true );
        add_image_size( 'rara-readable-list',320,300,true );
        add_image_size( 'rara-readable-related',270,140,true );
        add_image_size( 'rara-readable-schema', 600, 60 );

        // Add theme support for Responsive Videos.
        if ( defined( 'JETPACK__VERSION' ) ) {
            add_theme_support( 'jetpack-responsive-videos' );
        }
    }
endif;
add_action( 'after_setup_theme', 'rara_readable_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rara_readable_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'rara_readable_content_width', 640 );
}
add_action( 'after_setup_theme', 'rara_readable_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function rara_readable_scripts() {
    /** Load default theme options */
    $default_options =  rara_readable_default_theme_options();
    $sidebar         = rara_readable_sidebar();

    wp_enqueue_script( 'all', get_template_directory_uri() . '/js' . UNMINIFY . '/all' . SUFFIX . '.js', array( 'jquery' ), '5.6.3', true );
    wp_enqueue_script( 'v4-shims', get_template_directory_uri() . '/js' . UNMINIFY . '/v4-shims' . SUFFIX . '.js', array( 'jquery' ), '5.6.3', true );
    wp_enqueue_style( 'rara-readable-google-fonts', rara_readable_fonts_url(), array(), null );

    wp_enqueue_style( 'perfect-scrollbar', get_template_directory_uri(). '/css'. UNMINIFY .'/perfect-scrollbar'. SUFFIX .'.css' );

    if( rara_readable_is_woocommerce_activated() ) {
        wp_enqueue_style( 'rara-readable-woocommerce-style', get_template_directory_uri(). '/css'. UNMINIFY .'/woocommerce'. SUFFIX .'.css', array('rara-readable-style'), RARA_READABLE_THEME_VERSION );
    }

    wp_enqueue_style( 'rara-readable-style', get_stylesheet_uri() );

    wp_enqueue_script( 'perfect-scrollbar', get_template_directory_uri() . '/js'. UNMINIFY .'/perfect-scrollbar'. SUFFIX .'.js', array('jquery'), '1.3.0', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // Register custom js script
    wp_enqueue_script( 'rara-readable-custom', get_template_directory_uri() . '/js'. UNMINIFY .'/custom'. SUFFIX .'.js', array( 'jquery' ), RARA_READABLE_THEME_VERSION, true );

    $array = array(
        'sidebar_active'   => is_active_sidebar( $sidebar ) ? true : false,
    );

    // Localize custom js script
    wp_localize_script( 'rara-readable-custom', 'rara_readable_data', $array );

    // Enqueue custom js script
    wp_enqueue_script( 'rara-readable-custom' );

    // Load inline styles
    $site_title_font      = get_theme_mod( 'rara_readable_site_title_font', $default_options['rara_readable_site_title_font'] );
    $site_title_fonts     = rara_readable_get_fonts( $site_title_font );
    $site_title_font_size = get_theme_mod( 'rara_readable_site_title_font_size', $default_options['rara_readable_site_title_font_size'] );
    $custom_css = '
        .site-branding h1.site-title {
            font-size: '. esc_attr( $site_title_font_size ).'px;
            font-family: '. esc_attr( $site_title_fonts['font'] ) .';
            font-weight: 400;
        }';

    wp_add_inline_style( 'rara-readable-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'rara_readable_scripts' );

if( ! function_exists( 'rara_readable_admin_scripts' ) ) :
/**
 * Enqueue admin scripts and styles.
*/
function rara_readable_admin_scripts(){
    wp_enqueue_style( 'rara-readable-admin', get_template_directory_uri() . '/inc/css/admin.css', '', RARA_READABLE_THEME_VERSION );
}
endif; 
add_action( 'admin_enqueue_scripts', 'rara_readable_admin_scripts' );


if ( ! function_exists( 'rara_readable_excerpt_length' ) ) :
    /**
     * Changes the default 55 character in excerpt 
     */
    function rara_readable_excerpt_length( $length ) {
        /** Load default theme options */
        $default_options =  rara_readable_default_theme_options();

        $excerpt_length  = get_theme_mod( 'rara_readable_excerpt_length', $default_options['rara_readable_excerpt_length'] );
        return is_admin() ? $length : absint( $excerpt_length );    
    }
endif;
add_filter( 'excerpt_length', 'rara_readable_excerpt_length', 999 );

if ( ! function_exists( 'rara_readable_excerpt_more' ) ) :
    /**
     * Replaces "[...]" (appended to automatically generated excerpts) with ... * 
     */
    function rara_readable_excerpt_more( $more ) {
        return is_admin() ? $more : ' &hellip; ';
    }

endif;
add_filter( 'excerpt_more', 'rara_readable_excerpt_more' );

if ( ! function_exists('rara_readable_body_classes') ) :
    /**
     * Adds custom classes to the array of body classes.
     *
     * @param array $classes Classes for the body element.
     * @return array
     */
    function rara_readable_body_classes( $classes ) {
        // Adds a class of hfeed to non-singular pages.
        if ( ! is_singular() ) {
            $classes[] = 'hfeed';
        }

        if ( ( is_single() && 'post' == get_post_type() ) || is_page() ){
            $classes[] = 'single-template2';
        }

        if ( is_archive() || is_home() ){
            $classes[] = 'default-layout';
        }

        return $classes;
    }
endif;
add_filter( 'body_class', 'rara_readable_body_classes' );

if ( ! function_exists( 'rara_readable_pingback_header' ) ) :
    /**
     * Add a pingback url auto-discovery header for singularly identifiable articles.
     */
    function rara_readable_pingback_header() {
        if ( is_singular() && pings_open() ) {
            echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
        }
    }
endif;
add_action( 'wp_head', 'rara_readable_pingback_header' );

if( ! function_exists( 'rara_readable_get_the_archive_title' ) ) :
/**
 * Filter Archive Title
 */
function rara_readable_get_the_archive_title( $title ){
    /** Load default theme options */
    $default_options =  rara_readable_default_theme_options();

    $hide_prefix = get_theme_mod( 'rara_readable_ed_prefix_archive', $default_options['rara_readable_ed_prefix_archive'] );

    if( $hide_prefix ){
        if( is_category() ){
            $title = single_cat_title( '', false );
        }elseif ( is_tag() ){
            $title = single_tag_title( '', false );
        }elseif( is_author() ){
            $title = '<span class="vcard">' . get_the_author() . '</span>';
        }elseif ( is_year() ) {
            $title = get_the_date( __( 'Y', 'rara-readable' ) );
        }elseif ( is_month() ) {
            $title = get_the_date( __( 'F Y', 'rara-readable' ) );
        }elseif ( is_day() ) {
            $title = get_the_date( __( 'F j, Y', 'rara-readable' ) );
        }elseif ( is_post_type_archive() ) {
            $title = post_type_archive_title( '', false );
        }elseif ( is_tax() ) {
            $tax = get_taxonomy( get_queried_object()->taxonomy );
            $title = single_term_title( '', false );
        }
    }    
    return $title;
}
endif;
add_filter( 'get_the_archive_title', 'rara_readable_get_the_archive_title' );

if( ! function_exists( 'rara_readable_change_comment_form_default_fields' ) ) :
/**
 * Change Comment form default fields i.e. author, email & url.
 * https://blog.josemcastaneda.com/2016/08/08/copy-paste-hurting-theme/
*/
function rara_readable_change_comment_form_default_fields( $fields ){    
    // get the current commenter if available
    $commenter = wp_get_current_commenter();
 
    // core functionality
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $required = ( $req ? " required" : '' );
    $author   = ( $req ? __( 'Name*', 'rara-readable' ) : __( 'Name', 'rara-readable' ) );
    $email    = ( $req ? __( 'Email*', 'rara-readable' ) : __( 'Email', 'rara-readable' ) );
 
    // Change just the author field
    $fields['author'] = '<p class="comment-form-author"><label class="screen-reader-text" for="author">' . esc_html__( 'Name', 'rara-readable' ) . '<span class="required">*</span></label><input id="author" name="author" placeholder="' . esc_attr( $author ) . '" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $required . ' /></p>';
    
    $fields['email'] = '<p class="comment-form-email"><label class="screen-reader-text" for="email">' . esc_html__( 'Email', 'rara-readable' ) . '<span class="required">*</span></label><input id="email" name="email" placeholder="' . esc_attr( $email ) . '" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . $required. ' /></p>';
    
    $fields['url'] = '<p class="comment-form-url"><label class="screen-reader-text" for="url">' . esc_html__( 'Website', 'rara-readable' ) . '</label><input id="url" name="url" placeholder="' . esc_attr__( 'Website', 'rara-readable' ) . '" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>'; 
    
    return $fields;    
}
endif;
add_filter( 'comment_form_default_fields', 'rara_readable_change_comment_form_default_fields' );

if( ! function_exists( 'rara_readable_change_comment_form_defaults' ) ) :
/**
 * Change Comment Form defaults
 * https://blog.josemcastaneda.com/2016/08/08/copy-paste-hurting-theme/
*/
function rara_readable_change_comment_form_defaults( $defaults ){    
    $defaults['comment_field'] = '<p class="comment-form-comment"><label class="screen-reader-text" for="comment">' . esc_html__( 'Comment', 'rara-readable' ) . '</label><textarea id="comment" name="comment" placeholder="' . esc_attr__( 'Comment', 'rara-readable' ) . '" cols="45" rows="8" aria-required="true" required></textarea></p>';
    
    return $defaults;    
}
endif;
add_filter( 'comment_form_defaults', 'rara_readable_change_comment_form_defaults' );

if( ! function_exists( 'rara_readable_change_comment_form_default' ) ) :
    /**
     * Change Comment form default keys.
     * https://blog.josemcastaneda.com/2016/08/08/copy-paste-hurting-theme/
     */
    function rara_readable_change_comment_form_default( $defaults ){
        $defaults['title_reply']   = __( 'Leave a Reply:', 'rara-readable' );
        $defaults['label_submit']  = __( 'POST NOW', 'rara-readable' );
     
        return $defaults;
    }
endif;
add_filter( 'comment_form_defaults', 'rara_readable_change_comment_form_default' );

if( ! function_exists( 'rara_readable_get_comment_author_link' ) ) :
    /**
     * Filter to modify comment author link
     * @link https://developer.wordpress.org/reference/functions/get_comment_author_link/
     */
    function rara_readable_get_comment_author_link( $return, $author, $comment_ID ){
        $comment = get_comment( $comment_ID );
        $url     = get_comment_author_url( $comment );
        $author  = get_comment_author( $comment );
     
        if ( empty( $url ) || 'http://' == $url )
            $return = '<span itemprop="name">'. esc_html( $author ) .'</span>';
        else
            $return = '<span itemprop="name"><a href="'. esc_url( $url ) .'" rel="external nofollow" class="url" itemprop="url">'. esc_html( $author ) .'</a></span>';

        return $return;
    }
endif;
add_filter( 'get_comment_author_link', 'rara_readable_get_comment_author_link', 10, 3 );


if( ! function_exists( 'rara_readable_single_post_schema' ) ) :
    /**
     * Single Post Schema
     *
     * @return string
     */
    function rara_readable_single_post_schema() {
        if ( is_singular( 'post' ) ) {
            global $post;
            $custom_logo_id = get_theme_mod( 'custom_logo' );

            $site_logo = wp_get_attachment_image_src( $custom_logo_id , 'rara-readable-schema' );

            $images      = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
            $excerpt     = rara_readable_escape_text_tags( $post->post_excerpt );
            $content     = $excerpt === "" ? mb_substr( rara_readable_escape_text_tags( $post->post_content ), 0, 110 ) : $excerpt;
            $schema_type = ! empty( $custom_logo_id ) && has_post_thumbnail( $post->ID ) ? "BlogPosting" : "Blog";

            $args = array(
                "@context"  => "http://schema.org",
                "@type"     => $schema_type,
                "mainEntityOfPage" => array(
                    "@type" => "WebPage",
                    "@id"   => esc_url( get_permalink( $post->ID ) )
                ),
                "headline"  => esc_html( get_the_title( $post->ID ) ),
                "datePublished" => esc_html( get_the_time( DATE_ISO8601, $post->ID ) ),
                "dateModified"  => esc_html( get_post_modified_time(  DATE_ISO8601, __return_false(), $post->ID ) ),
                "author"        => array(
                    "@type"     => "Person",
                    "name"      => rara_readable_escape_text_tags( get_the_author_meta( 'display_name', $post->post_author ) )
                ),
                "description" => ( class_exists('WPSEO_Meta') ? WPSEO_Meta::get_value( 'metadesc' ) : $content )
            );

            if ( has_post_thumbnail( $post->ID ) ) :
                $args['image'] = array(
                    "@type"  => "ImageObject",
                    "url"    => $images[0],
                    "width"  => $images[1],
                    "height" => $images[2]
                );
            endif;

            if ( ! empty( $custom_logo_id ) ) :
                $args['publisher'] = array(
                    "@type"       => "Organization",
                    "name"        => esc_html( get_bloginfo( 'name' ) ),
                    "description" => wp_kses_post( get_bloginfo( 'description' ) ),
                    "logo"        => array(
                        "@type"   => "ImageObject",
                        "url"     => $site_logo[0],
                        "width"   => $site_logo[1],
                        "height"  => $site_logo[2]
                    )
                );
            endif;

            echo '<script type="application/ld+json">', PHP_EOL;

            if ( version_compare( PHP_VERSION, '5.4.0' , '>=' ) ) {
                echo wp_json_encode( $args, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) , PHP_EOL;
            } else {
                echo wp_json_encode( $args ) , PHP_EOL;
            }

            echo '</script>', PHP_EOL;
        }
    }
endif;
add_action( 'wp_head', 'rara_readable_single_post_schema' );

if( ! function_exists( 'rara_readable_admin_notice' ) ) :
/**
 * Addmin notice for getting started page
*/
function rara_readable_admin_notice(){
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'rara_readable_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();
    
    if( 'themes.php' == $pagenow && !$meta ){
        
        if( $current_screen->id !== 'dashboard' && $current_screen->id !== 'themes' ){
            return;
        }

        if( is_network_admin() ){
            return;
        }

        if( ! current_user_can( 'manage_options' ) ){
            return;
        } ?>

        <div class="welcome-message notice notice-info">
            <div class="notice-wrapper">
                <div class="notice-text">
                    <h3><?php esc_html_e( 'Congratulations!', 'rara-readable' ); ?></h3>
                    <p><?php printf( __( '%1$s is now installed and ready to use. Click below to see theme documentation, plugins to install and other details to get started.', 'rara-readable' ), esc_html( $name ) ) ; ?></p>
                    <p><a href="<?php echo esc_url( admin_url( 'themes.php?page=rara-readable-getting-started' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Go to the getting started.', 'rara-readable' ); ?></a></p>
                    <p class="dismiss-link"><strong><a href="?rara_readable_admin_notice=1"><?php esc_html_e( 'Dismiss', 'rara-readable' ); ?></a></strong></p>
                </div>
            </div>
        </div>
    <?php }
}
endif;
add_action( 'admin_notices', 'rara_readable_admin_notice' );

if( ! function_exists( 'rara_readable_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function rara_readable_update_admin_notice(){
    if ( isset( $_GET['rara_readable_admin_notice'] ) && $_GET['rara_readable_admin_notice'] = '1' ) {
        update_option( 'rara_readable_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'rara_readable_update_admin_notice' );