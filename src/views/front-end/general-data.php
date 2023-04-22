<?php
	$user_id = get_current_user_id();
?>
<div class="json-general-info">
	<div class="row-info">
		<strong>Version</strong>
		<span><?= get_option('dcms_json_options')['dcms_version']??'' ?></span>
	</div>
	<div class="row-info">
		<strong>RFC del Contribuyente</strong>
		<span><?= get_user_meta($user_id, 'RfcContribuyente', true) ?></span>
	</div>
	<div class="row-info">
		<strong>RFC del RepresentanteLegal</strong>
		<span><?= get_user_meta($user_id, 'RfcRepresentanteLegal', true) ?></span>
	</div>
	<div class="row-info">
		<strong>RFC del Proveedor (genérico)</strong>
		<span><?= get_user_meta($user_id, 'RfcProveedor', true) ?></span>
	</div>
</div>