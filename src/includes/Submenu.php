<?php

namespace json_report\includes;

/**
 * Class for creating a dashboard submenu
 */
class Submenu{
    // Constructor
    public function __construct(){
        add_action('admin_menu', [$this, 'register_submenu']);
    }

    // Register submenu
    public function register_submenu(){
        add_submenu_page(
	        JSON_REPORT_SUBMENU,
            __('Json Report','json-report'),
            __('Json Report','json-report'),
            'manage_options',
            'json-report',
            [$this, 'submenu_page_callback']
        );
    }

    // Callback, show view
    public function submenu_page_callback(){
        include_once (JSON_REPORT_PATH. '/views/backend/main-screen.php');
    }
}