<?php

namespace json_report\includes;

class Process {

	public function __construct() {
		add_action( 'wp_ajax_process_json_data', [ $this, 'process_json_data' ] );
	}

	public function process_json_data(){
		
		$json_data = $_POST['json'];
		
		error_log(print_r($json_data,true));
		
		$res = [
			'status'  => 1,
			'message' => "✅ Los datos se guardaron correctamente",
		];
		wp_send_json( $res );
	}

}