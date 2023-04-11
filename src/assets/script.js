(function ($) {
    'use strict';

    $('.show-product').hide();
    $('.dictamen').hide();
    $('.nacional').hide();

    sectionAddRemove('#add-product', '.products-container', '.product-container', 'add');
    sectionAddRemove('#remove-product', '.products-container', '.product-container', 'remove');

    sectionAddRemove('#add-reception', '.recepciones', '.recepcion', 'add');
    sectionAddRemove('#remove-reception', '.recepciones', '.recepcion', 'remove');

    sectionAddRemove('#add-complemento', '.complementos', '.complemento', 'add');
    sectionAddRemove('#remove-complemento', '.complementos', '.complemento', 'remove');

    sectionAddRemove('#add-cdfi', '.cfdis', '.cfdi', 'add');
    sectionAddRemove('#remove-cdfi', '.cfdis', '.cfdi', 'remove');


    function sectionAddRemove(idButton, parentContainer, sectionContainer, action ){
        $(idButton).click(function (e) {
            e.preventDefault();
            if (action === 'add') {
                $(sectionContainer).last().clone().appendTo(parentContainer);
            } else {
                if ($(sectionContainer).length > 1) {
                    $(sectionContainer).last().remove();
                }
            }
        });
    }

    $('.products-container').click(function (e) {
        e.preventDefault();

        if ($(e.target).hasClass('show-product') || $(e.target).hasClass('hide-product')) {
            $(e.target).hide();
            if ($(e.target).hasClass('show-product')) {
                $(e.target).parent().find('.hide-product').show();
                $(e.target).closest('.product-container').find('.product-data').show();
            } else {
                $(e.target).parent().find('.show-product').show();
                $(e.target).closest('.product-container').find('.product-data').hide();
            }
        }
    });


    $('.products-container').keyup(function (e) {
        if ($(e.target).attr('name') === 'ClaveProducto') {
            const text = $(e.target).val();
            $(e.target).closest('.product-container').find('.product-code').text(text);
        }
    });

    $('.products-container').change(function (e) {
        if ($(e.target).hasClass('additional-complement')) {
            $(e.target).closest('.additional-container').find('.dictamen').hide();
            $(e.target).closest('.additional-container').find('.nacional').hide();

            const containerClass =  "." + $(e.target).val().toLowerCase();
            $(e.target).closest('.additional-container').find(containerClass).show();
        }
    });

})(jQuery);