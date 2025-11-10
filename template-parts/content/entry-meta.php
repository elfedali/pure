<?php
/**
 * Template part for displaying entry meta
 */
?>

<span class="posted-on">
    <time datetime="<?php echo get_the_date( 'c' ); ?>">
        <?php echo get_the_date(); ?>
    </time>
</span>

<span class="byline">
    <?php _e( 'by', 'pure' ); ?> 
    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
        <?php the_author(); ?>
    </a>
</span>

<?php if ( has_category() ) : ?>
    <span class="cat-links">
        <?php _e( 'in', 'pure' ); ?> <?php the_category( ', ' ); ?>
    </span>
<?php endif; ?>
