(function ($) {
    'use strict';

    $('.show-product').hide();

    $('#add-product').click(function (e) {
        e.preventDefault();
        $('.product-container').last().clone().appendTo('.products-container');
    });

    $('#remove-product').click(function (e) {
        e.preventDefault();
        if ( $('.product-container').length > 1 ){
            $('.product-container').last().remove();
        }
    });

    $('.products-container').click(function (e) {
        e.preventDefault();

        if ( $(e.target).attr('class') === 'show-product' || $(e.target).attr('class')  === 'hide-product') {
            $(e.target).hide();
            if ($(e.target).attr('class') === 'show-product') {
                $(e.target).parent().find('.hide-product').show();
                $(e.target).closest('.product-container').find('.product-data').show();
            } else {
                $(e.target).parent().find('.show-product').show();
                $(e.target).closest('.product-container').find('.product-data').hide();
            }
        }
    });


    $('.products-container').keyup(function (e) {
        if ( $(e.target).attr('name') === 'ClaveProducto' ){
            const text = $(e.target).val();
            $(e.target).closest('.product-container').find('.product-code').text(text);
        }
    });

})(jQuery);