/**
 * Customizer Controls - Add value display for range sliders
 */
(function($) {
    'use strict';

    wp.customize.bind('ready', function() {
        // Add value display to range inputs
        $('.customize-control-range input[type="range"]').each(function() {
            var $input = $(this);
            var $control = $input.closest('.customize-control');
            var currentValue = $input.val();
            
            // Create value display if it doesn't exist
            if (!$control.find('.range-value').length) {
                $input.after('<span class="range-value">' + currentValue + '</span>');
            }
            
            // Update value display on change
            $input.on('input change', function() {
                $(this).next('.range-value').text($(this).val());
            });
        });
    });

})(jQuery);
