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
            <div><span class="product-code"></span></div>
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
                        <input name="ClaveProducto" type="text">
                    </label>

                    <label>
                        <span>Clave de Sub Producto</span>
                        <input name="ClaveSubProducto" type="text">
                    </label>
                </div>

                <div class="condensados-container">

                    <label>
                        <span>Gas natural o condensados</span>
                        <select class="sel-condensados">
                            <option value="no-condensados" selected>No</option>
                            <option value="condensados">Si</option>
                        </select>
                    </label>

                    <div class="no-condensados">
                        <label>
                            <span>Densidad del Producto</span>
                            <input name="DensidadDePetroleo" type="text">
                        </label>
                        <label>
                            <span>Composición de Azufre en el Petroleo (%)</span>
                            <input name="ComposDeAzufreEnPetroleo" type="text">
                        </label>
                    </div>

					<?php include "condensados.php" ?>

                </div>

            </div>

            <div class="report-month" data-name="ReporteDeVolumenMensual">
				<?php include 'recepciones.php' ?>
            </div>

        </div>

    </div>

</section>


