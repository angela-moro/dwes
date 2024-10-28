<?php
    if(isset($_COOKIE['font-size'])){
        $tamanio = $_COOKIE['font-size'];
    }else{
        $tamanio = '30px';
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Texto</title>
        <style>
            p{
                font-size: <?php echo $tamanio?>;
            }
        </style>
    </head>
    <body>
        <h1>Texo</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
            deserunt mollit anim id est laborum.</p>
            <a href="index.php">Home</a>
    </body>
</html>