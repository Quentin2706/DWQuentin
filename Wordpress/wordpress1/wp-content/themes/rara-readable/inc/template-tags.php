<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Rara_Readable
 */

if ( ! function_exists( 'rara_readable_post_entry_meta' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time, category and author.
	 */
	function rara_readable_post_entry_meta() {
		/** Load default theme options */
		$default_options = rara_readable_default_theme_options();
		$hide_category   = get_theme_mod( 'rara_readable_ed_category_meta', $default_options['rara_readable_ed_category_meta'] );
		$hide_date       = get_theme_mod( 'rara_readable_ed_post_date_meta', $default_options['rara_readable_ed_post_date_meta'] );
		$hide_author     = get_theme_mod( 'rara_readable_ed_post_author_meta', $default_options['rara_readable_ed_post_author_meta'] );
        
        if ( ( ! $hide_category || ! $hide_date || ! $hide_author ) && 'post' === get_post_type() ) {
		    echo '<div class="entry-meta">';
		    
		        if( ! $hide_category ) rara_readable_category_list();
		        if( ! $hide_date ) rara_readable_posted_on();
		        if( ! $hide_author ) rara_readable_posted_by();
		    
		    echo '</div>'; // WPCS: XSS OK.
		}
	}
endif;
add_action( 'rara_readable_entry_meta', 'rara_readable_post_entry_meta', 10 );

if( ! function_exists( 'rara_readable_category_list' ) ) :
	/**
	 * Post category list
	 */
	function rara_readable_category_list(){
		$post_categories = get_the_category();
		$category_list   = '';

		$i = 1;
        foreach ( $post_categories as $post_category) {
            $category_list .= '<a href="'. esc_url( get_category_link( $post_category->cat_ID ) ) .'">'. esc_html( $post_category->cat_name ) .'</a>';
            if( $i == 3 ) break;
            $i++;
        }

        if( $category_list ){
			$category_string = '<i class="fa fa-th-large"></i><span>'. __( 'Categories:', 'rara-readable' ).'</span>';
			$category_string .=  $category_list;
        } else {
        	$category_string = '';
        }

        echo '<span class="category" itemprop="about">'. $category_string .'</span>';
	}
endif;

if ( ! function_exists( 'rara_readable_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function rara_readable_posted_on() {
		/** Load default theme options */
        $default_options   = rara_readable_default_theme_options();
        $show_updated_date = get_theme_mod( 'rara_readable_ed_last_update_date', $default_options['rara_readable_ed_last_update_date'] ); 

        // date link
		$archive_year  = get_the_time('Y'); 
		$archive_month = get_the_time('m'); 
		$archive_day   = get_the_time('d'); 
		$date_link     = get_day_link( $archive_year, $archive_month, $archive_day );

        if ( $show_updated_date && ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) ) {
			$updated_text = __( 'Updated  on: ', 'rara-readable' );
			$time_string  = '<time class="entry-date published updated" datetime="%3$s" itemprop="dateModified">%4$s</time><time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time>';
        } else {
        	$updated_text = '';
        	$time_string  = '<time class="entry-date published updated" datetime="%1$s" itemprop="datePublished">%2$s</time><time class="updated" datetime="%3$s" itemprop="dateModified">%4$s</time>';
        }

        $time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);


		$posted_on = '<i class="fa fa-calendar"></i>'. esc_html( $updated_text ) .'<a href="' . esc_url( $date_link ) . '" rel="bookmark">' . $time_string . '</a>';

		echo '<span class="posted-on">' . $posted_on . '</span>';
	}
endif;

if( ! function_exists( 'rara_readable_posted_by' ) ) :
	/**
	 * Post posted by
	 */
	function rara_readable_posted_by(){        
		$byline = '<span class="author vcard">'. wp_kses_post( get_avatar( get_the_author_meta( 'ID' ), 30 ) ) .'<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '"><span itemprop="name">' . esc_html( get_the_author() ) . '</span></a></span>';

		echo '<span class="byline" itemprop="author" itemscope itemtype="https://schema.org/Person"> ' . $byline . '</span>';
	}
endif;

if ( ! function_exists( 'rara_readable_get_comments' ) ) :
	/**
	 * Displays comments for single page and post.
	 */
	function rara_readable_get_comments() {
		/** Load default theme options */
		$default_options = rara_readable_default_theme_options();
		$show_comments   = get_theme_mod( 'rara_readable_ed_comments', $default_options['rara_readable_ed_comments'] );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( ( comments_open() || get_comments_number() ) && $show_comments ) :
			comments_template();
		endif;
	}
endif;
add_action( 'rara_readable_after_post_template', 'rara_readable_get_comments', 30 );
add_action( 'rara_readable_after_page_template', 'rara_readable_get_comments', 10 );
