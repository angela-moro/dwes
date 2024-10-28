<?php
    session_start();
    session_destroy();
    $index = 'http://127.0.0.1:81/8_variables-sesion/index.php';
    header('location: ' . $index); //Redirecciona a la pagina de index
?>
