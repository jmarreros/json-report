<?php

namespace json_report\includes;

class Settings {

	public function __construct() {
		add_action( 'admin_init', [ $this, 'init_configuration' ] );
	}

	// Register sections and fields
	public function init_configuration() {
		register_setting( 'dcms_json_options_bd', 'dcms_json_options' );

		$this->fields_general_config();
	}

	// Fields email configuration
	private function fields_general_config() {

		// General
		add_settings_section( 'dcms_general_section',
			__( 'Configuración General', 'json-report' ),
			[ $this, 'dcms_section_cb' ],
			'dcms_json_general_fields' );

		add_settings_field( 'dcms_version',
			__( 'Versión', 'json-report' ),
			[ $this, 'dcms_section_input_cb' ],
			'dcms_json_general_fields',
			'dcms_general_section',
			[
				'dcms_option' => 'dcms_json_options',
				'label_for'   => 'dcms_version',
				'required'    => true
			]
		);

	}

	// Métodos auxiliares genéricos

	// Callback section
	public function dcms_section_cb() {
		echo '<hr/>';
	}

	// Callback input field callback
	public function dcms_section_input_cb( $args ) {
		$dcms_option = $args['dcms_option'];
		$id          = $args['label_for'];
		$req         = isset( $args['required'] ) ? 'required' : '';
		$class       = isset( $args['class'] ) ? "class='" . $args['class'] . "'" : '';
		$desc        = $args['description'] ?? '';

		$options = get_option( $dcms_option );
		$val     = $options[ $id ] ?? '';

		printf( "<input id='%s' name='%s[%s]' class='regular-text' type='text' value='%s' %s %s>",
			$id, $dcms_option, $id, $val, $req, $class );

		if ( $desc ) {
			printf( "<p class='description'>%s</p> ", $desc );
		}

	}

}


