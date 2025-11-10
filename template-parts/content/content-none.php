<?php
/**
 * Template part for displaying a message when no content is found
 */
?>

<article class="no-results">
    <header class="entry-header">
        <h2 class="entry-title"><?php _e( 'Nothing Found', 'pure' ); ?></h2>
    </header>

    <div class="entry-content">
        <?php
        if ( is_home() && current_user_can( 'publish_posts' ) ) :
            printf(
                '<p>' . __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pure' ) . '</p>',
                esc_url( admin_url( 'post-new.php' ) )
            );
        elseif ( is_search() ) :
            ?>
            <p><?php _e( 'Sorry, no results were found. Try a different search?', 'pure' ); ?></p>
            <?php get_search_form(); ?>
            <?php
        else :
            ?>
            <p><?php _e( 'Sorry, no content matched your criteria.', 'pure' ); ?></p>
            <?php
        endif;
        ?>
    </div>
</article>
