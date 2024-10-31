<?php

include 'validacion.php';

// Inicializar las variables a vacías para evitar errores
$nombre = $_SESSION['nombre'] ?? '';
$apellido = $_SESSION['apellido'] ?? '';
$modeloVehiculo = $_SESSION['modelo'] ?? '';
$estado = $_SESSION['estado'];

if ($estado == 'valido') {

    echo "<h1>Reserva Confirmada</h1>";
    echo "<p>Gracias, $nombre $apellido. Su reserva para el vehículo $modeloVehiculo ha sido confirmada.</p>";
    echo "<img src='imagenes/$modeloVehiculo.jpg' alt='Imagen de $modeloVehiculo'>";

} else {

    if (isset($_SESSION['errores']) && !empty($_SESSION['errores'])) {
        echo "<h1>Datos de la Reserva</h1>";
        foreach ($_SESSION['aciertos'] as $acierto) {
            echo "<p style='color: green;'>$acierto</p>";
        }
        
        echo "<h2>Errores en la Reserva</h2>";
        foreach ($_SESSION['errores'] as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
        echo "<a href='index.php'>Reintentar Reserva</a>";

    }

}

