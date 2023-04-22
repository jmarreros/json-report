<?php

namespace json_report\includes;

class UserProfile {
	public function __construct() {
		// New fields section
		add_action( 'show_user_profile', [ $this, 'add_fields_section' ] );
		add_action( 'edit_user_profile', [ $this, 'add_fields_section' ] );

		//Save new fields
		add_action( 'personal_options_update', [ $this, 'save_fields_section' ] );
		add_action( 'edit_user_profile_update', [ $this, 'save_fields_section' ] );
	}

	public function add_fields_section( $user ): void {
		include_once JSON_REPORT_PATH . 'views/backend/user-profile.php';
	}

	public function save_fields_section( $user_id ): void {
		if ( current_user_can( 'edit_user', $user_id ) ) {
			update_user_meta( $user_id, 'RfcContribuyente', $_POST['RfcContribuyente'] ?? '' );
			update_user_meta( $user_id, 'RfcRepresentanteLegal', $_POST['RfcRepresentanteLegal'] ?? '' );
			update_user_meta( $user_id, 'RfcProveedor', $_POST['RfcProveedor'] ?? '' );
		}
	}
}