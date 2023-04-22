

<h3><?php _e('JSON Form Data'); ?></h3>

<table class="form-table">
	<tr>
		<th>
			<label for="RfcContribuyente">RFC del Contribuyente</label>
		</th>
		<td>
			<input type="text" name="RfcContribuyente" id="RfcContribuyente" class="regular-text"
                   value="<?= /** @var object $user */
                   esc_attr( get_user_meta( $user->ID, 'RfcContribuyente', true ) ) ?>" />
		</td>
	</tr>
    <tr>
        <th>
            <label for="RfcRepresentanteLegal">RFC del RepresentanteLegal</label>
        </th>
        <td>
            <input type="text" name="RfcRepresentanteLegal" id="RfcRepresentanteLegal" class="regular-text"
                   value="<?= /** @var object $user */
			       esc_attr( get_user_meta( $user->ID, 'RfcRepresentanteLegal', true ) ) ?>" />
        </td>
    </tr>
    <tr>
        <th>
            <label for="RfcProveedor">RFC del Proveedor (genérico)</label>
        </th>
        <td>
            <input type="text" name="RfcProveedor" id="RfcProveedor" class="regular-text"
                   value="<?= /** @var object $user */
			       esc_attr( get_user_meta( $user->ID, 'RfcProveedor', true ) ) ?>" />
        </td>
    </tr>
</table>