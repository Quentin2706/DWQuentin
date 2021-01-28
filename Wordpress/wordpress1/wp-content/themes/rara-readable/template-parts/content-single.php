<?php
/**
 * Template part for single posts
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
		<footer class="entry-footer">
			<?php
				/**
			     * @hooked rara_readable_post_tags - 30
			     */
			    do_action( 'rara_readable_entry_footer' );
			?>
		</footer>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->