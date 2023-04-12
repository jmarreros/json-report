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

        <div class="complementos">

            <div class="complementos-buttons">
                <div>Complementos</div>
                <div>
                    <button class="add-complemento">Agregar</button>
                    <button class="remove-complemento">Quitar</button>
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
                            <input name="RfcDictamen" type="text">
                        </label>

                        <label>
                            <span>Número de Folio del Dictamen</span>
                            <input name="NumeroFolioDictamen" type="text">
                        </label>

                        <label>
                            <span>Fecha de Emisión del Dictamen</span>
                            <input name="FechaEmisionDictamen" type="date">
                        </label>

                        <label class="resultado-dictamen">
                            <span>Resultado del Dictamen</span>
                            <textarea name="ResultadoDictamen"></textarea>
                        </label>
                    </div>

                    <div class="nacional">
                        <label>
                            <span>RFC del Cliente</span>
                            <input name="RfcCliente" type="text">
                        </label>

                        <label>
                            <span>Nombre del Cliente</span>
                            <input name="NombreCliente" type="text">
                        </label>

                        <?php include "cfdis.php" ?>

                    </div>


                </div>


            </div>

        </div>
    </div>

</div>