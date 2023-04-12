<form class="form-container">

    <div class="date-data">
        <label for="FechaYHoraReporteMes">Fecha y Hora del Reporte del Mes</label>
        <input name="FechaYHoraReporteMes" id="FechaYHoraReporteMes" type="datetime-local">
    </div>

    <div class="general-data">
        <div>
            <label for="Caracter">Carácter</label>
            <input name="Caracter" id="Caracter" type="text">
        </div>

        <div>
            <label for="NumContratoOAsignacion">Número de contrato o asignación</label>
            <input name="NumContratoOAsignacion" id="NumContratoOAsignacion" type="text">
        </div>

        <div>
            <label for="ClaveInstalacion">Clave de Instalación</label>
            <input name="ClaveInstalacion" id="ClaveInstalacion" type="text">
        </div>

        <div>
            <label for="DescripcionInstalacion" id="lblDescripcionInstalacion">Descripción de la Instalación</label>
            <textarea name="DescripcionInstalacion" id="DescripcionInstalacion"></textarea>
        </div>
    </div>


    <div class="numbers-data">
        <div>
            <label for="NumeroPozos">Número de Pozos</label>
            <input name="NumeroPozos" id="NumeroPozos" type="number" value="0">
        </div>

        <div>
            <label for="NumeroTanques">Número de Tanques</label>
            <input name="NumeroTanques" id="NumeroTanques" type="number" value="0">
        </div>

        <div>
            <label for="NumeroDuctosEntradaSalida">Número de Ductos de Entrada/Salida</label>
            <input name="NumeroDuctosEntradaSalida" id="NumeroDuctosEntradaSalida" type="number" value="0">
        </div>

        <div>
            <label for="NumeroDuctosTransporteDistribucion">Número de Ductos de Transporte/Distribucion</label>
            <input name="NumeroDuctosTransporteDistribucion" id="NumeroDuctosTransporteDistribucion" type="number"
                   value="0">
        </div>

        <div>
            <label for="NumeroDispensarios">Número de Dispensarios</label>
            <input name="NumeroDispensarios" id="NumeroDispensarios" type="number" value="0">
        </div>
    </div>


    <div class="geo-data">
        <div>
            <label for="GeolocalizacionLatitud">Geolocalización Latitud</label>
            <input name="GeolocalizacionLatitud" id="GeolocalizacionLatitud" type="text">
        </div>

        <div>
            <label for="GeolocalizacionLongitud">Geolocalización Longitud</label>
            <input name="GeolocalizacionLongitud" id="GeolocalizacionLongitud" type="text">
        </div>
    </div>


    <?php include "partials/productos.php" ?>


    <div>
        <input type="submit" value="Enviar">
    </div>

</form>