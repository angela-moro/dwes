<!DOCTYPE html>
<html lang='es'>
<?php 
    include 'resistor-bands.php';
?>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Tabla de Colores de Resistencias</title>
</head>
<body>
    <h1>Tabla de Colores de Resistencias</h1>
    <p>Estos son los valores correspondientes a las bandas de colores de las resistencias:</p>
    <?php generarListaColores() ?>
</body>
</html>