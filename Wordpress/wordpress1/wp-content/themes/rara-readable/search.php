<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Rara_Readable
 */

get_header(); 

global $wp_query;
$found_posts = $wp_query->found_posts;
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search results for: %s', 'rara-readable' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			</header><!-- .page-header -->
			<div class="entry-content">
				<p>
				<?php /* translators: 1: found post, 2: search query  */
					printf( esc_html__( 'We found %1$s articles for your search %2$s. You can search again if you are unsatisfied.', 'rara-readable' ), number_format_i18n( $found_posts ), get_search_query() ); ?>
				</p>
			</div>

			<?php
			// Display search form
			get_search_form();

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			/**
		     * @hooked rara_readable_get_navigation	- 10
		     */
		    do_action( 'rara_readable_navigation' );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
