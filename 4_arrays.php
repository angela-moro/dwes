<?php

// Arrays indexados

$sem = array('L', 'M', 'X');
$semana = ['L', 'M', 'X'];
$semana[3] = 'j';

echo $sem[1] . "\n";
echo $semana [2] . "\n";


// Arrays indexados

$datos = array(
    'nombre'=> 'Eugenia',
    'edad'=> 57
);

echo $datos['edad'] . "\n";
$datos['estado']='Senil';
print_r($datos) ;


// Arrays multidimensionales
$amigos = array(
    array('Pepe', 32),
    array ('Marisa', 60)
);
echo $amigos[0][0]; //Pepe


//Funciones útiles
echo count($amigos);
$list= ['t', 'z', 'a'];
sort($list);
print_r($list);


//Recorrer un array
foreach($amigos as $amigo){
    echo "Nombre del amigo: " . $amigo[0] . "\n";
}