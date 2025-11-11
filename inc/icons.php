<?php
/**
 * Icon helper functions
 * 
 * @package Pure
 */

/**
 * Display a Lucide icon
 * 
 * @param string $icon Icon name from Lucide library
 * @param array  $args Optional. Icon attributes
 * @return void
 */
function pure_icon( $icon, $args = array() ) {
    echo pure_get_icon( $icon, $args );
}

/**
 * Get a Lucide icon HTML
 * 
 * @param string $icon Icon name from Lucide library
 * @param array  $args Optional. Icon attributes
 * @return string Icon HTML
 */
function pure_get_icon( $icon, $args = array() ) {
    $defaults = array(
        'size'        => 24,
        'color'       => 'currentColor',
        'stroke'      => 2,
        'class'       => '',
        'aria_hidden' => true,
    );
    
    $args = wp_parse_args( $args, $defaults );
    
    $class = 'lucide-icon lucide-icon-' . esc_attr( $icon );
    if ( ! empty( $args['class'] ) ) {
        $class .= ' ' . esc_attr( $args['class'] );
    }
    
    $aria = $args['aria_hidden'] ? ' aria-hidden="true"' : '';
    
    $html = sprintf(
        '<i data-lucide="%s" class="%s" width="%d" height="%d" stroke-width="%d"%s></i>',
        esc_attr( $icon ),
        esc_attr( $class ),
        absint( $args['size'] ),
        absint( $args['size'] ),
        absint( $args['stroke'] ),
        $aria
    );
    
    return $html;
}

/**
 * Common icon shortcuts
 */

// Social Media Icons
function pure_icon_facebook( $args = array() ) {
    return pure_get_icon( 'facebook', $args );
}

function pure_icon_twitter( $args = array() ) {
    return pure_get_icon( 'twitter', $args );
}

function pure_icon_instagram( $args = array() ) {
    return pure_get_icon( 'instagram', $args );
}

function pure_icon_linkedin( $args = array() ) {
    return pure_get_icon( 'linkedin', $args );
}

function pure_icon_youtube( $args = array() ) {
    return pure_get_icon( 'youtube', $args );
}

function pure_icon_github( $args = array() ) {
    return pure_get_icon( 'github', $args );
}

// UI Icons
function pure_icon_menu( $args = array() ) {
    return pure_get_icon( 'menu', $args );
}

function pure_icon_close( $args = array() ) {
    return pure_get_icon( 'x', $args );
}

function pure_icon_search( $args = array() ) {
    return pure_get_icon( 'search', $args );
}

function pure_icon_arrow_right( $args = array() ) {
    return pure_get_icon( 'arrow-right', $args );
}

function pure_icon_arrow_left( $args = array() ) {
    return pure_get_icon( 'arrow-left', $args );
}

function pure_icon_calendar( $args = array() ) {
    return pure_get_icon( 'calendar', $args );
}

function pure_icon_user( $args = array() ) {
    return pure_get_icon( 'user', $args );
}

function pure_icon_tag( $args = array() ) {
    return pure_get_icon( 'tag', $args );
}

function pure_icon_folder( $args = array() ) {
    return pure_get_icon( 'folder', $args );
}

function pure_icon_mail( $args = array() ) {
    return pure_get_icon( 'mail', $args );
}

function pure_icon_home( $args = array() ) {
    return pure_get_icon( 'home', $args );
}

function pure_icon_external_link( $args = array() ) {
    return pure_get_icon( 'external-link', $args );
}

