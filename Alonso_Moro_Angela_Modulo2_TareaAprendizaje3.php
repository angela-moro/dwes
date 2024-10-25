<?php
// Ejercicio 1: Lista de Tareas (Principiante)

// $tareas = array (
//     'T1' =>'Fregar', 
//     'T2' =>'Lavadora', 
//     'T3' =>'Tender', 
//     'T4' =>'Aspirar', 
//     'T5' =>'Trapear',
//     'T6' =>'Estudiar'
//     );

// echo "Introduce una tarea o finaliza el programa escribiendo salir: ";
// $tar = fgets(STDIN);
// $tar = trim($tar);

// while ($tar != 'salir'){
//     $elem = count($tareas); 
//     $tareas["T" . ($elem + 1)] = $tar;
//     echo "Introduce otra tarea o finaliza el programa escribiendo salir: ";
//     $tar = fgets(STDIN);
//     $tar = trim($tar);
// }

// foreach($tareas as $tarea){
//     echo "Tarea: " . $tarea . "\n";
// }

// echo "El último elemento eliminado es: " . array_pop($tareas);


// Ejercicio 2: Información de Contactos (Intermedio)

class Contacto {
    public $nombre;
    public $telefono;
    public $email;

    public function __construct($nombre, $telefono, $email) {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->email = $email;
    }
}

$contactos = array(
    "homer" => new Contacto("Homer", "0123456789", "amanterechoncho@gmail.com"),
    "marge" => new Contacto("Marge", "9876543210", "marge@gmail.com"),
    "lisa" => new Contacto("Lisa", "8967452301", "lisa@gmail.com")
);

function buscar($nom, $contactos){
    if(isset($contactos[$nom])){
        return json_encode($contactos[$nom]);
    } else{
        Return "El contacto no existe";
    }
}

echo "Busca un contacto: ";
$nom = fgets(STDIN);
$nom = trim($nom);
echo buscar($nom, $contactos);


// Ejercicio 3: Gestión de Inventario de Productos (Intermedio)
