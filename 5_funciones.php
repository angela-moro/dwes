<?php
declare(strict_types=1);
//1. Funciones
function saludo(){
    echo "Holi caracoli \n";
}

saludo();

//2. argumentos

function saludos($nombre){
    echo "Holi soy " . $nombre . " desde una función \n";
}

saludos('Angy');

//3. devolver

function saludes($nombre){
    return "Holi soy " . $nombre . " desde una función devuelta\n";
}

$res = saludes('Angy');
echo $res;

//4. tipado estricto
//colocar al inicio declare(strict_types=1) para que se tipen los datos

function suma(int $n1, int $n2){
    echo $n1 + $n2;
}

suma(3, 2); //Si meto el 2 como string da error