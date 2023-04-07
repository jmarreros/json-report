<?php
/*
Plugin Name: Json Report
Plugin URI: https://decodecms.com
Description: Generate a json report from a form
Version: 1.0
Author: Jhon Marreros Guzmán
Author URI: https://decodecms.com
Text Domain: json-report
Domain Path: languages
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

namespace dcms\json_report;

require __DIR__ . '/vendor/autoload.php';

use json_report\includes\Enqueue;
use json_report\includes\Plugin;
use json_report\includes\Shortcode;
use json_report\includes\Submenu;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin class to handle settings constants and loading files
 **/
final class Loader {

	// Define all the constants we need
	public function define_constants() {

		// General constants
		define( 'JSON_REPORT_VERSION', '1.0' );
		define( 'JSON_REPORT_PATH', plugin_dir_path( __FILE__ ) . '/src/' );
		define( 'JSON_REPORT_URL', plugin_dir_url( __FILE__ ) . '/src/' );
		define( 'JSON_REPORT_BASE_NAME', plugin_basename( __FILE__ ) . '/src/' );
		define( 'JSON_REPORT_SUBMENU', 'tools.php' );

		// Shortcode
		define( 'JSON_REPORT_FORM', 'json_report_form' );
	}

	// Load tex domain
	public function load_domain() {
		add_action( 'plugins_loaded', function () {
			$path_languages = dirname( JSON_REPORT_BASE_NAME ) . '/languages/';
			load_plugin_textdomain( 'json-report', false, $path_languages );
		} );
	}

	// Add link to plugin list
	public function add_link_plugin() {
		add_action( 'plugin_action_links_' . plugin_basename( __FILE__ ), function ( $links ) {
			return array_merge( array(
				'<a href="' . esc_url( admin_url( JSON_REPORT_SUBMENU . '?page=json-report' ) ) . '">' . __( 'Settings', 'json-report' ) . '</a>'
			), $links );
		} );
	}

	// Initialize all
	public function init() {
		$this->define_constants();
		$this->load_domain();
		$this->add_link_plugin();
		new Plugin();
		new SubMenu();
		new Enqueue();
		new Shortcode();
	}

}

( new Loader() )->init();


