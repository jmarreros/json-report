<div class="recepciones" data-name="Recepciones">

    <div class="recepciones-buttons">
        <div>Recepciones</div>
        <div>
            <button class="add-reception">Agregar</button>
            <button class="remove-reception">Quitar</button>
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

        <?php include "complementos.php" ?>

    </div>

</div>