<div class="product-container" data-name="Producto">
	<div class="product-header">
		<div><span class="product-code"></span></div>
		<div class="product-toggle">
			<a class="show-product" href="#">🔽</a>
			<a class="hide-product" href="#">🔼</a>
		</div>
	</div>

	<div class="product-data">

		<div class="product-general">
			<div>
				<label>
					<span>Clave del Producto</span>
					<input name="ClaveProducto" type="text">
				</label>
			</div>

			<div>
				<label>
					<span>Clave de Sub Producto</span>
					<input name="ClaveSubProducto" type="text">
				</label>
			</div>

			<div>
				<label>
					<span>Densidad del Producto</span>
					<input name="DensidadDePetroleo" type="text">
				</label>
			</div>

			<div>
				<label>
					<span>Composición de Azufre en el Petroleo (%)</span>
					<input name="ComposDeAzufreEnPetroleo" type="text">
				</label>
			</div>
		</div>

        <div class="report-month" data-name="ReporteDeVolumenMensual">

            <div class="recepciones" data-name="Recepciones">

                <div class="recepciones-buttons">
                    <div>Recepciones</div>
                    <div>
                        <button id="add-reception">Agregar</button>
                        <button id="remove-reception">Quitar</button>
                    </div>
                </div>

                <div class="recepcion">
                    <div class="recepciones-general">
                        <label>
                            <span>Total de Recepciones del Mes</span>
                            <input name="TotalRecepcionesMes" type="number" value="0">
                        </label>

                        <label>
                            <span>Total de Documentos del Mes</span>
                            <input name="TotalDocumentosMes" type="number" value="0">
                        </label>

                        <label>
                            <span>Importe Total de Recepciones Mensual</span>
                            <input name="ImporteTotalRecepcionesMensual" type="number" value="0">
                        </label>

                        <div class="sum-recepciones" data-name="SumaVolumenRecepcionMes">
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
                    </div>

                    <div class="recepciones-complementos">

                        <div class="complementos-buttons">
                            <div>Complementos</div>
                            <div>
                                <button id="add-complemento">Agregar</button>
                                <button id="remove-complemento">Quitar</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>




        </div>

	</div>

</div>