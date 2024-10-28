<?php
    setcookie("font-size", "50px", time() + 60*60*24*30); //1 mes de duracion 
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Cookies</title>
    </head>
    <body>
        <h1>Cookies</h1>
        <p>Tamaño de la fuente <?=$_COOKIE['font-size'];?></p>
        <a href="text.php">Ir al texto</a>
    </body>
</html>