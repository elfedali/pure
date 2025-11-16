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

})(jQuery);
