<?php
/**
 * Pure Theme Functions
 * 
 * @package Pure
 * @since 1.0.0
 */

// Define theme version
define( 'PURE_VERSION', '1.0.0' );

// Define theme directory path
define( 'PURE_DIR', get_template_directory() );

// Define theme directory URI
define( 'PURE_URI', get_template_directory_uri() );

/**
 * Include required files
 */
require_once PURE_DIR . '/inc/theme-setup.php';        // Theme setup
require_once PURE_DIR . '/inc/enqueue.php';            // Enqueue scripts and styles
require_once PURE_DIR . '/inc/widgets.php';            // Widget areas
require_once PURE_DIR . '/inc/template-tags.php';      // Template tags
require_once PURE_DIR . '/inc/template-functions.php'; // Template functions
require_once PURE_DIR . '/inc/customizer.php';         // Customizer options
