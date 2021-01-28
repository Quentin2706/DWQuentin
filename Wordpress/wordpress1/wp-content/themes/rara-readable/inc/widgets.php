<?php
/**
 * Rara Readable Pro widgets.
 *
 * @package Rara_Readable
 */
 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rara_readable_widgets_init() {
	register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'rara-readable' ),
        'id'            => 'primary-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'rara-readable' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Sidebar', 'rara-readable' ),
        'id'            => 'footer-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'rara-readable' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'rara_readable_widgets_init' );