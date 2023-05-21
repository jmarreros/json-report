<form class="form-container">

    <div class="date-data">
        <label for="FechaYHoraReporteMes">Fecha y Hora del Reporte del Mes</label>
        <input class="json-data" data-json="FechaYHoraReporteMes" id="FechaYHoraReporteMes" type="datetime-local">
    </div>

    <div class="general-data">
        <div>
            <label for="Caracter">Carácter</label>
            <input class="json-data" data-json="Caracter" id="Caracter" type="text">
        </div>

        <div>
            <label for="NumContratoOAsignacion">Número de contrato o asignación</label>
            <input class="json-data" data-json="NumContratoOAsignacion" id="NumContratoOAsignacion" type="text">
        </div>

        <div>
            <label for="ClaveInstalacion">Clave de Instalación</label>
            <input class="json-data" data-json="ClaveInstalacion" id="ClaveInstalacion" type="text">
        </div>

        <div>
            <label for="DescripcionInstalacion" id="lblDescripcionInstalacion">Descripción de la Instalación</label>
            <textarea class="json-data" data-json="DescripcionInstalacion" id="DescripcionInstalacion"></textarea>
        </div>
    </div>


    <div class="numbers-data">
        <div>
            <label for="NumeroPozos">Número de Pozos</label>
            <input class="json-data" data-json="NumeroPozos" id="NumeroPozos" type="number" value="0">
        </div>

        <div>
            <label for="NumeroTanques">Número de Tanques</label>
            <input class="json-data" data-json="NumeroTanques" id="NumeroTanques" type="number" value="0">
        </div>

        <div>
            <label for="NumeroDuctosEntradaSalida">Número de Ductos de Entrada/Salida</label>
            <input class="json-data" data-json="NumeroDuctosEntradaSalida" id="NumeroDuctosEntradaSalida" type="number"
                   value="0">
        </div>

        <div>
            <label for="NumeroDuctosTransporteDistribucion">Número de Ductos de Transporte/Distribucion</label>
            <input class="json-data" data-json="NumeroDuctosTransporteDistribucion"
                   id="NumeroDuctosTransporteDistribucion" type="number"
                   value="0">
        </div>

        <div>
            <label for="NumeroDispensarios">Número de Dispensarios</label>
            <input class="json-data" data-json="NumeroDispensarios" id="NumeroDispensarios" type="number" value="0">
        </div>
    </div>


    <div class="geo-data">
        <div>
            <label for="GeolocalizacionLatitud">Geolocalización Latitud</label>
            <input class="json-data" data-json="GeolocalizacionLatitud" id="GeolocalizacionLatitud" type="text">
        </div>

        <div>
            <label for="GeolocalizacionLongitud">Geolocalización Longitud</label>
            <input class="json-data" data-json="GeolocalizacionLongitud" id="GeolocalizacionLongitud" type="text">
        </div>
    </div>

	<?php include "partials/productos.php" ?>

    <div class="footer">
        <input id="btn-save-json" type="button" value="Generar archivo">
    </div>

</form>

<div class="code-container">
    <h4>Impresión temporal del código JSON</h4>
    <pre id="print-json">
    </pre>
</div>
