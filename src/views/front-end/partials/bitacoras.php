<div class="bitacoras" name="Bitacoras">

    <div class="bitacoras-buttons">
        <div>Bitácora mensual</div>
        <div>
            <button class="add-bitacora">Agregar</button>
            <button class="remove-bitacora">Quitar</button>
        </div>
    </div>

    <div class="bitacora">
            <div class="bitacora-general">
                <label>
                    <span>Número de registro</span>
                    <input class="json-data" data-json="NumeroRegistro" type="number" value="0">
                </label>

                <label>
                    <span>Fecha y hora del evento</span>
                    <input class="json-data" data-json="FechaYHoraEvento" type="datetime-local" value="">
                </label>

                <label>
                    <span>Usuario responsable</span>
                    <input class="json-data" data-json="UsuarioResponsable" type="text" value="">
                </label>

                <label>
                    <span>Tipo evento</span>
                    <input class="json-data" data-json="TipoEvento" type="number" value="">
                </label>

                <label>
                    <span>Descripcion del evento</span>
                    <textarea class="json-data" data-json="DescripcionEvento"></textarea>
                </label>

                <label>
                    <span>Identificación componente alarma</span>
                    <input class="json-data" data-json="IdentificacionComponenteAlarma" type="text" value="No aplica">
                </label>
            </div>
    </div>

</div>