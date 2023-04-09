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
            <?php include 'recepciones.php' ?>
        </div>

	</div>

</div>