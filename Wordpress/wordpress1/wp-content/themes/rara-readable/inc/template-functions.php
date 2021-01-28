<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Rara_Readable
 */

if( ! function_exists( 'rara_readable_get_doctype' ) ) :
	/**
	 * Doctype Declaration
	 */
	function rara_readable_get_doctype(){
	    ?>
	    <!doctype html>
		<html <?php language_attributes(); ?>>
	    <?php
	}
	endif;
add_action( 'rara_readable_doctype', 'rara_readable_get_doctype' );

if( ! function_exists( 'rara_readable_get_head' ) ) :
	/**
	 * Before wp_head 
	 */
	function rara_readable_get_head(){
	    ?>
	    <meta charset="<?php bloginfo( 'charset' ); ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="profile" href="http://gmpg.org/xfn/11">
	    <?php
	}
endif;
add_action( 'rara_readable_before_wp_head', 'rara_readable_get_head' );

if( ! function_exists( 'rara_readable_get_header' ) ) :
	/**
	 * Header Start
	 */
	function rara_readable_get_header(){ 
		$sidebar = rara_readable_sidebar(); ?>
		<header id="masthead" class="site-header header-1" itemscope itemtype="http://schema.org/WPHeader">
		    <div class="mobile-responsive">
		        <div class="menu-anchor">
		            <span class="toggle-button"><span class="bar"></span><?php _e( 'Menu', 'rara-readable' )?></span>
		        </div>
		        <div class="mobile-menu-wrap">
		        <?php 
		            rara_readable_get_primary_menu_navigation();
		            rara_readable_get_header_search_form(); 
		            rara_readable_get_social_links();
		            rara_readable_get_wc_cart();
		        ?>
		        </div><!-- .mobile-menu-wrap -->
		    </div><!-- .mobile-responsive -->
		    <div class="header-t">
		        <div class="blog-wrapper">
		            <?php rara_readable_get_primary_menu_navigation(); ?>
		            <div class="header-icon-wrap">
		                <?php 
		                    rara_readable_get_social_links(); 
		                    rara_readable_get_header_search_form(); 
		                    rara_readable_get_wc_cart();
		                ?>
		            </div>
		        </div>
		    </div><!-- .header-t -->
		    <div class="main-header">
		        <div class="blog-wrapper">
		            <?php
		                rara_readable_get_site_branding(); 

		                if ( is_active_sidebar( $sidebar ) ) { ?>
		                    <button class="sidebar-toggleButton">
		                        <span></span>
		                        <span></span>
		                        <span></span>
		                    </button>
		                    <div class="sidebar-wrap">
		                        <?php get_sidebar(); ?>
		                        <button class="toggle-button" type="button">
		                            <span class="toggle-bar"></span>
		                            <span class="toggle-bar"></span>
		                            <span class="toggle-bar"></span>
		                        </button>
		                    </div>
		                <?php } 
		            ?>
		        </div>
		    </div><!-- .main-header -->
		</header>
	<?php
	}
endif;
add_action( 'rara_readable_header', 'rara_readable_get_header', 20 );

if( ! function_exists( 'rara_readable_get_page_start' ) ) :
	/**
	 * Page Start
	 */
	function rara_readable_get_page_start(){
	    ?>
	    <div id="page" class="site">
	    	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content (Press Enter)', 'rara-readable' ); ?></a>
	    <?php
	}
	endif;
add_action( 'rara_readable_before_header', 'rara_readable_get_page_start' );


if( ! function_exists( 'rara_readable_get_content_start' ) ) :
	/**
	 * Content Start
	 */
	function rara_readable_get_content_start() { 

		if ( ! ( ( is_single() && 'post' == get_post_type() ) || is_page() ) ) {
			echo '<div id="content" class="site-content">
					<div class="blog-wrapper">
						<header class="page-header">';
						/**
					     * 
					     * @hooked rara_readable_get_breadcrumb
					     */
					    do_action( 'rara_readable_breadcrumb' );
			echo 	'</header><!-- .page-header -->';
		} else {
			echo '<div class="blog-wrapper">';

			/**
		     * 
		     * @hooked rara_readable_get_breadcrumb
		     */
		    do_action( 'rara_readable_breadcrumb' );

		    echo '</div><!-- .blog-wrapper -->';
		}
	}
endif;
add_action( 'rara_readable_content_start', 'rara_readable_get_content_start' );

if( ! function_exists( 'rara_readable_get_content_end' ) ) :
	/**
	 * Content Start
	 */
	function rara_readable_get_content_end(){ 
		if ( ! ( ( is_single() && 'post' == get_post_type() ) || is_page() ) ) {
			echo '</div><!-- .blog-wrapper -->
			</div><!-- #content -->';
		}
	}
endif;
add_action( 'rara_readable_content_end', 'rara_readable_get_content_end' );

if( ! function_exists( 'rara_readable_get_footer_start' ) ) :
	/**
	 * Footer Start
	 */
	function rara_readable_get_footer_start(){
	    ?>
	    <footer id="colophon" class="site-footer" itemscope itemtype="http://schema.org/WPFooter">
	    <?php
	}
endif;
add_action( 'rara_readable_footer', 'rara_readable_get_footer_start', 10 );

if( ! function_exists( 'rara_readable_get_footer_end' ) ) :
	/**
	 * Footer end
	 */
	function rara_readable_get_footer_end(){
	    ?>
	    </footer><!-- #colophon -->
	    <?php
	}
endif;
add_action( 'rara_readable_footer', 'rara_readable_get_footer_end', 40 );

if ( ! function_exists( 'rara_readable_post_thumbnail_image' ) ) :
	/**
	 * Post Featured Image
	 */
	function rara_readable_post_thumbnail_image( ){
		global $wp_query;

		if ( is_home() || is_archive() ) {
			$thumbnail_size	= 'rara-readable-fullwidth';
			$fallback_image = get_template_directory_uri().'/images/fallback/rara-readable-fullwidth.jpg';
		}  elseif ( is_search() ) {
			$thumbnail_size	= 'rara-readable-list';
			$fallback_image = get_template_directory_uri().'/images/fallback/rara-readable-list.jpg';
		} 

	    if ( has_post_thumbnail() ) { ?>
	    	<figure class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $thumbnail_size, array( 'itemprop' => 'image' ) ); ?></a>
			</figure>
	    <?php
	    } elseif( $fallback_image ) { ?>
			<figure class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( $fallback_image ); ?>" alt="<?php the_title_attribute(); ?>" itemprop="image"></a>
			</figure>
	    <?php

	    }
	}
endif;
add_action( 'rara_readable_post_thumbnail', 'rara_readable_post_thumbnail_image', 10 );

if ( ! function_exists( 'rara_readable_get_single_top_block' ) ) :
	/**
	 * Single page/post top block content
	 */
	function rara_readable_get_single_top_block() { 
		$default_options         = rara_readable_default_theme_options(); // Default theme options
		$custom_header_fallback  = get_theme_mod( 'rara_readable_ed_custom_header_fallback', $default_options['rara_readable_ed_custom_header_fallback'] );
		$custom_header_image     = get_header_image_tag(); // get custom header image tag
		?>
		<div class="top-block">
			<?php 
				if ( has_post_thumbnail() ){
					the_post_thumbnail( 'rara-readable-single-post' );
				} elseif ( ! empty( $custom_header_image ) && $custom_header_fallback ) {
					the_custom_header_markup();
				} else {
					echo '<img src="'. esc_url( get_template_directory_uri() . '/images/fallback/rara-readable-single-post.jpg' ) .'" alt="'. esc_attr( get_the_title() ) .'">';
				}
			?>
			<div class="text-wrap">
				<div class="blog-wrapper">
					<div class="text">
						<header class="entry-header">
							<?php 
								the_title( '<h1 class="entry-title">', '</h1>' ); 
								/**
							     * 
							     * @hooked rara_readable_post_entry_meta
							     */
							    do_action( 'rara_readable_entry_meta' );
							?>
						</header>
					</div>
				</div><!-- .blog-wrapper -->
			</div>
		</div>
	<?php
	}
endif;
add_action( 'rara_readable_single_top_block', 'rara_readable_get_single_top_block' );

if ( ! function_exists( 'rara_readable_get_single_post_page_thumbnail' ) ) :
	/**
	 * Singe Post Page Thumbnail Image
	 */
	function rara_readable_get_single_post_page_thumbnail(){
		$default_options     = rara_readable_default_theme_options();
		$show_featured_image = get_theme_mod( 'rara_readable_ed_featured_image', $default_options['rara_readable_ed_featured_image'] ); 

	    if ( has_post_thumbnail() && $show_featured_image ) { ?>
	    	<figure class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); ?></a>
			</figure>
	    <?php }
	}
endif;
add_action( 'rara_readable_single_post_page_thumbnail', 'rara_readable_get_single_post_page_thumbnail', 10 );

if( ! function_exists( 'rara_readable_read_more_link' ) ) :
	/**
	 * Read more option
	 */
	function rara_readable_read_more_link(){
		$default_options = rara_readable_default_theme_options();
		$read_more_text  = get_theme_mod( 'rara_readable_read_more_text', $default_options['rara_readable_read_more_text'] ); 

		if( ! is_single() && $read_more_text ){ ?>
			<a href="<?php the_permalink(); ?>" class="bttn"><?php echo esc_html( $read_more_text ); ?></a>
		<?php }
	}
endif;
add_action( 'rara_readable_entry_footer', 'rara_readable_read_more_link', 10 );

if( ! function_exists( 'rara_readable_post_tags' ) ) :
	/**
	 * Post Tags
	*/
	function rara_readable_post_tags(){

		if ( is_single() && 'post' == get_post_type() ) :
			/* translators: used between list items, there is a space after the comma */
			$tags_lists =  get_the_tags();

			if ( $tags_lists ) {
				echo '<div class="tag-group"><h4>'. __( 'Tags', 'rara-readable' ) .'</h4>';
				foreach ( $tags_lists as $tag ) {
					echo '<a href="'. esc_url( get_tag_link( $tag->term_id ) ) .'" class="tags">'. esc_html( $tag->name ) .'</a>';
				}
				echo '</div><!-- .tag-group -->';
			}
		endif;
	}
endif;
add_action( 'rara_readable_entry_footer', 'rara_readable_post_tags', 20 );

if ( ! function_exists( 'rara_readable_get_navigation' ) ) :
    /**
     *  Post navigation and archive pagination
     */
    function rara_readable_get_navigation(){
        if ( is_single() ) {
            the_post_navigation();
        } else {
            the_posts_pagination( array(
                'prev_next'          => false,
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'rara-readable' ) . ' </span>',
            ) );
        }
    }
endif;
add_action( 'rara_readable_navigation', 'rara_readable_get_navigation', 10 );

if( ! function_exists( 'rara_readable_get_author_bio' ) ) :
/**
 * Author Bio 
 */
	function rara_readable_get_author_bio(){
		/** Load default theme options */
		$default_options    = rara_readable_default_theme_options();
		$author_description = get_the_author_meta( 'description' );

	    if( $author_description ){ ?>
	        <div class="article-author">
				<figure class="author-img">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
				</figure>
				<div class="author-info">
					<h4><?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?></h4>
					<?php echo wpautop( wp_kses_post( get_the_author_meta( 'description' ) ) ); ?>
				</div>
			</div> <!-- .article-author -->
	    <?php
	    }
	}
endif;
add_action( 'rara_readable_after_post_template', 'rara_readable_get_author_bio', 10 );

if( ! function_exists( 'rara_readable_get_related_post' ) ) :
	/**
	 * Post Tags
	*/
	function rara_readable_get_related_post(){
		global $post;

		/** Load default theme options */
		$default_options =  rara_readable_default_theme_options();
		$related_post_title = get_theme_mod( 'rara_readable_related_post_section_title', $default_options['rara_readable_related_post_section_title'] );

		$arg = array(
		    'post_type'             => 'post',
		    'post_status'           => 'publish',
		    'posts_per_page'        => 3,
		    'ignore_sticky_posts'   => true,
		    'post__not_in'          => array( $post->ID ),
		    'orderby'               => 'rand'
		);

	    $cats = get_the_category( $post->ID );
	    if ( $cats ) {
	        $c = array();
	        foreach ( $cats as $cat ) {
	            $c[] = $cat->term_id; 
	        }
	        $arg['category__in'] = $c;
	        
	        $qry = new WP_Query( $arg );
	        
	        if ( $qry->have_posts() ) { ?>
		        <div class="related-posts">
		        	<?php 
		        		if ( $related_post_title ) {
		        			echo '<h4 class="related-title">'. esc_html( $related_post_title ) .'</h4>';
		        		}
		        	?>
		            <div class="related-post-group clearfix">
		        	<?php 
		            while ( $qry->have_posts() ) { $qry->the_post(); ?>

		                <div class="related-post-block" itemscope itemtype="https://schema.org/Blog">

							<figure class="post-thumbnail">
			                	<?php if ( has_post_thumbnail() ) { ?>
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'rara-readable-related', array( 'itemprop' => 'image' ) ); ?></a>
								<?php } else { ?>
									<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fallback/rara-readable-related.jpg" alt="<?php the_title_attribute(); ?>" itemprop="image" /></a>
								<?php } ?>
							</figure>

							<h5 class="related-post-title" itemprop="headline"><a href="<?php the_permalink(); ?>" itemprop="url" ><?php the_title(); ?></a></h5>

						</div>

		                <?php
		            } ?>
		        	</div>
	        	</div><!-- .related-posts -->
		    	<?php
	            wp_reset_postdata();
	        }               
	    }
	}
endif;
add_action( 'rara_readable_after_post_template', 'rara_readable_get_related_post', 20 );

if ( ! function_exists( 'rara_readable_get_site_branding' ) ) :
	/**
	 * Function to add header search form
	 */
	function rara_readable_get_site_branding() { ?>
		<div class="site-branding"  itemscope itemtype="http://schema.org/Organization">
			<?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
				<div class="site-logo">
					<?php the_custom_logo() ?>
				</div>
			<?php endif; ?>
			
			<?php 
				$site_title = get_bloginfo( 'name', 'display' );
				$description = get_bloginfo( 'description', 'display' );

				if( is_front_page() ){ ?>
                    <h1 class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
                <?php 
                } else { ?>
                    <p class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></p>
                <?php } 
	            if ( $description || is_customize_preview() ) : ?>
	                <p class="site-description" itemprop="description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
	            <?php
	            endif;
	        ?>

		</div>
	<?php
	}
endif;
add_action( 'rara_readable_main_header', 'rara_readable_get_site_branding', 10 ); 

if ( ! function_exists( 'rara_readable_get_breadcrumb' ) ) :
/**
 * Custom Bread Crumb
 *
 * @link http://www.qualitytuts.com/wordpress-custom-breadcrumbs-without-plugin/
 */
 function rara_readable_get_breadcrumb() {    
    global $post;
    $default_options   = rara_readable_default_theme_options(); // Get default theme options
	$post_page         = get_option( 'page_for_posts' ); //The ID of the page that displays posts.
	$show_front        = get_option( 'show_on_front' ); //What to show on the front page
	$delimiter         = get_theme_mod( 'rara_readable_breadcrumb_separator', $default_options['rara_readable_breadcrumb_separator'] ); // delimiter between crumbs
	$home              = get_theme_mod( 'rara_readable_breadcrumb_home_text', $default_options['rara_readable_breadcrumb_home_text'] ); // text for the 'Home' link
	$before            = '<span class="current" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">'; // tag before the current crumb
	$after             = '</span>'; // tag after the current crumb
	$enable_breadcrumb = get_theme_mod( 'rara_readable_ed_breadcrumb', $default_options['rara_readable_ed_breadcrumb'] );

    $depth = 1;    
    if( $enable_breadcrumb && ! is_front_page() ){
	    echo '<div class="breadcrumb"><div id="crumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . esc_url( home_url() ) . '" class="home_crumb"><span itemprop="name">' . esc_html( $home ) . '</span></a><meta itemprop="position" content="'. absint( $depth ).'" /><span class="separator">' . $delimiter . '</span></span>';
	        if( is_home() && ! is_front_page() ){            
	            $depth = 2;
	            echo $before . '<span itemprop="name">' . esc_html( single_post_title( '', false ) ) .'</span><meta itemprop="position" content="'. absint( $depth ).'" />'. $after;          
	        }elseif( is_category() ){            
	            $depth = 2;
	            $thisCat = get_category( get_query_var( 'cat' ), false );
	            if( $show_front === 'page' && $post_page ){ //If static blog post page is set
	                $p = get_post( $post_page );
	                echo '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . esc_url( get_permalink( $post_page ) ) . '"><span itemprop="name">' . esc_html( $p->post_title ) . '</span></a><meta itemprop="position" content="'. absint( $depth ).'" /><span class="separator">' . $delimiter . '</span></span>';
	                $depth ++;  
	            }

	            if ( $thisCat->parent != 0 ) {
	                $parent_categories = get_category_parents( $thisCat->parent, false, ',' );
	                $parent_categories = explode( ',', $parent_categories );

	                foreach ( $parent_categories as $parent_term ) {
	                    $parent_obj = get_term_by( 'name', $parent_term, 'category' );
	                    if( is_object( $parent_obj ) ){
	                        $term_url    = get_term_link( $parent_obj->term_id );
	                        $term_name   = $parent_obj->name;
	                        echo '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . esc_url( $term_url ) . '"><span itemprop="name">' . esc_html( $term_name ) . '</span></a><meta itemprop="position" content="'. absint( $depth ).'" /><span class="separator">' . $delimiter . '</span></span>';
	                        $depth ++;
	                    }
	                }
	            }

	            echo $before . '<span itemprop="name">' .  esc_html( single_cat_title( '', false ) ) . '</span><meta itemprop="position" content="'. absint( $depth ).'" />' . $after;

	        }elseif( is_tag() ){            
	            $queried_object = get_queried_object();
	            $depth = 2;

	            echo $before . '<span itemprop="name">' . esc_html( single_tag_title( '', false ) ) .'</span><meta itemprop="position" content="'. absint( $depth ).'" />'. $after;    
	        }elseif( is_author() ){            
	            $depth = 2;
	            global $author;
	            $userdata = get_userdata( $author );
	            echo $before . '<span itemprop="name">' . esc_html( $userdata->display_name ) .'</span><meta itemprop="position" content="'. absint( $depth ).'" />'. $after;  
	        }elseif( is_day() ){            
	            $depth = 2;
	            echo '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . esc_url( get_year_link( get_the_time( __( 'Y', 'rara-readable' ) ) ) ) . '"><span itemprop="name">' . esc_html( get_the_time( __( 'Y', 'rara-readable' ) ) ) . '</span></a><meta itemprop="position" content="'. absint( $depth ).'" /><span class="separator">' . $delimiter . '</span></span>';
	            $depth ++;
	            echo '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . esc_url( get_month_link( get_the_time( __( 'Y', 'rara-readable' ) ), get_the_time( __( 'm', 'rara-readable' ) ) ) ) . '"><span itemprop="name">' . esc_html( get_the_time( __( 'F', 'rara-readable' ) ) ) . '</span></a><meta itemprop="position" content="'. absint( $depth ).'" /><span class="separator">' . $delimiter . '</span></span>';
	            $depth ++;
	            echo $before .'<span itemprop="name">'. esc_html( get_the_time( __( 'd', 'rara-readable' ) ) ) .'</span><meta itemprop="position" content="'. absint( $depth ).'" />'. $after;
	             
	        }elseif( is_month() ){            
	            $depth = 2;
	            echo '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . esc_url( get_year_link( get_the_time( __( 'Y', 'rara-readable' ) ) ) ) . '"><span itemprop="name">' . esc_html( get_the_time( __( 'Y', 'rara-readable' ) ) ) . '</span></a><meta itemprop="position" content="'. absint( $depth ).'" /><span class="separator">' . $delimiter . '</span></span>';
	            $depth++;
	            echo $before .'<span itemprop="name">'. esc_html( get_the_time( __( 'F', 'rara-readable' ) ) ) .'</span><meta itemprop="position" content="'. absint( $depth ).'" />'. $after;      
	        }elseif( is_year() ){            
	            $depth = 2;
	            echo $before .'<span itemprop="name">'. esc_html( get_the_time( __( 'Y', 'rara-readable' ) ) ) .'</span><meta itemprop="position" content="'. absint( $depth ).'" />'. $after; 
	        }elseif( is_single() && !is_attachment() ) {
	            //For Woocommerce single product            
	            if( rara_readable_is_woocommerce_activated() && 'product' === get_post_type() ){ 
	                if ( wc_get_page_id( 'shop' ) ) { 
	                    //Displaying Shop link in woocommerce archive page
	                    $_name = wc_get_page_id( 'shop' ) ? get_the_title( wc_get_page_id( 'shop' ) ) : '';
	                    if ( ! $_name ) {
	                        $product_post_type = get_post_type_object( 'product' );
	                        $_name = $product_post_type->labels->singular_name;
	                    }
	                    echo ' <a href="' . esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ) . '" itemprop="item"><span itemprop="name">' . esc_html( $_name) . '</span></a> ' . '<span class="separator">' . $delimiter . '</span>';
	                }
	            
	                if ( $terms = wc_get_product_terms( $post->ID, 'product_cat', array( 'orderby' => 'parent', 'order' => 'DESC' ) ) ) {
	                    $main_term = apply_filters( 'woocommerce_breadcrumb_main_term', $terms[0], $terms );
	                    $ancestors = get_ancestors( $main_term->term_id, 'product_cat' );
	                    $ancestors = array_reverse( $ancestors );

	                    foreach ( $ancestors as $ancestor ) {
	                        $ancestor = get_term( $ancestor, 'product_cat' );    
	                        if ( ! is_wp_error( $ancestor ) && $ancestor ) {
	                            echo '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="' . esc_url( get_term_link( $ancestor ) ) . '" itemprop="item"><span itemprop="name">' . esc_html( $ancestor->name ) . '</span></a><meta itemprop="position" content="'. absint( $depth ).'" /><span class="separator">' . $delimiter . '</span></span>';
	                            $depth++;
	                        }
	                    }
	                    echo '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="' . esc_url( get_term_link( $main_term ) ) . '" itemprop="item"><span itemprop="name">' . esc_html( $main_term->name ) . '</span></a><meta itemprop="position" content="'. absint( $depth ).'" /><span class="separator">' . $delimiter . '</span></span>';
	                }
	            
	                echo $before .'<span itemprop="name">'. esc_html( get_the_title() ) .'</span><meta itemprop="position" content="'. absint( $depth ).'" />'. $after;
	                               
	            }else{ 
	                //For Post                
	                $cat_object       = get_the_category();
	                $potential_parent = 0;
	                $depth            = 2;
	                
	                if( $show_front === 'page' && $post_page ){ //If static blog post page is set
	                    $p = get_post( $post_page );
	                    echo '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="' . esc_url( get_permalink( $post_page ) ) . '" itemprop="item"><span itemprop="name">' . esc_html( $p->post_title ) . '</span></a><meta itemprop="position" content="'. absint( $depth ).'" /><span class="separator">' . $delimiter . '</span></span>';  
	                    $depth++;
	                }
	                
	                if( is_array( $cat_object ) ){ //Getting category hierarchy if any
	        
	                    //Now try to find the deepest term of those that we know of
	                    $use_term = key( $cat_object );
	                    foreach( $cat_object as $key => $object ){
	                        //Can't use the next($cat_object) trick since order is unknown
	                        if( $object->parent > 0  && ( $potential_parent === 0 || $object->parent === $potential_parent ) ){
	                            $use_term = $key;
	                            $potential_parent = $object->term_id;
	                        }
	                    }
	                    
	                    $cat = $cat_object[$use_term];
	              
	                    $cats = get_category_parents( $cat, false, ',' );
	                    $cats = explode( ',', $cats );

	                    foreach ( $cats as $cat ) {
	                        $cat_obj = get_term_by( 'name', $cat, 'category' );
	                        if( is_object( $cat_obj ) ){
	                            $term_url    = get_term_link( $cat_obj->term_id );
	                            $term_name   = $cat_obj->name;
	                            echo '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . esc_url( $term_url ) . '"><span itemprop="name">' . esc_html( $term_name ) . '</span></a><meta itemprop="position" content="'. absint( $depth ).'" /><span class="separator">' . $delimiter . '</span></span>';
	                            $depth ++;
	                        }
	                    }
	                }
	    
	                echo $before .'<span itemprop="name">'. esc_html( get_the_title() ) .'</span><meta itemprop="position" content="'. absint( $depth ).'" />'. $after;
	                             
	            }        
	        }elseif( is_page() ){            
	            $depth = 2;
	            if( $post->post_parent ){            
	                global $post;
	                $depth = 2;
	                $parent_id  = $post->post_parent;
	                $breadcrumbs = array();
	                
	                while( $parent_id ){
	                    $current_page  = get_post( $parent_id );
	                    $breadcrumbs[] = $current_page->ID;
	                    $parent_id     = $current_page->post_parent;
	                }
	                $breadcrumbs = array_reverse( $breadcrumbs );
	                for ( $i = 0; $i < count( $breadcrumbs); $i++ ){
	                    echo '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="' . esc_url( get_permalink( $breadcrumbs[$i] ) ) . '" itemprop="item"><span itemprop="name">' . esc_html( get_the_title( $breadcrumbs[$i] ) ) . '</span></a><meta itemprop="position" content="'. absint( $depth ).'" /></span>';
	                    if ( $i != count( $breadcrumbs ) - 1 ) echo ' <span class="separator">' . esc_html( $delimiter ) . '</span> ';
	                    $depth++;
	                }

	                echo ' <span class="separator">' . esc_html( $delimiter ) . '</span> ' . $before .'<span itemprop="name">'. esc_html( get_the_title() ) .'</span><meta itemprop="position" content="'. absint( $depth ).'" /></span>'. $after;      
	            }else{
	                echo $before .'<span itemprop="name">'. esc_html( get_the_title() ) .'</span><meta itemprop="position" content="'. absint( $depth ).'" />'. $after; 
	            }
	        }elseif( is_search() ){            
	            $depth = 2;
	            echo $before .'<span itemprop="name">'. esc_html__( 'Search Results for "', 'rara-readable' ) . esc_html( get_search_query() ) . esc_html__( '"', 'rara-readable' ) .'</span><meta itemprop="position" content="'. absint( $depth ).'" />'. $after;      
	        }elseif( rara_readable_is_woocommerce_activated() && ( is_product_category() || is_product_tag() ) ){ 
	            //For Woocommerce archive page        
	            $depth = 2;
	            if ( wc_get_page_id( 'shop' ) ) { 
	                //Displaying Shop link in woocommerce archive page
	                $_name = wc_get_page_id( 'shop' ) ? get_the_title( wc_get_page_id( 'shop' ) ) : '';
	                if ( ! $_name ) {
	                    $product_post_type = get_post_type_object( 'product' );
	                    $_name = $product_post_type->labels->singular_name;
	                }
	                echo ' <a href="' . esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ) . '" itemprop="item"><span itemprop="name">' . esc_html( $_name) . '</span></a> ' . '<span class="separator">' . $delimiter . '</span>';
	            }
	            $current_term = $GLOBALS['wp_query']->get_queried_object();
	            if( is_product_category() ){
	                $ancestors = get_ancestors( $current_term->term_id, 'product_cat' );
	                $ancestors = array_reverse( $ancestors );
	                foreach ( $ancestors as $ancestor ) {
	                    $ancestor = get_term( $ancestor, 'product_cat' );    
	                    if ( ! is_wp_error( $ancestor ) && $ancestor ) {
	                        echo '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="' . esc_url( get_term_link( $ancestor ) ) . '" itemprop="item"><span itemprop="name">' . esc_html( $ancestor->name ) . '</span></a><meta itemprop="position" content="'. absint( $depth ).'" /><span class="separator">' . $delimiter . '</span></span>';
	                        $depth ++;
	                    }
	                }
	            }           
	            echo $before . '<span itemprop="name">' . esc_html( $current_term->name ) .'</span><meta itemprop="position" content="'. absint( $depth ).'" />' . $after;           
	        }elseif( rara_readable_is_woocommerce_activated() && is_shop() ){ //Shop Archive page
	            $depth = 2;
	            if ( get_option( 'page_on_front' ) == wc_get_page_id( 'shop' ) ) {
	                return;
	            }
	            $_name = wc_get_page_id( 'shop' ) ? get_the_title( wc_get_page_id( 'shop' ) ) : '';
	            $shop_url = wc_get_page_id( 'shop' ) && wc_get_page_id( 'shop' ) > 0  ? get_the_permalink( wc_get_page_id( 'shop' ) ) : home_url( '/shop' );
	    
	            if ( ! $_name ) {
	                $product_post_type = get_post_type_object( 'product' );
	                $_name = $product_post_type->labels->singular_name;
	            }
	            echo $before . '<span itemprop="name">' . esc_html( $_name ) .'</span><meta itemprop="position" content="'. absint( $depth ).'" />'. $after;                    
	        }elseif( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {            
	            $depth = 2;
	            $post_type = get_post_type_object(get_post_type());
	            if( get_query_var('paged') ){
	                echo '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="' . esc_url( get_post_type_archive_link( $post_type->name ) ) . '" itemprop="item"><span itemprop="name">' . esc_html( $post_type->label ) . '</span></a><meta itemprop="position" content="'. absint( $depth ).'" />';
	                echo ' <span class="separator">' . $delimiter . '</span></span> ' . $before . sprintf( __('Page %s', 'rara-readable'), get_query_var('paged') ) . $after;
	            }elseif( is_archive() ){
	                echo $before .'<a itemprop="item" href="' . esc_url( get_post_type_archive_link( $post_type->name ) ) . '"><span itemprop="name">'. esc_html( $post_type->label ) .'</span></a><meta itemprop="position" content="'. absint( $depth ).'" />'. $after;
	            }else{
	                echo $before .'<a itemprop="item" href="' . esc_url( get_post_type_archive_link( $post_type->name ) ) . '"><span itemprop="name">'. esc_html( $post_type->label ) .'</span></a><meta itemprop="position" content="'. absint( $depth ).'" />'. $after;
	            }              
	        }elseif( is_attachment() ){            
	            $depth  = 2;
	            $parent = get_post( $post->post_parent );
	            $cat    = get_the_category( $parent->ID );
	            if( $cat ){
	                $cat = $cat[0];
	                echo get_category_parents( $cat, TRUE, ' <span class="separator">' . $delimiter . '</span> ');
	                echo '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="' . esc_url( get_permalink( $parent ) ) . '" itemprop="item"><span itemprop="name">' . esc_html( $parent->post_title ) . '<span></a><meta itemprop="position" content="'. absint( $depth ).'" />' . ' <span class="separator">' . $delimiter . '</span></span>';
	            }
	            echo $before .'<a itemprop="item" href="' . esc_url( get_the_permalink() ) . '"><span itemprop="name">'. esc_html( get_the_title() ) .'</span></a><meta itemprop="position" content="'. absint( $depth ).'" />'. $after;   
	        }elseif ( is_404() ){
	            echo $before . esc_html__( '404 Error - Page not Found', 'rara-readable' ) . $after;
	        }
	        if( get_query_var('paged') ) echo __( ' (Page', 'rara-readable' ) . ' ' . get_query_var('paged') . __( ')', 'rara-readable' );        
	        echo '</div></div>';
	}
} 
endif;
add_action( 'rara_readable_breadcrumb', 'rara_readable_get_breadcrumb' );

if ( ! function_exists( 'rara_readable_get_top_footer' ) ) :
	/**
	 * Function to add to add top footer
	 */
	function rara_readable_get_top_footer() {
		if ( is_active_sidebar( 'footer-sidebar' ) ) : 
				$number_of_widgets = rara_readable_sidebar_params( 'footer-sidebar' );

				if( $number_of_widgets ){
					$class = 'column-'. $number_of_widgets;
				} else {
					$class = 'column';
				}
			?>
			<div class="top-footer <?php echo esc_attr( $class ); ?>">
				<div class="blog-wrapper">
					<?php dynamic_sidebar( 'footer-sidebar' ); ?>
				</div>
			</div>
		<?php endif;
	}
endif;
add_action( 'rara_readable_footer', 'rara_readable_get_top_footer', 10 ); 

if( ! function_exists( 'rara_readable_get_bottom_footer' ) ) :
	/**
	 * Function to add bottom footer
	 */
	function rara_readable_get_bottom_footer(){
		/** Load default theme options */
    	$default_options =  rara_readable_default_theme_options();

		$footer_copyright = get_theme_mod( 'rara_readable_footer_copyright', $default_options['rara_readable_footer_copyright'] );
 
		$site_info = '';
		?>
		<div class="bottom-footer">
			<div class="blog-wrapper">
				<div class="footer-copyright">
					<?php
						if( $footer_copyright ) {
							echo '<span class="copyright">';
							echo wp_kses_post( $footer_copyright );
							echo '</span>';
						}
					?>
					<?php echo esc_html__( 'Rara Readable | Developed By', 'rara-readable' ); ?>
					<a href="<?php echo esc_url( 'https://rarathemes.com/' ); ?>" rel="nofollow" target="_blank"><?php esc_html_e( 'Rara Theme', 'rara-readable' ) ?></a>
					<?php esc_html_e( ' Powered by ', 'rara-readable' ); ?>
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>" target="_blank"><?php esc_html_e( 'WordPress.', 'rara-readable' ); ?></a>

					<?php 
						if ( function_exists( 'the_privacy_policy_link' ) ) {
				            the_privacy_policy_link( '<span class="policy_link">', '</span>');
				        }
					?>
				</div>
			</div>
			<div class="overlay"></div>
		</div>
		<?php
	}
endif;
add_action( 'rara_readable_footer', 'rara_readable_get_bottom_footer', 30 );

if( ! function_exists( 'rara_readable_get_page_end' ) ) :
	/**
	 * Scroll to Top Options
	 */  
	function rara_readable_get_page_end(){
		?>
		</div><!-- #page -->
		<?php
	}
endif;
add_action( 'rara_readable_after_footer', 'rara_readable_get_page_end', 10 );

if( ! function_exists( 'rara_readable_get_entry_content' ) ) :
	/**
	 * Entry content
	 */  
	function rara_readable_get_entry_content(){
		/** Load default theme options */
		$default_options =  rara_readable_default_theme_options();
		$show_excerpt    = get_theme_mod( 'rara_readable_ed_blog_excerpt', $default_options['rara_readable_ed_blog_excerpt'] );
		
		if( is_archive() || is_search() || is_home() ) {
			if ( $show_excerpt  ) {
            	the_excerpt();
			} else {
				the_content( sprintf(
    				/* translators: %s: Name of current post. */
    				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'rara-readable' ), array( 'span' => array( 'class' => array() ) ) ),
    				the_title( '<span class="screen-reader-text">"', '"</span>', false )
    			) );
			}
        } else {
        	the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'rara-readable' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
        }
        
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rara-readable' ),
			'after'  => '</div>',
		) );
	}
endif;
add_action( 'rara_readable_entry_content', 'rara_readable_get_entry_content', 10 );