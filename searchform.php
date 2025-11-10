<?php
/**
 * Search Form Template
 */
?>
<form role="search" method="get" class="search-form pure-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="s" class="screen-reader-text"><?php _e( 'Search for:', 'pure' ); ?></label>
    <input type="search" id="s" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'pure' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="search-submit pure-button pure-button-primary">
        <?php echo esc_attr_x( 'Search', 'submit button', 'pure' ); ?>
    </button>
</form>
