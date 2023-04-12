(function ($) {
    'use strict';

    $('.show-product').hide();
    $('.dictamen').hide();
    $('.nacional').hide();
    $('.si-condensados').hide();

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

        sectionAddRemove(e.target, 'add-product', '.products-container', '.product-container');
        sectionAddRemove(e.target, 'remove-product', '.products-container', '.product-container');

        sectionAddRemove(e.target, 'add-condensado', '.condensados', '.condensado');
        sectionAddRemove(e.target, 'remove-condensado', '.condensados', '.condensado');

        sectionAddRemove(e.target, 'add-reception', '.recepciones', '.recepcion');
        sectionAddRemove(e.target, '.remove-reception', '.recepciones', '.recepcion');

        sectionAddRemove(e.target, 'add-complemento', '.complementos', '.complemento');
        sectionAddRemove(e.target, 'remove-complemento', '.complementos', '.complemento');

        sectionAddRemove(e.target, 'add-cdfi', '.cfdis', '.cfdi');
        sectionAddRemove(e.target, 'remove-cdfi', '.cfdis', '.cfdi');
    });

    function sectionAddRemove(target, classButton, parentContainer, sectionContainer) {
        if ($(target).hasClass(classButton)) {
             if (classButton.includes('add')) {
                $(target).closest(parentContainer).find(sectionContainer).last().clone().appendTo($(target).closest(parentContainer));

                cleanClonElements($(target).closest(parentContainer).find(sectionContainer).last());
                if (sectionContainer === '.product-container') {
                    $(target).closest(parentContainer).find(sectionContainer).last().find('.product-code').text('');
                }

            } else if (classButton.includes('remove')) {
                if ($(target).closest(parentContainer).find(sectionContainer).length > 1) {
                    $(target).closest(parentContainer).find(sectionContainer).last().remove();
                }
            }
        }
    }


    $('.products-container').keyup(function (e) {
        if ($(e.target).attr('name') === 'ClaveProducto') {
            const text = $(e.target).val();
            $(e.target).closest('.product-container').find('.product-code').text(text);
        }
    });


    $('.products-container').change(function (e) {
        if ($(e.target).hasClass('sel-additional-complement')) {
            $(e.target).closest('.additional-container').find('.dictamen').hide();
            $(e.target).closest('.additional-container').find('.nacional').hide();

            const containerClass = "." + $(e.target).val().toLowerCase();
            $(e.target).closest('.additional-container').find(containerClass).show();
        }

        if ($(e.target).hasClass('sel-condensados')) {
            $(e.target).closest('.condensados-container').find('.no-condensados').hide();
            $(e.target).closest('.condensados-container').find('.condensados').hide();

            const containerClass = "." + $(e.target).val();
            $(e.target).closest('.condensados-container').find(containerClass).show();
        }

    });


    function cleanClonElements(el) {
        $(el).find('input').each(function () {
            $(this).val('');
        });
    }

})(jQuery);