<div class="complementos">

	<div class="complementos-buttons">
		<div>Complementos</div>
		<div>
			<button class="add-complemento">Agregar</button>
			<button class="remove-complemento">Quitar</button>
		</div>
	</div>

	<div class="complemento">
		<label>
			<span>Tipo de Complemento</span>
			<input name="TipoComplemento" type="text">
		</label>

		<label>
			<span>Aclaración</span>
			<input name="Aclaracion" type="text">
		</label>

		<div class="additional-container">

			<label>
				<span>Datos adicionales</span>
				<select class="sel-additional-complement">
					<option value="Ninguno" selected>Ninguno</option>
					<option value="Dictamen">Dictamen</option>
					<option value="Nacional">Nacional</option>
				</select>
			</label>

			<div class="dictamen" >
				<label>
					<span>RFC Dictamen</span>
					<input name="RfcDictamen" type="text">
				</label>

				<label>
					<span>Número de Folio del Dictamen</span>
					<input name="NumeroFolioDictamen" type="text">
				</label>

				<label>
					<span>Fecha de Emisión del Dictamen</span>
					<input name="FechaEmisionDictamen" type="date">
				</label>

				<label class="resultado-dictamen">
					<span>Resultado del Dictamen</span>
					<textarea name="ResultadoDictamen"></textarea>
				</label>
			</div>

			<div class="nacional">
				<label>
					<span>RFC del Cliente</span>
					<input name="RfcCliente" type="text">
				</label>

				<label>
					<span>Nombre del Cliente</span>
					<input name="NombreCliente" type="text">
				</label>

				<?php include "cfdis.php" ?>

			</div>


		</div>


	</div>

</div>