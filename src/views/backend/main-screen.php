<div class="wrap">
    <h1><?php _e( 'JSON Form Settings', 'json-report' ) ?></h1>
    <br>
    <form action="options.php" method="post">
		<?php
		settings_fields( 'dcms_json_options_bd' );
		do_settings_sections( 'dcms_json_general_fields' );
		submit_button();
		?>
    </form>