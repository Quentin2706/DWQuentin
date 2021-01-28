<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rara_Readable
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="https://schema.org/Blog">

	<?php 
		/**
	     * 
	     * @hooked rara_readable_post_thumbnail_image
	     */
	    do_action( 'rara_readable_post_thumbnail' );
	?>
	<div class="article-content">
		<header class="entry-header">
			<h2 class="entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php 
				/**
			     * 
			     * @hooked rara_readable_post_entry_meta - 10
			     */
			    do_action( 'rara_readable_entry_meta' );
			?>
		</header>
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
			     * @hooked rara_readable_read_more_link - 10
			     * @hooked rara_readable_post_tags      - 20
			     */
			    do_action( 'rara_readable_entry_footer' );
			?>
		</footer>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
