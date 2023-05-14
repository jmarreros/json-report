<section class="products-container">

    <div class="product-buttons">
        <div>Productos</div>
        <div>
            <button class="add-product">Agregar</button>
            <button class="remove-product">Quitar</button>
        </div>
    </div>

    <div class="product-container" data-name="Producto">
        <div class="product-header">
            <div> ➜ <span class="product-code"></span></div>
            <div class="product-toggle">
                <a class="show-product" href="#">🔽</a>
                <a class="hide-product" href="#">🔼</a>
            </div>
        </div>

        <div class="product-data">

            <div class="product-general">

                <div class="product-clave">
                    <label>
                        <span>Clave del Producto</span>
                        <input class="json-data" data-json="ClaveProducto" type="text">
                    </label>

                    <label>
                        <span>Clave de Sub Producto</span>
                        <input class="json-data" data-json="ClaveSubProducto" type="text">
                    </label>
                </div>

                <div class="condensados-container">

                    <div class="no-condensados">
                        <label>
                            <span>Densidad del Producto</span>
                            <input class="json-data" data-json="DensidadDePetroleo" type="text">
                        </label>
                        <label>
                            <span>Composición de Azufre en el Petroleo (%)</span>
                            <input class="json-data" data-json="ComposDeAzufreEnPetroleo" type="text">
                        </label>
                    </div>

					<?php include "condensados.php" ?>

                </div>

            </div>

            <div class="report-month" data-name="ReporteDeVolumenMensual">
				<?php include 'recepciones.php' ?>
				<?php include 'entregas.php' ?>
            </div>

        </div>

    </div>

</section>


