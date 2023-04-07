<?php

namespace json_report\includes;

class Shortcode {
	public function __construct() {
		add_action( 'init', [ $this, 'create_shortcodes' ] );
	}

	// Function to add shortcodes
	public function create_shortcodes() {
		add_shortcode( JSON_REPORT_FORM, [ $this, 'show_client_form' ] );
	}

	// Function show user account in the front-end
	public function show_client_form(): string {

			wp_enqueue_style( 'form-json-style' );
			wp_enqueue_script( 'form-json-script' );

			wp_localize_script( 'form-json-script',
				'json_report',
				[
					'ajaxurl'  => admin_url( 'admin-ajax.php' ),
					'n_json_report' => wp_create_nonce( 'ajax-nonce-json_report' )
				] );

			ob_start();
			include_once JSON_REPORT_PATH . 'views/front-end/client-form.php';
			$html_code = ob_get_contents();
			ob_end_clean();

			return $html_code;
		}

}