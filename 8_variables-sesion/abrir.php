<?php
    session_start();

    if(isset($_SESSION ['nombre'])){
        $nombre = $_SESSION ['nombre'];
    } else{
        $nombre = 'Invitado';
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Página 2</title>
    </head>
    <body>
        <h1>Hola <?= $nombre ?></h1>
        <a href="cerrar.php">Cerrar sesión</a>
    </body>
</html>