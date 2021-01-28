<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rara_Readable
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-content">
		<div class="entry-content" itemprop="text">
			<?php
				/**
			     * 
			     * @hooked rara_readable_get_entry_content - 10
			     */
			    do_action( 'rara_readable_entry_content' ); 
			?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
