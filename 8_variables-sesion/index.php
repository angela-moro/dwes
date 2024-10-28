<?php
    session_start();
    // $_SESSION['nombre'] = 'Angela';

    $_SESSION['miSesion'] = array();
    $_SESSION['miSesion']['nombre'] = 'Angela';
    $_SESSION['miSesion']['edad'] = '30';
    $_SESSION['miSesion']['ciudad'] = 'Va';

    echo '<pre>'; 
    echo var_dump($_SESSION['miSesion']);
    echo '</pre>';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Sesiones</title>
    </head>
    <body>
        <h1>Home</h1>
        <p></p>
        <a href="abrir.php"> Ir a la página</a>
    </body>
</html>