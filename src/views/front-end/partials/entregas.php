<div class="entregas" name="Entregas">

	<div class="entregas-buttons">
		<div>Entregas</div>
		<!--<div>
			<button class="add-entrega">Agregar</button>
			<button class="remove-entrega">Quitar</button>
		</div>-->
	</div>

	<div class="entrega">
		<div class="entregas-general">

			<div class="entregas-info">
				<label>
					<span>Total de Entregas del Mes</span>
					<input class="json-data" data-json="TotalEntregasMes" type="number" value="0">
				</label>

				<label>
					<span>Total de Documentos del Mes</span>
					<input class="json-data" data-json="TotalDocumentosMes" type="number" value="0">
				</label>

				<label>
					<span>Importe Total de Entregas del Mes</span>
					<input class="json-data" data-json="ImporteTotalEntregasMes" type="number" value="0">
				</label>
			</div>

			<div class="sum-entregas" name="SumaVolumenEntregadoMes">
				<div class="item-description">➜ Suma de Volumen de Recepciones del Mes</div>
				<label>
					<span>Valor Numérico</span>
					<input class="json-data" data-json="ValorNumerico" type="number" value="0">
				</label>

				<label>
					<span>Unidad de Medida</span>
					<input class="json-data" data-json="UnidadDeMedida" type="text" value="">
				</label>
			</div>

            <div class="poder-calorifico" name="PoderCalorifico">
                <div class="item-description">➜ Poder Calorífico</div>
                <label>
                    <span>Valor Numérico</span>
                    <input class="json-data" data-json="ValorNumerico" type="number" value="0">
                </label>

                <label>
                    <span>Unidad de Medida</span>
                    <input class="json-data" data-json="UnidadDeMedida" type="text" value="">
                </label>
            </div>

		</div>

		<?php include "complementos.php" ?>

	</div>

</div>