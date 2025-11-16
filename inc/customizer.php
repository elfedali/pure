<?php
/**
 * Customizer options
 */

function pure_customize_register( $wp_customize ) {
    
    // ========================================
    // Colors Panel - Centralized Color Management
    // ========================================
    
    $wp_customize->add_panel( 'pure_colors_panel', array(
        'title'       => __( 'Colors', 'pure' ),
        'description' => __( 'Manage all theme colors in one place', 'pure' ),
        'priority'    => 30,
    ) );
    
    // Brand Colors Section
    $wp_customize->add_section( 'pure_brand_colors', array(
        'title'    => __( 'Brand Colors', 'pure' ),
        'panel'    => 'pure_colors_panel',
        'priority' => 10,
    ) );
    
    // Primary Color
    $wp_customize->add_setting( 'pure_primary_color', array(
        'default'           => '#0078e7',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pure_primary_color', array(
        'label'       => __( 'Primary Brand Color', 'pure' ),
        'description' => __( 'Main color used throughout the site', 'pure' ),
        'section'     => 'pure_brand_colors',
    ) ) );
    
    // Secondary Color
    $wp_customize->add_setting( 'pure_secondary_color', array(
        'default'           => '#666666',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pure_secondary_color', array(
        'label'       => __( 'Secondary Color', 'pure' ),
        'description' => __( 'Supporting color for text and accents', 'pure' ),
        'section'     => 'pure_brand_colors',
    ) ) );
    
    // Link Color
    $wp_customize->add_setting( 'pure_link_color', array(
        'default'           => '#0078e7',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pure_link_color', array(
        'label'       => __( 'Link Color', 'pure' ),
        'description' => __( 'Color for text links', 'pure' ),
        'section'     => 'pure_brand_colors',
    ) ) );
    
    // Navigation Colors Section
    $wp_customize->add_section( 'pure_navigation_colors', array(
        'title'       => __( 'Navigation Colors', 'pure' ),
        'description' => __( 'Customize menu appearance', 'pure' ),
        'panel'       => 'pure_colors_panel',
        'priority'    => 20,
    ) );
    
    // Menu Background Color
    $wp_customize->add_setting( 'pure_menu_background_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pure_menu_background_color', array(
        'label'       => __( 'Menu Background', 'pure' ),
        'description' => __( 'Background color for navigation menu', 'pure' ),
        'section'     => 'pure_navigation_colors',
    ) ) );
    
    // Menu Text Color
    $wp_customize->add_setting( 'pure_menu_text_color', array(
        'default'           => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pure_menu_text_color', array(
        'label'       => __( 'Menu Text', 'pure' ),
        'description' => __( 'Text color for menu items', 'pure' ),
        'section'     => 'pure_navigation_colors',
    ) ) );
    
    // Menu Hover Color
    $wp_customize->add_setting( 'pure_menu_hover_color', array(
        'default'           => '#0078e7',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pure_menu_hover_color', array(
        'label'       => __( 'Menu Hover/Active', 'pure' ),
        'description' => __( 'Color for hover and active menu items', 'pure' ),
        'section'     => 'pure_navigation_colors',
    ) ) );
    
    // ========================================
    // Typography Section
    // ========================================
    
    $wp_customize->add_section( 'pure_typography_section', array(
        'title'    => __( 'Typography', 'pure' ),
        'priority' => 40,
    ) );
    
    // Body Font Family
    $wp_customize->add_setting( 'pure_font_family', array(
        'default'           => 'system',
        'sanitize_callback' => 'pure_sanitize_select',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( 'pure_font_family', array(
        'label'       => __( 'Body Font Family', 'pure' ),
        'description' => __( 'Font for body text and paragraphs', 'pure' ),
        'section'     => 'pure_typography_section',
        'type'        => 'select',
        'priority'    => 10,
        'choices'     => array(
            'system'       => __( 'System Default', 'pure' ),
            'roboto'       => __( 'Roboto', 'pure' ),
            'open-sans'    => __( 'Open Sans', 'pure' ),
            'lato'         => __( 'Lato', 'pure' ),
            'montserrat'   => __( 'Montserrat', 'pure' ),
            'poppins'      => __( 'Poppins', 'pure' ),
            'raleway'      => __( 'Raleway', 'pure' ),
            'inter'        => __( 'Inter', 'pure' ),
            'nunito'       => __( 'Nunito', 'pure' ),
            'source-sans'  => __( 'Source Sans Pro', 'pure' ),
            'work-sans'    => __( 'Work Sans', 'pure' ),
            'pt-sans'      => __( 'PT Sans', 'pure' ),
            'karla'        => __( 'Karla', 'pure' ),
        ),
    ) );
    
    // Heading Font Family
    $wp_customize->add_setting( 'pure_heading_font_family', array(
        'default'           => 'inherit',
        'sanitize_callback' => 'pure_sanitize_select',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( 'pure_heading_font_family', array(
        'label'       => __( 'Heading Font Family', 'pure' ),
        'description' => __( 'Font for headings (h1-h6)', 'pure' ),
        'section'     => 'pure_typography_section',
        'type'        => 'select',
        'priority'    => 20,
        'choices'     => array(
            'inherit'      => __( 'Same as Body', 'pure' ),
            'system'       => __( 'System Default', 'pure' ),
            'roboto'       => __( 'Roboto', 'pure' ),
            'open-sans'    => __( 'Open Sans', 'pure' ),
            'lato'         => __( 'Lato', 'pure' ),
            'montserrat'   => __( 'Montserrat', 'pure' ),
            'poppins'      => __( 'Poppins', 'pure' ),
            'raleway'      => __( 'Raleway', 'pure' ),
            'playfair'     => __( 'Playfair Display', 'pure' ),
            'merriweather' => __( 'Merriweather', 'pure' ),
            'bebas-neue'   => __( 'Bebas Neue', 'pure' ),
            'oswald'       => __( 'Oswald', 'pure' ),
            'abril'        => __( 'Abril Fatface', 'pure' ),
        ),
    ) );
    
    // Font Size
    $wp_customize->add_setting( 'pure_font_size', array(
        'default'           => '16',
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( 'pure_font_size', array(
        'label'       => __( 'Base Font Size (px)', 'pure' ),
        'description' => __( 'Default: 16px', 'pure' ),
        'section'     => 'pure_typography_section',
        'type'        => 'number',
        'priority'    => 30,
        'input_attrs' => array(
            'min'  => 12,
            'max'  => 24,
            'step' => 1,
        ),
    ) );
    
    // Body Font Weight
    $wp_customize->add_setting( 'pure_font_weight', array(
        'default'           => '400',
        'sanitize_callback' => 'pure_sanitize_select',
    ) );

    $wp_customize->add_control( 'pure_font_weight', array(
        'label'    => __( 'Body Font Weight', 'pure' ),
        'section'  => 'pure_typography_section',
        'type'     => 'select',
        'priority' => 40,
        'choices'  => array(
            '300' => __( 'Light (300)', 'pure' ),
            '400' => __( 'Normal (400)', 'pure' ),
            '500' => __( 'Medium (500)', 'pure' ),
            '600' => __( 'Semi-Bold (600)', 'pure' ),
        ),
    ) );
    
    // Heading Font Weight
    $wp_customize->add_setting( 'pure_heading_font_weight', array(
        'default'           => '700',
        'sanitize_callback' => 'pure_sanitize_select',
    ) );

    $wp_customize->add_control( 'pure_heading_font_weight', array(
        'label'    => __( 'Heading Font Weight', 'pure' ),
        'section'  => 'pure_typography_section',
        'type'     => 'select',
        'priority' => 50,
        'choices'  => array(
            '400' => __( 'Normal (400)', 'pure' ),
            '500' => __( 'Medium (500)', 'pure' ),
            '600' => __( 'Semi-Bold (600)', 'pure' ),
            '700' => __( 'Bold (700)', 'pure' ),
            '800' => __( 'Extra Bold (800)', 'pure' ),
            '900' => __( 'Black (900)', 'pure' ),
        ),
    ) );
    
    // Line Height
    $wp_customize->add_setting( 'pure_line_height', array(
        'default'           => '1.6',
        'sanitize_callback' => 'pure_sanitize_float',
    ) );

    $wp_customize->add_control( 'pure_line_height', array(
        'label'       => __( 'Line Height', 'pure' ),
        'description' => __( 'Space between lines of text. Default: 1.6', 'pure' ),
        'section'     => 'pure_typography_section',
        'type'        => 'number',
        'priority'    => 60,
        'input_attrs' => array(
            'min'  => 1.0,
            'max'  => 2.5,
            'step' => 0.1,
        ),
    ) );
    
    // Letter Spacing
    $wp_customize->add_setting( 'pure_letter_spacing', array(
        'default'           => '0',
        'sanitize_callback' => 'pure_sanitize_float',
    ) );

    $wp_customize->add_control( 'pure_letter_spacing', array(
        'label'       => __( 'Letter Spacing (px)', 'pure' ),
        'description' => __( 'Space between letters. Default: 0', 'pure' ),
        'section'     => 'pure_typography_section',
        'type'        => 'number',
        'priority'    => 70,
        'input_attrs' => array(
            'min'  => -2,
            'max'  => 5,
            'step' => 0.1,
        ),
    ) );
    
    // Text Transform
    $wp_customize->add_setting( 'pure_heading_text_transform', array(
        'default'           => 'none',
        'sanitize_callback' => 'pure_sanitize_select',
    ) );

    $wp_customize->add_control( 'pure_heading_text_transform', array(
        'label'    => __( 'Heading Text Transform', 'pure' ),
        'section'  => 'pure_typography_section',
        'type'     => 'select',
        'priority' => 80,
        'choices'  => array(
            'none'       => __( 'None', 'pure' ),
            'capitalize' => __( 'Capitalize', 'pure' ),
            'uppercase'  => __( 'Uppercase', 'pure' ),
            'lowercase'  => __( 'Lowercase', 'pure' ),
        ),
    ) );
    
    // H1 Font Size
    $wp_customize->add_setting( 'pure_h1_font_size', array(
        'default'           => '2.5',
        'sanitize_callback' => 'pure_sanitize_float',
    ) );

    $wp_customize->add_control( 'pure_h1_font_size', array(
        'label'       => __( 'H1 Font Size (em)', 'pure' ),
        'description' => __( 'Default: 2.5em', 'pure' ),
        'section'     => 'pure_typography_section',
        'type'        => 'number',
        'priority'    => 90,
        'input_attrs' => array(
            'min'  => 1.5,
            'max'  => 5,
            'step' => 0.1,
        ),
    ) );
    
    // H2 Font Size
    $wp_customize->add_setting( 'pure_h2_font_size', array(
        'default'           => '2',
        'sanitize_callback' => 'pure_sanitize_float',
    ) );

    $wp_customize->add_control( 'pure_h2_font_size', array(
        'label'       => __( 'H2 Font Size (em)', 'pure' ),
        'description' => __( 'Default: 2em', 'pure' ),
        'section'     => 'pure_typography_section',
        'type'        => 'number',
        'priority'    => 100,
        'input_attrs' => array(
            'min'  => 1.2,
            'max'  => 4,
            'step' => 0.1,
        ),
    ) );
    
    // H3 Font Size
    $wp_customize->add_setting( 'pure_h3_font_size', array(
        'default'           => '1.75',
        'sanitize_callback' => 'pure_sanitize_float',
    ) );

    $wp_customize->add_control( 'pure_h3_font_size', array(
        'label'       => __( 'H3 Font Size (em)', 'pure' ),
        'description' => __( 'Default: 1.75em', 'pure' ),
        'section'     => 'pure_typography_section',
        'type'        => 'number',
        'priority'    => 110,
        'input_attrs' => array(
            'min'  => 1,
            'max'  => 3,
            'step' => 0.05,
        ),
    ) );
    
    // H4 Font Size
    $wp_customize->add_setting( 'pure_h4_font_size', array(
        'default'           => '1.5',
        'sanitize_callback' => 'pure_sanitize_float',
    ) );

    $wp_customize->add_control( 'pure_h4_font_size', array(
        'label'       => __( 'H4 Font Size (em)', 'pure' ),
        'description' => __( 'Default: 1.5em', 'pure' ),
        'section'     => 'pure_typography_section',
        'type'        => 'number',
        'priority'    => 120,
        'input_attrs' => array(
            'min'  => 1,
            'max'  => 2.5,
            'step' => 0.05,
        ),
    ) );
    
    // H5 Font Size
    $wp_customize->add_setting( 'pure_h5_font_size', array(
        'default'           => '1.25',
        'sanitize_callback' => 'pure_sanitize_float',
    ) );

    $wp_customize->add_control( 'pure_h5_font_size', array(
        'label'       => __( 'H5 Font Size (em)', 'pure' ),
        'description' => __( 'Default: 1.25em', 'pure' ),
        'section'     => 'pure_typography_section',
        'type'        => 'number',
        'priority'    => 130,
        'input_attrs' => array(
            'min'  => 0.9,
            'max'  => 2,
            'step' => 0.05,
        ),
    ) );
    
    // H6 Font Size
    $wp_customize->add_setting( 'pure_h6_font_size', array(
        'default'           => '1',
        'sanitize_callback' => 'pure_sanitize_float',
    ) );

    $wp_customize->add_control( 'pure_h6_font_size', array(
        'label'       => __( 'H6 Font Size (em)', 'pure' ),
        'description' => __( 'Default: 1em', 'pure' ),
        'section'     => 'pure_typography_section',
        'type'        => 'number',
        'priority'    => 140,
        'input_attrs' => array(
            'min'  => 0.8,
            'max'  => 1.5,
            'step' => 0.05,
        ),
    ) );
    
    // ========================================
    // Layout Section
    // ========================================
    
    $wp_customize->add_section( 'pure_layout_section', array(
        'title'    => __( 'Layout Settings', 'pure' ),
        'priority' => 50,
    ) );
    
    // Container Width
    $wp_customize->add_setting( 'pure_container_width', array(
        'default'           => '1200',
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( 'pure_container_width', array(
        'label'       => __( 'Container Max Width (px)', 'pure' ),
        'description' => __( 'Default: 1200px', 'pure' ),
        'section'     => 'pure_layout_section',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 960,
            'max'  => 1920,
            'step' => 10,
        ),
    ) );
    
    // Sidebar Position
    $wp_customize->add_setting( 'pure_sidebar_position', array(
        'default'           => 'right',
        'sanitize_callback' => 'pure_sanitize_select',
    ) );

    $wp_customize->add_control( 'pure_sidebar_position', array(
        'label'    => __( 'Sidebar Position', 'pure' ),
        'section'  => 'pure_layout_section',
        'type'     => 'radio',
        'choices'  => array(
            'left'  => __( 'Left', 'pure' ),
            'right' => __( 'Right', 'pure' ),
            'none'  => __( 'No Sidebar', 'pure' ),
        ),
    ) );
    
    // Enable Sticky Header
    $wp_customize->add_setting( 'pure_sticky_header', array(
        'default'           => false,
        'sanitize_callback' => 'pure_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'pure_sticky_header', array(
        'label'   => __( 'Enable Sticky Header', 'pure' ),
        'section' => 'pure_layout_section',
        'type'    => 'checkbox',
    ) );
    
    // ========================================
    // Header Section
    // ========================================
    
    $wp_customize->add_panel( 'pure_header_panel', array(
        'title'    => __( 'Header & Navigation', 'pure' ),
        'priority' => 60,
    ) );
    
    // ========================================
    // Logo Section
    // ========================================
    
    $wp_customize->add_section( 'pure_logo_section', array(
        'title'    => __( 'Logo', 'pure' ),
        'panel'    => 'pure_header_panel',
        'priority' => 10,
    ) );
    
    // Logo Height
    $wp_customize->add_setting( 'pure_logo_height', array(
        'default'           => 50,
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'pure_logo_height', array(
        'label'       => __( 'Logo Height (px)', 'pure' ),
        'section'     => 'pure_logo_section',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 30,
            'max'  => 150,
            'step' => 5,
        ),
    ) );

    // ========================================
    // Menu Section
    // ========================================
    
    $wp_customize->add_section( 'pure_menu_section', array(
        'title'    => __( 'Menu', 'pure' ),
        'panel'    => 'pure_header_panel',
        'priority' => 20,
    ) );
    
    // Typography Heading
    $wp_customize->add_setting( 'pure_menu_typography_heading', array(
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( new Pure_Heading_Control( $wp_customize, 'pure_menu_typography_heading', array(
        'label'   => __( 'Typography', 'pure' ),
        'section' => 'pure_menu_section',
    ) ) );
    
    // Menu Text Transform
    $wp_customize->add_setting( 'pure_menu_text_transform', array(
        'default'           => 'uppercase',
        'sanitize_callback' => 'pure_sanitize_select',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'pure_menu_text_transform', array(
        'label'   => __( 'Text Style', 'pure' ),
        'section' => 'pure_menu_section',
        'type'    => 'select',
        'choices' => array(
            'none'       => __( 'Normal', 'pure' ),
            'uppercase'  => __( 'Uppercase', 'pure' ),
            'lowercase'  => __( 'Lowercase', 'pure' ),
            'capitalize' => __( 'Capitalize', 'pure' ),
        ),
    ) );
    
    // Menu Font Size
    $wp_customize->add_setting( 'pure_menu_font_size', array(
        'default'           => 14,
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'pure_menu_font_size', array(
        'label'       => __( 'Font Size (px)', 'pure' ),
        'section'     => 'pure_menu_section',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 10,
            'max'  => 24,
            'step' => 1,
        ),
    ) );
    
    // Color settings moved to unified Colors Panel above

    // ========================================
    // Footer Section
    // ========================================
    
    $wp_customize->add_section( 'pure_footer_section', array(
        'title'    => __( 'Footer Settings', 'pure' ),
        'priority' => 130,
    ) );

    // Footer Copyright Text
    $wp_customize->add_setting( 'pure_footer_text', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ) );

    $wp_customize->add_control( 'pure_footer_text', array(
        'label'       => __( 'Footer Copyright Text', 'pure' ),
        'description' => __( 'Leave empty to use default. HTML allowed.', 'pure' ),
        'section'     => 'pure_footer_section',
        'type'        => 'textarea',
    ) );
    
    // Show/Hide Footer Credits
    $wp_customize->add_setting( 'pure_show_footer_credits', array(
        'default'           => true,
        'sanitize_callback' => 'pure_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'pure_show_footer_credits', array(
        'label'   => __( 'Display Theme Credits', 'pure' ),
        'section' => 'pure_footer_section',
        'type'    => 'checkbox',
    ) );
    
    // ========================================
    // Social Media Section
    // ========================================
    
    $wp_customize->add_section( 'pure_social_section', array(
        'title'    => __( 'Social Media', 'pure' ),
        'priority' => 135,
    ) );
    
    // Social Media Links
    $social_networks = array(
        'facebook'  => 'Facebook',
        'twitter'   => 'Twitter (X)',
        'instagram' => 'Instagram',
        'linkedin'  => 'LinkedIn',
        'youtube'   => 'YouTube',
        'github'    => 'GitHub',
    );
    
    foreach ( $social_networks as $network => $label ) {
        $wp_customize->add_setting( "pure_social_{$network}", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );

        $wp_customize->add_control( "pure_social_{$network}", array(
            'label'   => $label . ' ' . __( 'URL', 'pure' ),
            'section' => 'pure_social_section',
            'type'    => 'url',
        ) );
    }

    // ========================================
    // Performance Section
    // ========================================
    
    $wp_customize->add_section( 'pure_performance_section', array(
        'title'    => __( 'Performance', 'pure' ),
        'priority' => 140,
    ) );
    
    // Enable Lazy Loading
    $wp_customize->add_setting( 'pure_lazy_load_images', array(
        'default'           => true,
        'sanitize_callback' => 'pure_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'pure_lazy_load_images', array(
        'label'       => __( 'Enable Lazy Loading for Images', 'pure' ),
        'description' => __( 'Improves page load performance by loading images only when needed.', 'pure' ),
        'section'     => 'pure_performance_section',
        'type'        => 'checkbox',
    ) );
    
    // Minify HTML Output
    $wp_customize->add_setting( 'pure_minify_html', array(
        'default'           => false,
        'sanitize_callback' => 'pure_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'pure_minify_html', array(
        'label'       => __( 'Minify HTML Output', 'pure' ),
        'description' => __( 'Remove unnecessary whitespace from HTML (advanced).', 'pure' ),
        'section'     => 'pure_performance_section',
        'type'        => 'checkbox',
    ) );
    
    // ========================================
    // Development Mode Section
    // ========================================
    
    $wp_customize->add_section( 'pure_dev_mode_section', array(
        'title'       => __( 'Development Mode', 'pure' ),
        'description' => __( 'Settings for development and debugging.', 'pure' ),
        'priority'    => 143,
    ) );
    
    // Enable Development Mode
    $wp_customize->add_setting( 'pure_dev_mode', array(
        'default'           => false,
        'sanitize_callback' => 'pure_sanitize_checkbox',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( 'pure_dev_mode', array(
        'label'       => __( 'Enable Development Mode', 'pure' ),
        'description' => __( 'Use unminified CSS (theme.css) with source maps for debugging. Disable for production.', 'pure' ),
        'section'     => 'pure_dev_mode_section',
        'type'        => 'checkbox',
    ) );
    
    // Enable Debug Mode
    $wp_customize->add_setting( 'pure_debug_mode', array(
        'default'           => false,
        'sanitize_callback' => 'pure_sanitize_checkbox',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( 'pure_debug_mode', array(
        'label'       => __( 'Enable Debug Mode', 'pure' ),
        'description' => __( 'Add debug comments to HTML output and enable error reporting. Never use in production!', 'pure' ),
        'section'     => 'pure_dev_mode_section',
        'type'        => 'checkbox',
    ) );
    
    // Show Template Info
    $wp_customize->add_setting( 'pure_show_template_info', array(
        'default'           => false,
        'sanitize_callback' => 'pure_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'pure_show_template_info', array(
        'label'       => __( 'Show Template Information', 'pure' ),
        'description' => __( 'Display current template file in HTML comments.', 'pure' ),
        'section'     => 'pure_dev_mode_section',
        'type'        => 'checkbox',
    ) );
    
    // ========================================
    // Security Section
    // ========================================
    
    $wp_customize->add_section( 'pure_security_section', array(
        'title'    => __( 'Security Settings', 'pure' ),
        'priority' => 145,
    ) );

    // CSS Integrity Check
    $wp_customize->add_setting( 'pure_enable_css_integrity', array(
        'default'           => true,
        'sanitize_callback' => 'pure_sanitize_checkbox',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( 'pure_enable_css_integrity', array(
        'label'       => __( 'Enable CSS Integrity Check', 'pure' ),
        'description' => __( 'Add Subresource Integrity (SRI) to CSS files for enhanced security.', 'pure' ),
        'section'     => 'pure_security_section',
        'type'        => 'checkbox',
    ) );
    
    // Remove WordPress Version
    $wp_customize->add_setting( 'pure_remove_wp_version', array(
        'default'           => false,
        'sanitize_callback' => 'pure_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'pure_remove_wp_version', array(
        'label'       => __( 'Remove WordPress Version', 'pure' ),
        'description' => __( 'Hide WordPress version from meta tags for security.', 'pure' ),
        'section'     => 'pure_security_section',
        'type'        => 'checkbox',
    ) );
    
    // ========================================
    // Blog/Archive Section
    // ========================================
    
    $wp_customize->add_section( 'pure_blog_section', array(
        'title'    => __( 'Blog & Archives', 'pure' ),
        'priority' => 150,
    ) );
    
    // Excerpt Length
    $wp_customize->add_setting( 'pure_excerpt_length', array(
        'default'           => '55',
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( 'pure_excerpt_length', array(
        'label'       => __( 'Excerpt Length (words)', 'pure' ),
        'description' => __( 'Default: 55 words', 'pure' ),
        'section'     => 'pure_blog_section',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 10,
            'max'  => 100,
            'step' => 5,
        ),
    ) );
    
    // Read More Text
    $wp_customize->add_setting( 'pure_read_more_text', array(
        'default'           => __( 'Read More', 'pure' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'pure_read_more_text', array(
        'label'   => __( 'Read More Button Text', 'pure' ),
        'section' => 'pure_blog_section',
        'type'    => 'text',
    ) );
    
    // Show Post Meta
    $wp_customize->add_setting( 'pure_show_post_date', array(
        'default'           => true,
        'sanitize_callback' => 'pure_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'pure_show_post_date', array(
        'label'   => __( 'Show Post Date', 'pure' ),
        'section' => 'pure_blog_section',
        'type'    => 'checkbox',
    ) );
    
    $wp_customize->add_setting( 'pure_show_post_author', array(
        'default'           => true,
        'sanitize_callback' => 'pure_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'pure_show_post_author', array(
        'label'   => __( 'Show Post Author', 'pure' ),
        'section' => 'pure_blog_section',
        'type'    => 'checkbox',
    ) );
    
    $wp_customize->add_setting( 'pure_show_post_categories', array(
        'default'           => true,
        'sanitize_callback' => 'pure_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'pure_show_post_categories', array(
        'label'   => __( 'Show Post Categories', 'pure' ),
        'section' => 'pure_blog_section',
        'type'    => 'checkbox',
    ) );
}
add_action( 'customize_register', 'pure_customize_register' );

/**
 * Customizer live preview script
 */
function pure_customizer_live_preview() {
    wp_enqueue_script(
        'pure-customizer-preview',
        PURE_URI . '/assets/js/customizer-preview.js',
        array( 'customize-preview' ),
        PURE_VERSION,
        true
    );
}
add_action( 'customize_preview_init', 'pure_customizer_live_preview' );

/**
 * Customizer controls script
 */
function pure_customizer_controls_scripts() {
    wp_enqueue_script(
        'pure-customizer-controls',
        PURE_URI . '/assets/js/customizer-controls.js',
        array( 'jquery', 'customize-controls' ),
        PURE_VERSION,
        true
    );
    
    // Add inline CSS for range slider styling (minimal, using WP admin defaults)
    wp_add_inline_style(
        'customize-controls',
        '
        .customize-control-range .range-value {
            display: inline-block;
            margin-left: 8px;
            font-weight: 600;
            color: #50575e;
        }
        .customize-control-range input[type="range"] {
            width: 100%;
            max-width: 100%;
            height: 4px;
            border-radius: 2px;
            background: #dcdcde;
            outline: none;
            -webkit-appearance: none;
        }
        .customize-control-range input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #2271b1;
            cursor: pointer;
            border: 2px solid #fff;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
            margin-top: -8px;
        }
        .customize-control-range input[type="range"]::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #2271b1;
            cursor: pointer;
            border: 2px solid #fff;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
        }
        .customize-control-range input[type="range"]::-webkit-slider-runnable-track {
            background: linear-gradient(to right, #2271b1 0%, #2271b1 var(--track-fill, 0%), #dcdcde var(--track-fill, 0%), #dcdcde 100%);
            height: 4px;
            border-radius: 2px;
        }
        .customize-control-range input[type="range"]::-moz-range-track {
            background: #dcdcde;
            height: 4px;
            border-radius: 2px;
        }
        .customize-control-range input[type="range"]::-moz-range-progress {
            background: #2271b1;
            height: 4px;
            border-radius: 2px;
        }
        .customize-control-range .range-wrapper {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .customize-control-range .range-wrapper input[type="range"] {
            flex: 1;
        }
        '
    );
}
add_action( 'customize_controls_enqueue_scripts', 'pure_customizer_controls_scripts' );

/**
 * Sanitize checkbox
 */
function pure_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true === $checked ) ? true : false );
}

/**
 * Sanitize select/radio
 */
function pure_sanitize_select( $input, $setting ) {
    $input = sanitize_key( $input );
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/**
 * Sanitize float
 */
function pure_sanitize_float( $input ) {
    return floatval( $input );
}

/**
 * Custom Heading Control
 */
if ( class_exists( 'WP_Customize_Control' ) ) {
    class Pure_Heading_Control extends WP_Customize_Control {
        public $type = 'heading';
        
        public function render_content() {
            if ( ! empty( $this->label ) ) {
                echo '<h3 style="margin: 25px 0 10px; padding: 10px 0 0; border-top: 1px solid #ddd; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; color: #555;">' . esc_html( $this->label ) . '</h3>';
            }
            if ( ! empty( $this->description ) ) {
                echo '<span class="description customize-control-description" style="display: block; margin-bottom: 10px;">' . $this->description . '</span>';
            }
        }
    }
}
