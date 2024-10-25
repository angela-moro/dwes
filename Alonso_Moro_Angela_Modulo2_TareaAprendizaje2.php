<?php
// Ejercicio 1: Calculadora de Variables y Operadores (Principiante)

echo "Introduce el primer número: ";
$num1 = fgets(STDIN);
$num1 = trim($num1);

echo "Introduce el segundo número: ";
$num2 = fgets(STDIN);
$num2 = trim($num2);

$sum = $num1 + $num2;
$res = $num1 - $num2;
$mul = $num1 * $num2;
$div = $num1 / $num2;

echo "La suma da como resultado " . $sum . " y es un dato de tipo ";
echo  var_dump($sum);
echo "El resultado de la resta es un dato de tipo " . gettype($res) . "\n";
echo "¿La multiplicación de los datos esta definida? ";
if((isset($mul)) == 1){
    echo "Si" . "\n";
} else{
    echo "No" . "\n";
} ;
print_r("La división da como resultado " . $div);

//----------------------------------------------------------

// Ejercicio 2: Comparación de Edad (Intermedio)

// echo "Introduce la edad 1: ";
// $ed1 = fgets(STDIN);
// $ed1 = trim($ed1);

// echo "Introduce la edad 2: ";
// $ed2 = fgets(STDIN);
// $ed2 = trim($ed2);

// echo "Introduce la edad 3: ";
// $ed3 = fgets(STDIN);
// $ed3 = trim($ed3);

// if ($ed1 > $ed2){
//     if($ed1 > $ed3){
//         echo "La persona más mayor es la 1º con " . $ed1 . " años.";
//     } else {
//         echo "La persona más mayor es la 3º con " . $ed3 . " años.";
//     }
// } else {
//     if($ed2 > $ed3){
//         echo "La persona más mayor es la 2º con " . $ed2 . " años.";
//     } else {
//         echo "La persona más mayor es la 3º con " . $ed3 . " años.";
//     }
// }

//------------------------------------------------------------------------

// Ejercicio 3: Juego de Adivinanza (Avanzado)

// $aleat = rand(1, 10);

// echo "Introduce un número: ";
// $num = fgets(STDIN);
// $num = trim($num);

// $cont = 1;

// do {
//     switch ($num){
//         case $num > $aleat:
//             echo "El número introducido es mayor.\n";
//             echo "Introduce un número: ";
//             $num = fgets(STDIN);
//             $num = trim($num);
//             $cont++;
//             break;
//         case $num < $aleat:
//             echo "El número introducido es menor.\n";
//             echo "Introduce un número: ";
//             $num = fgets(STDIN);
//             $num = trim($num);
//             $cont++;
//             break;
//         default:
//             break;
//     }  
        
// } while ($num != $aleat);

// if($cont == 1){
//     echo "¡Has necesitado " . $cont . " intento para acertar!";
// } else {
//     echo "¡Has necesitado " . $cont . " intentos para acertar!";
// }
