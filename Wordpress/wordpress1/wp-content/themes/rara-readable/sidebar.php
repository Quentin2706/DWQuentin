<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rara_Readable
 */

$sidebar = rara_readable_sidebar();

if ( ! is_active_sidebar( $sidebar ) ) {
	return;
} ?>

<div id="secondary" class="sidebar" itemscope itemtype="http://schema.org/WPSideBar">
	<?php dynamic_sidebar( $sidebar ); ?>
</div><!-- .sidebar -->
