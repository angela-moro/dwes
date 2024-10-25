<?php
echo "Kaixo Mundua \n";

$edad = 34;

echo "Mi edad es: " .$edad ." años \n";

//Constante

define('PI', 3.14);
echo PI. "\n";

//Funciones para variables
$var = isset($edad);

var_dump($edad); //Lanza info de la variable

$var2 = gettype($edad);

$var3 = empty($edad); //dice si la variable esta vacia

$var4 = is_bool($edad); //Dice si es booleana

echo "Fin";
?>