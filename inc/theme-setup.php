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
            'height'      => 100,
            'width'       => 400,
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
