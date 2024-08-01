<?php
    session_start();

    $allowed_roles = ['Admin', 'Supervisor', 'CFV'];

    if (!isset($_SESSION['acceso_permitido']) || $_SESSION['acceso_permitido'] !== true || !in_array($_SESSION['rol'], $allowed_roles)) {
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Datah">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="theme.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div id="control-tower">

            <a id="brand-logo" href="/inicio.php"><img src="assets/media/logo.png"></a>

            <h1>Control Tower</h1>

            <div class="container">
                <img src="assets/media/lineas-control-tower.png">
                <div class="info-card">

                    <img src="assets/media/T-Bitacora-vigilancia.png">

                    <div>

                        <h5>Bitácora de<br> Vigilancia</h5>

                        <p>Registra entradas y salidas por medio de una App instalada en una Tablet con conexión WiFi y datos móviles para identificar y analizar las unidades propias y externas que ingresan a la unidad de negocio.</p>

                    </div>

                </div><div class="info-card">

                    <img src="assets/media/T-control-contenedores.png">

                    <div>

                        <h5>Control de<br> Contenedores</h5>

                        <p>Controla y registra con una App la entrada, salida, ubicación, datos del cliente y tiempo de resguardo de los contenedores en los diferentes patios para su análisis y seguimiento.</p>

                    </div>

                </div><div class="info-card">

                    <img src="assets/media/T-lista-asistencia.png">

                    <div>

                        <h5>Lista de Asistencia<br> Operativa</h5>

                        <p>Identifica por medio de una App las diferentes incidencias de asistencia de los operadores para su medición y análisis por base y por operador.</p>

                    </div>

                </div><div class="info-card">

                    <img src="assets/media/T-unidades-patio.png">

                    <div>

                        <h5>Unidades<br> en Patio</h5>

                        <p>Clasifica por medio de una App en que proceso se encuentra cada unidad tractocamiones y remolques para su identificación y seguimiento en cada patio.</p>

                    </div>

                </div><div class="info-card">

                    <img src="assets/media/T-1-18-AsignacionFlota.png">

                    <div>

                        <h5>Atención<br> al Operador</h5>

                        <p>Registra las solicitudes en una App de los operadores hacia las diferentes áreas administrativas y operativas, para su análisis y mejora en la toma de decisiones.</p>

                    </div>

                </div><div class="info-card">

                    <img src="assets/media/T-pase-salida.png">

                    <div>

                        <h5>Pase de Salida</h5>

                        <p>Integra por medio de una App la autorización tanto del operador como de las unidades para salida a viaje. </p>

                    </div>

                </div><div class="info-card">

                    <img src="assets/media/T-inventario-remolques.png">

                    <div>

                        <h5>Inventario de<br> Remolques</h5>

                        <p>Con una App se realiza el registro de la ubicación de cada porta remolque y su estatus, para su seguimiento e histórico por base.</p>

                    </div>

                </div><div class="info-card">

                    <img src="assets/media/T-control-fisicoV.png">

                    <div>

                        <h5>Control Físico<br> Vehicular</h5>

                        <p>Registra por medio de una App en un check list las condiciones físicas de las unidades, remolques y portacontenedor para mostrar su estatus en cada patio.</p>

                    </div>

                </div><div class="info-card">

                    <img src="assets/media/T-Seguimiento-viaje.png">

                    <div>

                        <h5>Seguimiento<br> en Viaje</h5>

                        <p>Realiza el registro del status y tracking (seguimiento o rastreo) de las incidencias de la unidad durante el viaje para su evaluación y análisis del recorrido.</p>

                    </div>

                </div><div class="info-card">

                    <img src="assets/media/T-1-18-AsignacionFlota.png">

                    <div>

                        <h5>Asignación de<br> Flota</h5>

                        <p>Administra la flota combinando la asignación de operación, asignación cliente, asignación flota-coordinador y segmento de negocio, para obtener métricas específicas operativas.</p>

                    </div>

                </div>

            </div>

        </div>

    </body>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="theme.js" type="text/javascript"></script>
</html>



