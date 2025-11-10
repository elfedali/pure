<?php
/**
 * Enqueue scripts and styles
 */

function pure_enqueue_assets() {
    // Enqueue compiled theme CSS (minified version)
    wp_enqueue_style( 
        'pure-theme', 
        PURE_URI . '/assets/css/theme.min.css', 
        array(), 
        PURE_VERSION 
    );
    
    // Enqueue comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'pure_enqueue_assets' );

/**
 * Add integrity and crossorigin attributes to stylesheet
 */
function pure_add_style_attributes( $html, $handle ) {
    // Check if CSS integrity is enabled in customizer
    $enable_integrity = get_theme_mod( 'pure_enable_css_integrity', true );
    
    if ( ! $enable_integrity ) {
        return $html;
    }
    
    if ( 'pure-theme' === $handle ) {
        // Get the file path
        $file_path = PURE_DIR . '/assets/css/theme.min.css';
        
        if ( file_exists( $file_path ) ) {
            // Generate SRI hash
            $file_content = file_get_contents( $file_path );
            $hash = base64_encode( hash( 'sha384', $file_content, true ) );
            
            // Add integrity and crossorigin attributes
            $html = str_replace( 
                ' />', 
                ' integrity="sha384-' . $hash . '" crossorigin="anonymous" />', 
                $html 
            );
        }
    }
    
    return $html;
}
add_filter( 'style_loader_tag', 'pure_add_style_attributes', 10, 2 );
