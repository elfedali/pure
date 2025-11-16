/**
 * Customizer Live Preview
 */
(function($) {
    'use strict';

    // Logo Height
    wp.customize('pure_logo_height', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--logo-height', newval + 'px');
        });
    });

    // Menu Text Transform
    wp.customize('pure_menu_text_transform', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--menu-text-transform', newval);
        });
    });

    // Menu Background Color
    wp.customize('pure_menu_background_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--menu-bg-color', newval);
        });
    });

    // Menu Text Color
    wp.customize('pure_menu_text_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--menu-text-color', newval);
        });
    });

    // Menu Hover Color
    wp.customize('pure_menu_hover_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--menu-hover-color', newval);
        });
    });

    // Menu Font Size
    wp.customize('pure_menu_font_size', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--menu-font-size', newval + 'px');
        });
    });

})(jQuery);
