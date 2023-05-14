<div class="recepciones" name="Recepciones">

    <div class="recepciones-buttons">
        <div>Recepciones</div>
<!--    <div>
            <button class="add-reception">Agregar</button>
            <button class="remove-reception">Quitar</button>
        </div>
-->    </div>

    <div class="recepcion">
        <div class="recepciones-general">

            <div class="recepciones-info">
                <label>
                    <span>Total de Recepciones del Mes</span>
                    <input class="json-data" data-json="TotalRecepcionesMes" type="number" value="0">
                </label>

                <label>
                    <span>Total de Documentos del Mes</span>
                    <input class="json-data" data-json="TotalDocumentosMes" type="number" value="0">
                </label>

                <label>
                    <span>Importe Total de Recepciones Mensual</span>
                    <input class="json-data" data-json="ImporteTotalRecepcionesMensual" type="number" value="0">
                </label>
            </div>


            <div class="sum-recepciones" name="SumaVolumenRecepcionMes">
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