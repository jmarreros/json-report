<?php

namespace json_report\includes;

class Enqueue {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
	}

	// Front-end script
	public function register_scripts() {
		wp_register_script( 'form-json-script',
			JSON_REPORT_URL . '/assets/form.js',
			[ 'jquery' ],
			JSON_REPORT_VERSION,
			true );

		wp_register_script( 'create-json-script',
			JSON_REPORT_URL . '/assets/create-json.js',
			[ 'jquery' ],
			JSON_REPORT_VERSION,
			true );

		wp_localize_script( 'form-json-script',
			'json_report',
			[
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
				'nonce'   => wp_create_nonce( 'ajax-nonce-json_report' )
			] );

		wp_register_style( 'form-json-style',
			JSON_REPORT_URL . '/assets/style.css',
			[],
			JSON_REPORT_VERSION );
	}

}