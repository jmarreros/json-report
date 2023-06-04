(function ($) {
    'use strict';

    let json = {};

    function get_json_data() {
        // General Info, textos en span desde BD (Text true)
        Object.assign(json, get_item_data('.json-general-info .json-data', true, true));
        // General Info, textos en input
        Object.assign(json, get_item_data('.general-data .json-data'));
        // Numbers data
        Object.assign(json, get_item_data('.numbers-data .json-data'));
        // dates data
        Object.assign(json, get_item_data('.date-data .json-data'));
        // Geolocalizacion
        json.Geolocalizacion = [get_item_data('.geo-data .json-data')];

        //Productos
        let products = [];
        $('.products-container .product-container').each(function () {
            let product = get_item_data($(this).find('.product-data .product-clave .json-data'));
            let no_condensados = {};

            // No condensados
            if ($(this).find('.product-data .no-condensados .json-data')) {
                no_condensados = get_item_data($(this).find('.product-data .no-condensados .json-data'), false);
            }

            Object.assign(product, no_condensados);

            // Condensados
            let condensados = [];
            $(this).find('.product-data .condensados .condensado').each(function () {
                const condensado = get_item_data($(this).find('.json-data'), false);
                if (JSON.stringify(condensado) != '{}') {
                    condensados.push(condensado);
                }
            });
            if (condensados.length > 0) {
                product.GasNaturalOCondensados = condensados;
            }

            product.ReporteDeVolumenMensual = {};

            // Recepciones
            const recepcionGeneralInfo = get_item_data($(this).find('.product-data .recepciones-general .recepciones-info .json-data'));
            const recepcionSumRecepciones = get_item_data($(this).find('.product-data .recepciones-general .sum-recepciones .json-data'))
            const recepcionPoderCalorifico = get_item_data($(this).find('.product-data .recepciones-general .poder-calorifico .json-data'));

            product.ReporteDeVolumenMensual.Recepciones = recepcionGeneralInfo;
            product.ReporteDeVolumenMensual.Recepciones.SumaVolumenRecepcionMes = recepcionSumRecepciones;
            product.ReporteDeVolumenMensual.Recepciones.PoderCalorifico = recepcionPoderCalorifico;

            // Complemento recepciones
            let complementos = [];
            $(this).find('.product-data .recepcion .complementos .complemento').each(function () {
                let complemento = build_complemento(this);
                complementos.push(complemento);
            });
            if (complementos.length > 0) {
                product.ReporteDeVolumenMensual.Recepciones.Complemento = complementos;
            }

            // Entregas
            const entregasGeneralInfo = get_item_data($(this).find('.product-data .entregas-general .entregas-info .json-data'));
            const entregasSumRecepciones = get_item_data($(this).find('.product-data .entregas-general .sum-entregas .json-data'))
            const entregasPoderCalorifico = get_item_data($(this).find('.product-data .entregas-general .poder-calorifico .json-data'));

            product.ReporteDeVolumenMensual.Entregas = entregasGeneralInfo;
            product.ReporteDeVolumenMensual.Entregas.SumaVolumenRecepcionMes = entregasSumRecepciones;
            product.ReporteDeVolumenMensual.Entregas.PoderCalorifico = entregasPoderCalorifico;

            // Complemento entregas
            complementos = [];
            $(this).find('.product-data .entregas .complementos .complemento').each(function () {
                let complemento = build_complemento(this);
                complementos.push(complemento);
            });
            if (complementos.length > 0) {
                product.ReporteDeVolumenMensual.Entregas.Complemento = complementos;
            }

            products.push(product);
        });

        json.Productos = products;


        // Bitacora mensual
        let bitacoras = [];
        $('.bitacoras .bitacora').each(function (){
            const bitacora = get_item_data($(this).find('.json-data') );
            bitacoras.push(bitacora);
        });

        json.BitacoraMensual = bitacoras;

    }

    $("#btn-save-json").click(function (e) {
        e.preventDefault();
        get_json_data();

        temporal_report_screen();

        export_file();

        // $.ajax({
        //     url : json_report.ajaxurl,
        //     type: 'post',
        //     data: {
        //         action : 'process_json_data',
        //         nonce: json_report.nonce,
        //         json
        //     },
        //     beforeSend: function(){
        //
        //     },
        //     success: function(res){
        //         console.log(res)
        //     }
        //
        // });

    });

    function get_item_data(selector, empty_val = true, text = false) {
        let value = {}

        $(selector).each(function () {
            if (text) {
                value[$(this).data('json')] = $(this).text();
            } else {
                if (!empty_val && $(this).val() != '') {
                    value[$(this).data('json')] = $(this).val();
                } else if (empty_val) {
                    value[$(this).data('json')] = $(this).val();
                }
            }
        });
        return value;
    }

    function build_complemento(selector){
        let complemento = get_item_data($(selector).find('.info-complemento .json-data'));

        // Dictamen
        if ($(selector).find('.sel-additional-complement').val() === 'Dictamen') {
            complemento.Dictamen = get_item_data($(selector).find('.dictamen .json-data'));
        } else if ($(selector).find('.sel-additional-complement').val() === 'Nacional') {
            complemento.Nacional = get_item_data($(selector).find('.nacional .nacional-info .json-data'));

            let cfdis = [];

            $(selector).find('.nacional .cfdis .cfdi').each(function () {
                let cfdi = get_item_data($(selector).find('.cfdi-info .json-data'));
                cfdi.VolumenDocumentado = get_item_data($(selector).find('.volumen-documentado .json-data'));
                cfdis.push(cfdi);
            });

            complemento.Nacional.CFDIs = cfdis;
        }

        return complemento;
    }

    function export_file() {
        const filename = 'data.json';
        const jsonStr = JSON.stringify(json, null, 3); //JSON.stringify(json);

        let element = document.createElement('a');
        element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(jsonStr));
        element.setAttribute('download', filename);

        element.style.display = 'none';
        document.body.appendChild(element);
        element.click();
        document.body.removeChild(element);
    }

    function temporal_report_screen(){
        // Impresión temporal
        const jsonStr = JSON.stringify(json, null, 3);
        $('#print-json').text(jsonStr);
    }

})(jQuery);
