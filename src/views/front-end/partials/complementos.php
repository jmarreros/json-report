<div class="complementos">

	<div class="complementos-buttons">
		<div>Complementos</div>
		<div>
			<button class="add-complemento">Agregar</button>
			<button class="remove-complemento">Quitar</button>
		</div>
	</div>

	<div class="complemento">

		<div class="info-complemento">
			<label>
				<span>Tipo de Complemento</span>
				<input class="json-data" data-json="TipoComplemento" type="text">
			</label>

			<label>
				<span>Aclaración</span>
				<input class="json-data" data-json="Aclaracion" type="text">
			</label>
		</div>


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
					<input class="json-data" data-json="RfcDictamen" type="text">
				</label>

				<label>
					<span>Número de Folio del Dictamen</span>
					<input class="json-data" data-json="NumeroFolioDictamen" type="text">
				</label>

				<label>
					<span>Fecha de Emisión del Dictamen</span>
					<input class="json-data" data-json="FechaEmisionDictamen" type="date">
				</label>

				<label class="resultado-dictamen">
					<span>Resultado del Dictamen</span>
					<textarea class="json-data" data-json="ResultadoDictamen"></textarea>
				</label>
			</div>

			<div class="nacional">

				<div class="nacional-info">
					<label>
						<span>RFC del Cliente</span>
						<input class="json-data" data-json="RfcCliente" type="text">
					</label>

					<label>
						<span>Nombre del Cliente</span>
						<input class="json-data" data-json="NombreCliente" type="text">
					</label>
				</div>

				<?php include "cfdis.php" ?>

			</div>


		</div>


	</div>

</div>