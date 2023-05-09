<?php
	$user_id = get_current_user_id();
?>
<div class="json-general-info">
	<div class="row-info">
		<strong>Version</strong>
		<span class="json-data" data-json="Version"><?= get_option('dcms_json_options')['dcms_version']??'' ?></span>
	</div>
	<div class="row-info">
		<strong>RFC del Contribuyente</strong>
		<span class="json-data" data-json="RfcContribuyente"><?= get_user_meta($user_id, 'RfcContribuyente', true) ?></span>
	</div>
	<div class="row-info">
		<strong>RFC del RepresentanteLegal</strong>
		<span class="json-data" data-json="RfcRepresentanteLegal"><?= get_user_meta($user_id, 'RfcRepresentanteLegal', true) ?></span>
	</div>
	<div class="row-info">
		<strong>RFC del Proveedor (genérico)</strong>
		<span class="json-data" data-json="RfcProveedor"><?= get_user_meta($user_id, 'RfcProveedor', true) ?></span>
	</div>
</div>