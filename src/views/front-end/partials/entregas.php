<div class="entregas" data-name="Entregas">

	<div class="entregas-buttons">
		<div>Entregas</div>
		<div>
			<button class="add-entrega">Agregar</button>
			<button class="remove-entrega">Quitar</button>
		</div>
	</div>

	<div class="entrega">
		<div class="entregas-general">
			<label>
				<span>Total de Entregas del Mes</span>
				<input name="TotalEntregasMes" type="number" value="0">
			</label>

			<label>
				<span>Total de Documentos del Mes</span>
				<input name="TotalDocumentosMes" type="number" value="0">
			</label>

			<label>
				<span>Importe Total de Entregas del Mes</span>
				<input name="ImporteTotalEntregasMes" type="number" value="0">
			</label>

			<div class="sum-entregas" data-name="SumaVolumenEntregadoMes">
				<div class="item-description">Suma de Volumen de Recepciones del Mes</div>
				<label>
					<span>Valor Numérico</span>
					<input name="ValorNumerico" type="number" value="0">
				</label>

				<label>
					<span>Unidad de Medida</span>
					<input name="UnidadDeMedida" type="text" value="">
				</label>
			</div>

            <div class="poder-calorifico" data-name="PoderCalorifico">
                <div class="item-description">➜ Poder Calorífico</div>
                <label>
                    <span>Valor Numérico</span>
                    <input name="ValorNumerico" type="number" value="0">
                </label>

                <label>
                    <span>Unidad de Medida</span>
                    <input name="UnidadDeMedida" type="text" value="">
                </label>
            </div>

		</div>

		<?php include "complementos.php" ?>

	</div>

</div>