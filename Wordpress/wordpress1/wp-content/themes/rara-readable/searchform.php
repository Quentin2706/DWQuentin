<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'rara-readable' ) ?></span>
    <input type="search" class="search-field"
        placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'rara-readable' ) ?>"
        value="<?php echo get_search_query() ?>" name="s"
        title="<?php echo esc_attr_x( 'Search for:', 'label', 'rara-readable' ) ?>" />
    <label for="submit-field">
    	<span class="fa fa-search"></span>
    	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'label', 'rara-readable' ) ?>" />
    </label>
</form>