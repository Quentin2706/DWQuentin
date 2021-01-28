<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rara_Readable
 */

	/**
     * Doctype Hook
     * 
     * @hooked rara_readable_get_doctype
     */
    do_action( 'rara_readable_doctype' ); ?>

<head itemscope itemtype="http://schema.org/WebSite">
	<?php
	/**
     * Before wp_head
     * 
     * @hooked rara_readable_get_head
     */
    do_action( 'rara_readable_before_wp_head' );

	wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<?php
    wp_body_open();
    
    /**
     * Before Header
     * 
     * @hooked rara_readable_get_page_start
     */
    do_action( 'rara_readable_before_header' ); 

    /**
     * Header
     * 
     * @hooked rara_readable_get_header     
     */
    do_action( 'rara_readable_header' );
    
	/**
     * Content
     * 
     * @hooked rara_readable_get_content_start
     */
    do_action( 'rara_readable_content_start' );