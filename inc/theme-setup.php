<?php
/**
 * Theme Setup Functions
 */

if ( ! function_exists( 'pure_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function pure_theme_setup() {
        // Make theme available for translation
        load_theme_textdomain( 'pure', get_template_directory() . '/languages' );
        
        // Add title tag support
        add_theme_support( 'title-tag' );
        
        // Add post thumbnails support
        add_theme_support( 'post-thumbnails' );
        
        // Set post thumbnail size
        set_post_thumbnail_size( 800, 600, true );
        
        // Add additional image sizes
        add_image_size( 'pure-featured', 1200, 600, true );
        
        // Add automatic feed links
        add_theme_support( 'automatic-feed-links' );
        
        // Add HTML5 support
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        ) );
        
        // Add post formats support
        add_theme_support( 'post-formats', array(
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'video',
            'audio',
        ) );
        
        // Add responsive embeds
        add_theme_support( 'responsive-embeds' );
        
        // Add editor styles
        add_theme_support( 'editor-styles' );
        
        // Add wide alignment
        add_theme_support( 'align-wide' );
        
        // Add custom logo support
        add_theme_support( 'custom-logo', array(
            'height'      => 300,
            'width'       => 300,
            'flex-height' => true,
            'flex-width'  => true,
        ) );
        
        // Register navigation menus
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'pure' ),
            'footer'  => __( 'Footer Menu', 'pure' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'pure_theme_setup' );

/**
 * Enable debug mode settings
 */
function pure_debug_mode_init() {
    if ( get_theme_mod( 'pure_debug_mode', false ) ) {
        // Enable error reporting
        if ( ! defined( 'WP_DEBUG' ) || ! WP_DEBUG ) {
            @ini_set( 'display_errors', 1 );
            @error_reporting( E_ALL );
        }
        
        // Add debug info to admin bar
        add_action( 'admin_bar_menu', 'pure_add_debug_admin_bar', 999 );
    }
}
add_action( 'init', 'pure_debug_mode_init' );

/**
 * Add debug info to admin bar
 */
function pure_add_debug_admin_bar( $wp_admin_bar ) {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    
    $dev_mode = get_theme_mod( 'pure_dev_mode', false );
    $debug_mode = get_theme_mod( 'pure_debug_mode', false );
    
    $title = '🔧 ';
    $modes = array();
    
    if ( $dev_mode ) {
        $modes[] = 'DEV';
    }
    if ( $debug_mode ) {
        $modes[] = 'DEBUG';
    }
    
    if ( ! empty( $modes ) ) {
        $title .= implode( ' + ', $modes );
        
        $wp_admin_bar->add_node( array(
            'id'    => 'pure-dev-mode',
            'title' => $title,
            'href'  => admin_url( 'customize.php?autofocus[section]=pure_dev_mode_section' ),
            'meta'  => array(
                'class' => 'pure-dev-mode-indicator',
                'title' => __( 'Development Mode Active - Click to configure', 'pure' ),
            ),
        ) );
        
        // Add child nodes with details
        $wp_admin_bar->add_node( array(
            'parent' => 'pure-dev-mode',
            'id'     => 'pure-css-mode',
            'title'  => 'CSS: ' . ( $dev_mode ? 'theme.css (unminified)' : 'theme.min.css' ),
        ) );
        
        $wp_admin_bar->add_node( array(
            'parent' => 'pure-dev-mode',
            'id'     => 'pure-memory',
            'title'  => 'Memory: ' . size_format( memory_get_usage() ) . ' / ' . size_format( memory_get_peak_usage() ) . ' peak',
        ) );
        
        global $wpdb;
        $wp_admin_bar->add_node( array(
            'parent' => 'pure-dev-mode',
            'id'     => 'pure-queries',
            'title'  => 'DB Queries: ' . $wpdb->num_queries,
        ) );
    }
}

/**
 * Add inline styles for dev mode indicator in admin bar
 */
function pure_dev_mode_admin_bar_styles() {
    if ( ! is_admin_bar_showing() ) {
        return;
    }
    
    $dev_mode = get_theme_mod( 'pure_dev_mode', false );
    $debug_mode = get_theme_mod( 'pure_debug_mode', false );
    
    if ( $dev_mode || $debug_mode ) {
        ?>
        <style>
            #wp-admin-bar-pure-dev-mode > .ab-item {
                background-color: #ff6b6b !important;
                color: #fff !important;
                font-weight: bold !important;
            }
            #wp-admin-bar-pure-dev-mode:hover > .ab-item {
                background-color: #ff5252 !important;
            }
        </style>
        <?php
    }
}
add_action( 'wp_head', 'pure_dev_mode_admin_bar_styles' );
add_action( 'admin_head', 'pure_dev_mode_admin_bar_styles' );
