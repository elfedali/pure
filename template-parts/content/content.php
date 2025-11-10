<?php
/**
 * Template part for displaying post content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
        endif;
        ?>
        
        <div class="entry-meta">
            <?php get_template_part( 'template-parts/content/entry', 'meta' ); ?>
        </div>
    </header>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <?php if ( is_singular() ) : ?>
                <?php the_post_thumbnail( 'large' ); ?>
            <?php else : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'medium' ); ?>
                </a>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php
        if ( is_singular() ) :
            the_content();
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'pure' ),
                'after'  => '</div>',
            ) );
        else :
            the_excerpt();
            ?>
            <p>
                <a href="<?php the_permalink(); ?>" class="pure-button pure-button-primary">
                    <?php _e( 'Read More', 'pure' ); ?>
                </a>
            </p>
            <?php
        endif;
        ?>
    </div>

    <?php if ( is_singular() ) : ?>
        <footer class="entry-footer">
            <?php get_template_part( 'template-parts/content/entry', 'footer' ); ?>
        </footer>
    <?php endif; ?>
</article>
