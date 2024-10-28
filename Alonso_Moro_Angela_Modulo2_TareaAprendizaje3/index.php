<?php
require 'Alonso_Moro_Angela_Modulo2_TareaAprendizaje3\inventario.php';
include 'Alonso_Moro_Angela_Modulo2_TareaAprendizaje3\funciones.php';

do{
    echo "¿Qué deseas  hacer? \n";
    echo "i - Ver el total del inventario \n";
    echo "b - Buscar un producto \n";
    echo "s - Salir \n";
    $opt = fgets(STDIN);
    $opt = trim($opt);

    if ($opt == "i") {
        echo "El inventario total es de " . totInv() . " unidades. \n";
    } elseif ($opt == "b"){
        echo "Busca un producto: ";
        $prod = fgets(STDIN);
        $prod = trim($prod);

        $resultado = buscar($prod, $productos);

        if (is_array($resultado)) {
            print_r($resultado);
        } else {
            echo $resultado;
        }
    }
} while ($opt != 's');