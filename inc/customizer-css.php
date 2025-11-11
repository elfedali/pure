<?php
/**
 * Generate custom CSS from Customizer settings
 * 
 * @package Pure
 */

/**
 * Output custom CSS based on customizer settings
 */
function pure_customizer_css() {
    $css = '';
    
    // Primary Color
    $primary_color = get_theme_mod( 'pure_primary_color', '#0078e7' );
    if ( $primary_color !== '#0078e7' ) {
        $css .= ':root { --primary-color: ' . esc_attr( $primary_color ) . '; }' . "\n";
        // Calculate darker and lighter versions
        $css .= ':root { --primary-color-dark: ' . pure_adjust_color_brightness( $primary_color, -20 ) . '; }' . "\n";
        $css .= ':root { --primary-color-light: ' . pure_adjust_color_brightness( $primary_color, 40 ) . '; }' . "\n";
    }
    
    // Secondary Color
    $secondary_color = get_theme_mod( 'pure_secondary_color', '#666' );
    if ( $secondary_color !== '#666' ) {
        $css .= ':root { --secondary-color: ' . esc_attr( $secondary_color ) . '; }' . "\n";
    }
    
    // Link Color
    $link_color = get_theme_mod( 'pure_link_color', '#0078e7' );
    if ( $link_color !== '#0078e7' ) {
        $css .= 'a { color: ' . esc_attr( $link_color ) . '; }' . "\n";
    }
    
    // Font Family
    $font_family = get_theme_mod( 'pure_font_family', 'system' );
    $font_stacks = array(
        'system'       => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif',
        'roboto'       => '"Roboto", sans-serif',
        'open-sans'    => '"Open Sans", sans-serif',
        'lato'         => '"Lato", sans-serif',
        'montserrat'   => '"Montserrat", sans-serif',
        'poppins'      => '"Poppins", sans-serif',
        'raleway'      => '"Raleway", sans-serif',
        'inter'        => '"Inter", sans-serif',
        'nunito'       => '"Nunito", sans-serif',
        'playfair'     => '"Playfair Display", serif',
        'merriweather' => '"Merriweather", serif',
        'source-sans'  => '"Source Sans Pro", sans-serif',
        'work-sans'    => '"Work Sans", sans-serif',
        'pt-sans'      => '"PT Sans", sans-serif',
        'karla'        => '"Karla", sans-serif',
        'bebas-neue'   => '"Bebas Neue", cursive',
        'oswald'       => '"Oswald", sans-serif',
        'abril'        => '"Abril Fatface", cursive',
    );
    if ( $font_family !== 'system' && isset( $font_stacks[ $font_family ] ) ) {
        $css .= ':root { --font-family-base: ' . $font_stacks[ $font_family ] . '; }' . "\n";
    }
    
    // Heading Font Family
    $heading_font = get_theme_mod( 'pure_heading_font_family', 'inherit' );
    if ( $heading_font !== 'inherit' && isset( $font_stacks[ $heading_font ] ) ) {
        $css .= 'h1, h2, h3, h4, h5, h6 { font-family: ' . $font_stacks[ $heading_font ] . '; }' . "\n";
    }
    
    // Body Font Weight
    $font_weight = get_theme_mod( 'pure_font_weight', '400' );
    if ( $font_weight !== '400' ) {
        $css .= 'body { font-weight: ' . esc_attr( $font_weight ) . '; }' . "\n";
    }
    
    // Heading Font Weight
    $heading_weight = get_theme_mod( 'pure_heading_font_weight', '700' );
    if ( $heading_weight !== '700' ) {
        $css .= 'h1, h2, h3, h4, h5, h6 { font-weight: ' . esc_attr( $heading_weight ) . '; }' . "\n";
    }
    
    // Line Height
    $line_height = get_theme_mod( 'pure_line_height', '1.6' );
    if ( $line_height !== '1.6' ) {
        $css .= ':root { --line-height-base: ' . floatval( $line_height ) . '; }' . "\n";
    }
    
    // Letter Spacing
    $letter_spacing = get_theme_mod( 'pure_letter_spacing', '0' );
    if ( $letter_spacing !== '0' ) {
        $css .= 'body { letter-spacing: ' . floatval( $letter_spacing ) . 'px; }' . "\n";
    }
    
    // Heading Text Transform
    $heading_transform = get_theme_mod( 'pure_heading_text_transform', 'none' );
    if ( $heading_transform !== 'none' ) {
        $css .= 'h1, h2, h3, h4, h5, h6 { text-transform: ' . esc_attr( $heading_transform ) . '; }' . "\n";
    }
    
    // H1 Font Size
    $h1_size = get_theme_mod( 'pure_h1_font_size', '2.5' );
    if ( $h1_size !== '2.5' ) {
        $css .= 'h1 { font-size: ' . floatval( $h1_size ) . 'em; }' . "\n";
    }
    
    // H2 Font Size
    $h2_size = get_theme_mod( 'pure_h2_font_size', '2' );
    if ( $h2_size !== '2' ) {
        $css .= 'h2 { font-size: ' . floatval( $h2_size ) . 'em; }' . "\n";
    }
    
    // H3 Font Size
    $h3_size = get_theme_mod( 'pure_h3_font_size', '1.75' );
    if ( $h3_size !== '1.75' ) {
        $css .= 'h3 { font-size: ' . floatval( $h3_size ) . 'em; }' . "\n";
    }
    
    // H4 Font Size
    $h4_size = get_theme_mod( 'pure_h4_font_size', '1.5' );
    if ( $h4_size !== '1.5' ) {
        $css .= 'h4 { font-size: ' . floatval( $h4_size ) . 'em; }' . "\n";
    }
    
    // H5 Font Size
    $h5_size = get_theme_mod( 'pure_h5_font_size', '1.25' );
    if ( $h5_size !== '1.25' ) {
        $css .= 'h5 { font-size: ' . floatval( $h5_size ) . 'em; }' . "\n";
    }
    
    // H6 Font Size
    $h6_size = get_theme_mod( 'pure_h6_font_size', '1' );
    if ( $h6_size !== '1' ) {
        $css .= 'h6 { font-size: ' . floatval( $h6_size ) . 'em; }' . "\n";
    }
    
    // Font Size
    $font_size = get_theme_mod( 'pure_font_size', '16' );
    if ( $font_size !== '16' ) {
        $css .= ':root { --font-size-base: ' . absint( $font_size ) . 'px; }' . "\n";
    }
    
    // Container Width
    $container_width = get_theme_mod( 'pure_container_width', '1200' );
    if ( $container_width !== '1200' ) {
        $css .= ':root { --container-max-width: ' . absint( $container_width ) . 'px; }' . "\n";
    }
    
    // Sidebar Position
    $sidebar_position = get_theme_mod( 'pure_sidebar_position', 'right' );
    if ( $sidebar_position === 'left' ) {
        $css .= '.content-area { order: 2; }' . "\n";
        $css .= '.widget-area { order: 1; padding-left: 0; padding-right: var(--spacing-lg); }' . "\n";
    } elseif ( $sidebar_position === 'none' ) {
        $css .= '.widget-area { display: none; }' . "\n";
        $css .= '.content-area { max-width: 100%; }' . "\n";
    }
    
    // Sticky Header
    if ( get_theme_mod( 'pure_sticky_header', false ) ) {
        $css .= '.site-header { position: sticky; top: 0; z-index: 100; background: var(--background-color); }' . "\n";
    }
    
    // Output the CSS
    if ( ! empty( $css ) ) {
        echo '<style type="text/css" id="pure-customizer-css">' . "\n";
        echo $css;
        echo '</style>' . "\n";
    }
}
add_action( 'wp_head', 'pure_customizer_css' );

/**
 * Adjust color brightness
 * 
 * @param string $hex Hex color code
 * @param int    $steps Amount to adjust (-255 to 255)
 * @return string Adjusted hex color
 */
function pure_adjust_color_brightness( $hex, $steps ) {
    // Remove # if present
    $hex = str_replace( '#', '', $hex );
    
    // Convert to RGB
    $r = hexdec( substr( $hex, 0, 2 ) );
    $g = hexdec( substr( $hex, 2, 2 ) );
    $b = hexdec( substr( $hex, 4, 2 ) );
    
    // Adjust
    $r = max( 0, min( 255, $r + $steps ) );
    $g = max( 0, min( 255, $g + $steps ) );
    $b = max( 0, min( 255, $b + $steps ) );
    
    // Convert back to hex
    $r_hex = str_pad( dechex( $r ), 2, '0', STR_PAD_LEFT );
    $g_hex = str_pad( dechex( $g ), 2, '0', STR_PAD_LEFT );
    $b_hex = str_pad( dechex( $b ), 2, '0', STR_PAD_LEFT );
    
    return '#' . $r_hex . $g_hex . $b_hex;
}
