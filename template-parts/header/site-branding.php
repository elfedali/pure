<?php
/**
 * Template part for displaying the site branding
 */
?>

<div class="site-branding">
    <?php if ( has_custom_logo() ) : ?>
        <div class="site-logo m-xs">
            <?php the_custom_logo(); ?>
        </div>
    <?php else : ?>
        <h1 class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        </h1>
        <?php 
        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) : 
        ?>
            <p class="site-description"><?php echo $description; ?></p>
        <?php endif; ?>
    <?php endif; ?>
</div>
