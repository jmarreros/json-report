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

        <div class="complementos">

            <div class="complementos-buttons">
                <div>Complementos</div>
                <div>
                    <button id="add-complemento">Agregar</button>
                    <button id="remove-complemento">Quitar</button>
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

                <label>
                    <span>Tipo</span>
                    <select name="tipo-complemento">
                        <option value="Ninguno">Ninguno</option>
                        <option value="Dictamen">Dictamen</option>
                        <option value="Nacional">Nacional</option>
                    </select>
                </label>


            </div>

        </div>
    </div>

</div>