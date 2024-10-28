<?php

$resistencia = array (
    0 => "Negro",
    1 => "Marrón",
    2 => "Rojo",
    3 => "Naranja",
    4 => "Amarillo",
    5 => "Verde",
    6 => "Azul",
    7 => "Morado",
    8 => "Gris",
    9 =>"Blanco"
);

function generarListaColores(){
    global $resistencia;
    echo "<ul>";
    echo "<table border='1'>";
    echo "<tr><th>Valor</th><th>Color</th></tr>";
    foreach($resistencia as $valor => $color){
        echo "<tr><td>" . $valor . "</td><td>" . $color . "</td></tr>";
    }
    echo "</table>";
    echo "</ul>";
}