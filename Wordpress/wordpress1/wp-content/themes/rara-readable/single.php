<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rara_Readable
 */

get_header(); ?>
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); 

			/**
		     * @hooked rara_readable_get_single_top_block
		     */
		    do_action( 'rara_readable_single_top_block' );

			?>
			<div class="blog-wrapper">   
				<div id="primary" class="site-content">
					<main id="main" class="site-main">
						<?php
							get_template_part( 'template-parts/content', 'single' );

							/**
						     * @hooked rara_readable_get_navigation	- 10
						     */
						    do_action( 'rara_readable_navigation' );
							
							/**
						     * @hooked rara_readable_get_author_bio		- 10
						     * @hooked rara_readable_get_related_post 	- 20
						     * @hooked rara_readable_get_comments 		- 30
						     */
						    do_action( 'rara_readable_after_post_template' );
						?>
					</main>
				</div> <!-- #primary -->
			</div>
		<?php endwhile; ?>
	</div>
<?php
get_footer();
