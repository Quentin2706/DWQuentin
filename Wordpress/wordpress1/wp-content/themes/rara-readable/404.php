<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Rara_Readable
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Page Not Found', 'rara-readable' ); ?></h1>
				</header><!-- .page-header -->
				<figure class="error-404-img">
					<img src="<?php echo esc_url( get_template_directory_uri(). '/images/404-img.jpg' ); ?>" alt="<?php esc_attr_e( 'error image', 'rara-readable' ); ?>">
				</figure>

				<div class="page-content">
					<h3><?php esc_html_e( 'The page your are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'rara-readable' ); ?></h3>
					<p><?php esc_html_e( 'Please try using our search box below.', 'rara-readable' ); ?></p>

					<?php get_search_form(); ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="bttn"><?php esc_html_e( 'back to homepage', 'rara-readable' ); ?></a>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
