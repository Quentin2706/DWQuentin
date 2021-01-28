<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rara_Readable
 */

	/**
     * Content end
     * 
     * @hooked rara_readable_get_content_end
     */
    do_action( 'rara_readable_content_end' );

    /**
     * @hooked rara_readable_get_footer_start - 10
     * @hooked rara_readable_get_top_footer - 20
	 * @hooked rara_readable_get_bottom_footer - 30
     * @hooked rara_readable_get_footer_end - 40
     */
    do_action( 'rara_readable_footer' );

	/**
	 * @hooked rara_readable_get_page_end - 10
     */
    do_action( 'rara_readable_after_footer' );

	wp_footer(); ?>

</body>
</html>