(function ($) {
    'use strict';

    let json = {};

    function get_json_data() {
        // General Info
        Object.assign(json, get_item_data('.json-general-info .json-data', true));
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

            if ($(this).find('.product-data .no-condensados .json-data')) {
                no_condensados = get_item_data($(this).find('.product-data .no-condensados .json-data'), false, false);
            }

            Object.assign(product, no_condensados);
            products.push(product);
        });

        json.Productos = products;

        // Impresión temporal
        const jsonStr = JSON.stringify(json, null, 3);
        $('#print-json').text(jsonStr);
    }

    $("#btn-save-json").click(function (e) {
        e.preventDefault();
        get_json_data();

        // export_file();

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

    function get_item_data(selector, text = false, empty_val = true) {
        let value = {}

        $(selector).each(function () {
            if (text) {
                value[$(this).data('json')] = $(this).text();
            } else {
                if (!empty_val && $(this).val() != '') {
                    value[$(this).data('json')] = $(this).val();
                }
                else if(empty_val)
                {
                    value[$(this).data('json')] = $(this).val();
                }
            }
        });
        return value;
    }

    function export_file() {
        const filename = 'data.json';
        const jsonStr = JSON.stringify(json);

        let element = document.createElement('a');
        element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(jsonStr));
        element.setAttribute('download', filename);

        element.style.display = 'none';
        document.body.appendChild(element);
        element.click();
        document.body.removeChild(element);
    }

})(jQuery);
