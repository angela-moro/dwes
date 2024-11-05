<?php
session_start();

$coches = array(
    array(
        "id" => 1,
        "modelo" => "Lancia Stratos",
        "disponible" => true,
        "fecha_inicio" => null,  // Fecha de inicio en formato Y-M-D
        "fecha_fin" => null      // Fecha de fin en formato Y-M-D
    ),
    array(
        "id" => 2,
        "modelo" => "Audi Quattro",
        "disponible" => true,
        "fecha_inicio" => null,
        "fecha_fin" => null
    ),
    array(
        "id" => 3,
        "modelo" => "Ford Escort RS1800",
        "disponible" => false,
        "fecha_inicio" => "2024-10-25",
        "fecha_fin" => "2024-11-02"
    ),
    array(
        "id" => 4,
        "modelo" => "Subaru Impreza 555",
        "disponible" => true,
        "fecha_inicio" => null,
        "fecha_fin" => null
    )
);

define('USUARIOS', array(
    array(
        "nombre" => "Iker",
        "apellido" => "Arana",
        "dni" => "12345678Z"
    ),
    array(
        "nombre" => "María",
        "apellido" => "Gómez",
        "dni" => "87654321X"
    ),
    array(
        "nombre" => "Carlos",
        "apellido" => "López",
        "dni" => "13579246P"
    ),
    array(
        "nombre" => "Laura",
        "apellido" => "Martínez",
        "dni" => "24681357N"
    )
));




function validarDNI($dni)
{
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    if (strlen($dni) !== 9)
        return false;

    $numero = substr($dni, 0, -1);
    $letra = strtoupper(substr($dni, -1));
    ctype_digit($numero) && $letra == $letras[$numero % 23];
    return true;
}


function usuarioExiste($nombre, $apellido, $dni)
{
    foreach (USUARIOS as $usuario) {
        $nom = ucfirst(strtolower(trim($_POST["nombre"])));
        $ape = ucfirst(strtolower(trim($_POST["apellido"])));

        if ($usuario["nombre"] === $nom && $usuario["apellido"] === $ape && $usuario["dni"] === $dni) {
            return true;
        }
    }
    return false;
}

function disponibilidad($modelo, $fechaInicio, $fechaFin, $coches)
{
    foreach ($coches as $coche) {
        if ($coche["modelo"] === $modelo) {

            // Comprobar si tiene fechas de ocupación y si se solapan
            if (!is_null($coche["fecha_inicio"]) && !is_null($coche["fecha_fin"])) {
                $fechaInicioCoche = strtotime($coche["fecha_inicio"]);
                $fechaFinCoche = strtotime($coche["fecha_fin"]);

                // Verificar si las fechas solicitadas no se solapan con las fechas ocupadas
                if (!($fechaFin < $fechaInicioCoche || $fechaInicio > $fechaFinCoche)) {
                    return false;
                }
            }
        }
    }
    return true;
}


$errores = []; //Almacenaje de los errores 
$aciertos = []; //Almacenaje datos correctos

//Creación del script de validación

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validar Nombre y Apellido
    if (empty($_POST["nombre"])) {
        $errores[] = "Por favor introduce un nombre";
    } else {
        $nombre = ucfirst(strtolower(trim($_POST["nombre"])));
        $_SESSION['nombre'] = $nombre;
        $aciertos[] = 'Nombre: ' . $nombre;
    }

    if (empty($_POST["apellido"])) {
        $errores[] = "Por favor introduce un apellido.";
    } else {
        $apellido = ucfirst(strtolower(trim($_POST["apellido"])));
        $_SESSION['apellido'] = $apellido;
        $aciertos[] = 'Apellido: '. $apellido;
    }

    // Validar DNI y existencia usuario
    $dni = strtoupper(trim($_POST["dni"]));
    if (empty($dni)) {
        $errores[] = "Por favor introduce un DNI.";
    } elseif (validarDNI($dni) != true) {
        $errores[] = "El DNI introducido no es válido.";
    } else {
        if (empty($errores)) {
            $_SESSION['dni'] = $dni;
            $aciertos[] = 'DNI: correcto';
            if (!usuarioExiste($nombre, $apellido, $dni)) {
                $errores[] = "El usuario indicado no existe en la base de datos.";
            }
        }
    }

    // Validar Fecha de Inicio
    $fechaInicio = strtotime($_POST["fecha_inicio"]);
    $fechaActual = strtotime(date("Y-m-d"));
    if ($fechaInicio <= $fechaActual) {
        $errores[] = "La fecha de inicio seleccionada debe ser posterior a la fecha actual.";
    } else {
        $aciertos[] = 'Fecha inicio: ' . $_POST["fecha_inicio"];
    }

    // Validar Duración
    $duracion = (int) $_POST["duracion"];
    if ($duracion < 1 || $duracion > 30) {
        $errores[] = "La duración del alquiler oscila entre 1 y 30 días.";
    } else {
        // Calcular fecha de fin
        $fechaFin = strtotime("+$duracion days", $fechaInicio);
        $aciertos[] = 'Duración: ' . $duracion . ' dias.';
    }

    // Validar Disponibilidad del Vehículo en las fechas solicitadas
    $modeloVehiculo = $_POST["modelo"];
    $_SESSION['modelo'] = $modeloVehiculo;
    $fechaInicio = strtotime($_POST["fecha_inicio"]);
    $duracion = (int) $_POST["duracion"];
    $fechaFin = strtotime("+$duracion days", $fechaInicio);

    // Encontrar el coche seleccionado en el array
    $cocheSeleccionado = null;
    foreach ($coches as $coche) {
        if ($coche["modelo"] == $modeloVehiculo) {
            $cocheSeleccionado = $coche;
            $aciertos[] = 'Modelo seleccionado: ' . $modeloVehiculo;
            break;
        }
    }

    // Verificar disponibilidad del vehículo
    if ($cocheSeleccionado) {
        // Verificar si el coche está marcado como disponible
        if (!$cocheSeleccionado["disponible"]) {
            $errores[] = "El vehículo seleccionado no está disponible.";
        } elseif (!disponibilidad($modeloVehiculo, $fechaInicio, $fechaFin, $coches)) {
            $errores[] = "El vehículo seleccionado no está disponible en las fechas solicitadas.";
        }
    } else {
        $errores[] = "El modelo de vehículo no es válido.";
    }


    // Almaceno los datos en la sesión    
    
    $_SESSION['fechaInicio'] = $fechaInicio;
    $_SESSION['duracion'] = $duracion;
    $_SESSION['errores'] = $errores;
    $_SESSION['aciertos'] = $aciertos;

    if (empty($errores)) {
        $_SESSION['estado'] = 'valido';
    } else {
        $_SESSION['estado'] = 'invalido';
    }

    // Redirigir a la página de resultados
    header("Location: resultado.php");
    exit();

}


