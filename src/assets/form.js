(function ($) {
    'use strict';

    const date = new Date();
    const currentDate = date.toISOString().split('T')[0];
    const currentHour = date.getHours().toString().padStart(2, '0') + ":" + date.getMinutes().toString().padStart(2, '0');

    $('#FechaYHoraReporteMes').val(currentDate + " " + currentHour);

    $('.show-product').hide();
    $('.dictamen').hide();
    $('.nacional').hide();

    // Products
    $('.products-container').click(function (e) {
        e.preventDefault();

        if ($(e.target).parent().hasClass('show-product') || $(e.target).parent().hasClass('hide-product')) {
            $(e.target).parent().hide();
            if ($(e.target).parent().hasClass('show-product')) {
                $(e.target).parent().parent().find('.hide-product').show();
                $(e.target).closest('.product-container').find('.product-data').show();
            } else {
                $(e.target).parent().parent().find('.show-product').show();
                $(e.target).closest('.product-container').find('.product-data').hide();
            }
        }

        sectionAddRemove(e.target, 'add-product', '.products-container', '.product-container');
        sectionAddRemove(e.target, 'remove-product', '.products-container', '.product-container');

        sectionAddRemove(e.target, 'add-condensado', '.condensados', '.condensado');
        sectionAddRemove(e.target, 'remove-condensado', '.condensados', '.condensado');

        sectionAddRemove(e.target, 'add-reception', '.recepciones', '.recepcion');
        sectionAddRemove(e.target, 'remove-reception', '.recepciones', '.recepcion');

        sectionAddRemove(e.target, 'add-entrega', '.entregas', '.entrega');
        sectionAddRemove(e.target, 'remove-entrega', '.entregas', '.entrega');

        sectionAddRemove(e.target, 'add-complemento', '.complementos', '.complemento');
        sectionAddRemove(e.target, 'remove-complemento', '.complementos', '.complemento');

        sectionAddRemove(e.target, 'add-cdfi', '.cfdis', '.cfdi');
        sectionAddRemove(e.target, 'remove-cdfi', '.cfdis', '.cfdi');
    });

    // Bitacoras
    $('.bitacoras').click(function (e) {
        e.preventDefault();
        sectionAddRemove(e.target, 'add-bitacora', '.bitacoras', '.bitacora');
        sectionAddRemove(e.target, 'remove-bitacora', '.bitacoras', '.bitacora');
    });


    function sectionAddRemove(target, classButton, parentContainer, sectionContainer) {
        if ($(target).hasClass(classButton)) {
             if (classButton.includes('add')) {
                $(target).closest(parentContainer).find(sectionContainer).last().clone().appendTo($(target).closest(parentContainer));

                cleanClonElements($(target).closest(parentContainer).find(sectionContainer).last());

            } else if (classButton.includes('remove')) {
                if ($(target).closest(parentContainer).find(sectionContainer).length > 1) {
                    $(target).closest(parentContainer).find(sectionContainer).last().remove();
                }
            }
        }
    }

    $('.products-container').keyup(function (e) {
        if ($(e.target).data('json') === 'ClaveProducto') {
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

    });


    function cleanClonElements(el) {
        $(el).find('input, textarea').each(function () {
            $(this).val('');
        });

        if ($(el).hasClass('product-container')) {
            $(el).find('.product-code').text('');

            $(el).find('.dictamen').hide();
            $(el).find('.nacional').hide();

            $(el).find('.condensado').not(':first').remove();

            $(el).find('.recepcion').not(':first').remove();
            $(el).find('.recepcion .complemento').not(':first').remove();
            $(el).find('.recepcion .complemento .cfdi').not(':first').remove();

            $(el).find('.entrega').not(':first').remove();
            $(el).find('.entrega .complemento').not(':first').remove();
            $(el).find('.entrega .complemento .cfdi').not(':first').remove();
        }

        if ($(el).hasClass('recepcion') || $(el).hasClass('entrega') ) {
            $(el).find('.complemento').not(':first').remove();
            $(el).find('.complemento .cfdi').not(':first').remove();
            $(el).find('.dictamen').hide();
            $(el).find('.nacional').hide();
        }

        if ($(el).hasClass('complemento')){
            $(el).find('.dictamen').hide();
            $(el).find('.nacional').hide();
            $(el).find('.cfdi').not(':first').remove();
        }
    }

})(jQuery);
