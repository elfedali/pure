<?php
/**
 * Template part for displaying entry footer
 */
?>

<?php if ( get_the_tags() ) : ?>
    <div class="tags-links">
        <?php the_tags( '<strong>' . __( 'Tags:', 'pure' ) . '</strong> ', ', ' ); ?>
    </div>
<?php endif; ?>
