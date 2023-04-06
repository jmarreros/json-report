<?php

namespace json_report\includes;

//use json_report\includes\Database;

class Plugin{

    public function __construct(){
        register_activation_hook( JSON_REPORT_BASE_NAME, [ $this, 'dcms_activation_plugin'] );
        register_deactivation_hook( JSON_REPORT_BASE_NAME, [ $this, 'dcms_deactivation_plugin'] );
    }

    // Activate plugin - create options and database table
    public function dcms_activation_plugin(){
    }

    // Deactivate plugin
    public function dcms_deactivation_plugin(){
    }

}
