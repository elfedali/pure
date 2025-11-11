<?php
/**
 * Template part for displaying the site branding
 */
?>

<div class="site-branding">
    <?php if ( has_custom_logo() ) : ?>
        <div class="site-logo">
            <?php the_custom_logo(); ?>
        </div>
    <?php endif; ?>
    
    <?php if ( get_theme_mod( 'pure_show_site_title', true ) ) : ?>
        <h1 class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        </h1>
    <?php endif; ?>
    
    <?php 
    if ( get_theme_mod( 'pure_show_site_description', true ) ) :
        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) : 
        ?>
            <p class="site-description"><?php echo $description; ?></p>
        <?php endif;
    endif; ?>
</div>
