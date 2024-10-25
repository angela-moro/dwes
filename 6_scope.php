<?php

// 1. global - se accede desde cualquier parte salvo desde funciones

$n = 0;

// 2. local - trabaja dentro de una funcion, se declara y se destruye

function mostrar(){
    $m = "Holi \n";
    echo $m;
}
mostrar();

// 3. global keyword

$x = 5;
$y = 10;

function suma(){
    global $x, $y;
    $y = $x + $y;
}
// suma();
// echo $y;

function gl(){
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'] + 3;
}
gl();
echo $y . "\n";

// 4. static keyword

function test(){
    static $x = 0; //La variable no se destruye sino que permanece
    echo $x;
    $x++;
}
test();
echo "\n"; //0
test();
echo "\n"; //1
test();
echo "\n"; //2