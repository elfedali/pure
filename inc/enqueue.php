<?php
/**
 * Enqueue scripts and styles
 */

function pure_enqueue_assets() {
    // Enqueue theme stylesheet
    wp_enqueue_style( 'pure-style', get_stylesheet_uri(), array(), '1.0' );
    
    // Enqueue comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'pure_enqueue_assets' );
