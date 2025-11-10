<?php
/**
 * Customizer options
 */

function pure_customize_register( $wp_customize ) {
    // Add color scheme setting
    $wp_customize->add_setting( 'pure_primary_color', array(
        'default'           => '#0078e7',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pure_primary_color', array(
        'label'    => __( 'Primary Color', 'pure' ),
        'section'  => 'colors',
        'settings' => 'pure_primary_color',
    ) ) );

    // Add footer text setting
    $wp_customize->add_section( 'pure_footer_section', array(
        'title'    => __( 'Footer Settings', 'pure' ),
        'priority' => 130,
    ) );

    $wp_customize->add_setting( 'pure_footer_text', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'pure_footer_text', array(
        'label'    => __( 'Footer Text', 'pure' ),
        'section'  => 'pure_footer_section',
        'type'     => 'text',
    ) );

    // Add security section
    $wp_customize->add_section( 'pure_security_section', array(
        'title'    => __( 'Security Settings', 'pure' ),
        'priority' => 140,
    ) );

    // Add CSS integrity check setting
    $wp_customize->add_setting( 'pure_enable_css_integrity', array(
        'default'           => true,
        'sanitize_callback' => 'pure_sanitize_checkbox',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( 'pure_enable_css_integrity', array(
        'label'       => __( 'Enable CSS Integrity Check', 'pure' ),
        'description' => __( 'Add Subresource Integrity (SRI) to CSS files for enhanced security. This helps prevent tampered files from loading.', 'pure' ),
        'section'     => 'pure_security_section',
        'type'        => 'checkbox',
    ) );
}
add_action( 'customize_register', 'pure_customize_register' );

/**
 * Sanitize checkbox
 */
function pure_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true === $checked ) ? true : false );
}
