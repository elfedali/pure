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
            
            // Create wrapper and value display if it doesn't exist
            if (!$control.find('.range-wrapper').length) {
                $input.wrap('<div class="range-wrapper"></div>');
                $input.after('<span class="range-value">' + currentValue + '</span>');
            }
            
            // Function to update track fill
            function updateTrackFill() {
                var min = parseFloat($input.attr('min')) || 0;
                var max = parseFloat($input.attr('max')) || 100;
                var val = parseFloat($input.val());
                var percentage = ((val - min) / (max - min)) * 100;
                $input.css('--track-fill', percentage + '%');
            }
            
            // Update value display and track fill on change
            $input.on('input change', function() {
                $(this).siblings('.range-value').text($(this).val());
                updateTrackFill();
            });
            
            // Initialize track fill
            updateTrackFill();
        });
    });

})(jQuery);
