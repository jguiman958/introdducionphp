<?php
    //Definimos una lista de variables.
    $nombre = "Pepe";
    $nota = 9.5
    $edad = 30;
    $es_repetidor = false;

    echo $nombre;
    echo "br";
    echo $nota;
    echo "br";
    echo $edad;
    echo "br";
    echo "$es_repetidor";
print_r($nombre);

// Ejemplo de una constante numérica de tipo real
define("PI", 3.141592);

// Ejemplo de una constante de tipo string
define("CONSTANTE", "Hola mundo");



$nombre = "Pepe";
$edad = 30;
$nota = 7.5;

var_dump($nombre);
// string(4) "Pepe"

var_dump($edad);
// int(30)

var_dump($nota);
// float(7.5)


$lista = array("Pepe", "María", "Juan");

print_r($lista);

//Array
//(
//    [0] => Pepe
//    [1] => María
//    [2] => Juan
//)



?>