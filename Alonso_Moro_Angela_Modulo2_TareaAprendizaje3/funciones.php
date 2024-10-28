<?php
include 'Alonso_Moro_Angela_Modulo2_TareaAprendizaje3\inventario.php';

function totInv(){
    global $productos;
    $suma = 0;
    foreach($productos as $producto){
        $suma += $producto['cantidad'];
    }
    return $suma;
}


function buscar($prod, $productos){
    foreach($productos as $producto){
        if($producto['nombre'] == $prod){
            return $producto;
        }
    }
    return "El producto buscado no existe.";
    
}



