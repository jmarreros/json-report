(function ($) {
    'use strict';

    let json = {};

    function get_json_data(){
        // General Info
        $('.json-general-info .json-data').each(function () {
            json[ $(this).data('json') ] = $(this).text();
        });
        $('.general-data .json-data').each(function () {
            json[ $(this).data('json') ] = $(this).val();
        });
    }


    $("#btn-save-json").click(function (e) {
        e.preventDefault();
        get_json_data();

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


    function export_file(){
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