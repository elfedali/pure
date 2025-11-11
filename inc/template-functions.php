<?php
/**
 * Custom template filters and functions
 */

// Note: pure_excerpt_length() and pure_excerpt_more() are now in template-tags.php
// They have been integrated with customizer settings

/**
 * Add custom body classes
 */
function pure_body_classes( $classes ) {
    // Add class if sidebar is active
    if ( is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'has-sidebar';
    }
    
    // Add class if custom logo is set
    if ( has_custom_logo() ) {
        $classes[] = 'has-custom-logo';
    }
    
    return $classes;
}
add_filter( 'body_class', 'pure_body_classes' );

/**
 * Add custom classes to navigation menu
 */
function pure_nav_menu_css_class( $classes, $item, $args ) {
    if ( 'primary' === $args->theme_location ) {
        $classes[] = 'pure-menu-item';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'pure_nav_menu_css_class', 10, 3 );

/**
 * Add custom classes to navigation links
 */
function pure_nav_menu_link_attributes( $atts, $item, $args ) {
    if ( 'primary' === $args->theme_location ) {
        $atts['class'] = 'pure-menu-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'pure_nav_menu_link_attributes', 10, 3 );
