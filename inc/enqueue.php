<?php
/**
 * Enqueue scripts and styles
 */

function pure_enqueue_assets() {
    // Collect fonts to load
    $fonts_to_load = array();
    
    $body_font = get_theme_mod( 'pure_font_family', 'system' );
    if ( $body_font !== 'system' ) {
        $fonts_to_load[] = $body_font;
    }
    
    $heading_font = get_theme_mod( 'pure_heading_font_family', 'inherit' );
    if ( $heading_font !== 'inherit' && $heading_font !== 'system' && $heading_font !== $body_font ) {
        $fonts_to_load[] = $heading_font;
    }
    
    // Enqueue Google Fonts if needed
    if ( ! empty( $fonts_to_load ) ) {
        $google_fonts_url = pure_get_google_fonts_url( $fonts_to_load );
        if ( $google_fonts_url ) {
            wp_enqueue_style( 
                'pure-google-fonts', 
                $google_fonts_url, 
                array(), 
                null 
            );
        }
    }
    
    // Enqueue compiled theme CSS (minified version)
    wp_enqueue_style( 
        'pure-theme', 
        PURE_URI . '/assets/css/theme.min.css', 
        array(), 
        PURE_VERSION 
    );
    
    // Enqueue Alpine.js initialization FIRST (must load before Alpine)
    wp_enqueue_script(
        'alpine-init',
        PURE_URI . '/assets/js/alpine-init.js',
        array(),
        PURE_VERSION,
        false // Load in header, no defer
    );
    
    // Enqueue Alpine.js AFTER init
    wp_enqueue_script(
        'alpinejs',
        PURE_URI . '/assets/js/alpine.min.js',
        array( 'alpine-init' ),
        PURE_VERSION,
        false // Load in header with defer
    );
    
    // Add defer attribute only to Alpine.js
    add_filter( 'script_loader_tag', function( $tag, $handle ) {
        if ( 'alpinejs' === $handle ) {
            $tag = str_replace( ' src', ' defer src', $tag );
        }
        return $tag;
    }, 10, 2 );
    
    // Enqueue Lucide Icons
    wp_enqueue_script(
        'lucide-icons',
        'https://unpkg.com/lucide@latest',
        array(),
        null,
        true
    );
    
    // Initialize Lucide Icons
    wp_add_inline_script(
        'lucide-icons',
        'document.addEventListener("DOMContentLoaded", function() { if (typeof lucide !== "undefined") { lucide.createIcons(); } });'
    );
    
    // Enqueue comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'pure_enqueue_assets' );

/**
 * Get Google Fonts URL based on selected fonts
 */
function pure_get_google_fonts_url( $fonts_to_load = array() ) {
    if ( empty( $fonts_to_load ) ) {
        return '';
    }
    
    $fonts = array(
        'roboto'       => 'Roboto:wght@300;400;500;600;700;800;900',
        'open-sans'    => 'Open+Sans:wght@300;400;500;600;700;800',
        'lato'         => 'Lato:wght@300;400;700;900',
        'montserrat'   => 'Montserrat:wght@300;400;500;600;700;800;900',
        'poppins'      => 'Poppins:wght@300;400;500;600;700;800;900',
        'raleway'      => 'Raleway:wght@300;400;500;600;700;800;900',
        'inter'        => 'Inter:wght@300;400;500;600;700;800;900',
        'nunito'       => 'Nunito:wght@300;400;500;600;700;800;900',
        'playfair'     => 'Playfair+Display:wght@400;500;600;700;800;900',
        'merriweather' => 'Merriweather:wght@300;400;700;900',
        'source-sans'  => 'Source+Sans+Pro:wght@300;400;600;700;900',
        'work-sans'    => 'Work+Sans:wght@300;400;500;600;700;800;900',
        'pt-sans'      => 'PT+Sans:wght@400;700',
        'karla'        => 'Karla:wght@300;400;500;600;700;800',
        'bebas-neue'   => 'Bebas+Neue:wght@400',
        'oswald'       => 'Oswald:wght@300;400;500;600;700',
        'abril'        => 'Abril+Fatface:wght@400',
    );
    
    $font_families = array();
    foreach ( $fonts_to_load as $font ) {
        if ( isset( $fonts[ $font ] ) ) {
            $font_families[] = $fonts[ $font ];
        }
    }
    
    if ( empty( $font_families ) ) {
        return '';
    }
    
    return 'https://fonts.googleapis.com/css2?family=' . implode( '&family=', $font_families ) . '&display=swap';
}

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
