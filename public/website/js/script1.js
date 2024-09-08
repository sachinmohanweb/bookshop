$(document).ready(function() {
            $('.cart-qty-plus').click(function(e) {
                e.preventDefault();
                var $qty = $(this).closest('.qty').find('.plus-ic');
                var currentVal = parseInt($qty.val());
                if (!isNaN(currentVal)) {
                    $qty.val(currentVal + 1);
                } else {
                    $qty.val(0);
                }
            });

            $('.cart-qty-minus').click(function(e) {
                e.preventDefault();
                var $qty = $(this).closest('.qty').find('.plus-ic');
                var currentVal = parseInt($qty.val());
                if (!isNaN(currentVal) && currentVal > 0) {
                    $qty.val(currentVal - 1);
                } else {
                    $qty.val(0);
                }
            });
        });