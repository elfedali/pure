<?php
/**
 * Security enhancements based on customizer settings
 * 
 * @package Pure
 */

/**
 * Remove WordPress version from meta tags
 */
function pure_remove_wp_version() {
    if ( get_theme_mod( 'pure_remove_wp_version', false ) ) {
        remove_action( 'wp_head', 'wp_generator' );
        
        // Remove from RSS feeds
        add_filter( 'the_generator', '__return_empty_string' );
    }
}
add_action( 'init', 'pure_remove_wp_version' );

/**
 * Minify HTML output
 */
function pure_minify_html_output( $buffer ) {
    if ( ! get_theme_mod( 'pure_minify_html', false ) ) {
        return $buffer;
    }
    
    // Don't minify in admin or if user is logged in
    if ( is_admin() || is_user_logged_in() ) {
        return $buffer;
    }
    
    // Remove HTML comments (except IE conditionals)
    $buffer = preg_replace( '/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $buffer );
    
    // Remove whitespace
    $buffer = preg_replace( '/\s+/', ' ', $buffer );
    $buffer = preg_replace( '/>\s+</', '><', $buffer );
    
    return $buffer;
}

function pure_start_html_minification() {
    if ( get_theme_mod( 'pure_minify_html', false ) && ! is_admin() ) {
        ob_start( 'pure_minify_html_output' );
    }
}
add_action( 'template_redirect', 'pure_start_html_minification', -1 );
