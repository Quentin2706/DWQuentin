<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

							get_template_part( 'template-parts/content', 'page' );

							/**
						     * @hooked rara_readable_get_comments - 10
						     */
						    do_action( 'rara_readable_after_page_template' );?>
					</main>
				</div> <!-- #primary -->
			</div>
		<?php endwhile; ?>
	</div>
<?php
get_footer();
