<?php
echo "<h3> Escribe una función llamada inicializar_array que reciba tres parámetros llamados numero_de_elementos, min y max, y que devuelva un array de números enteros comprendidos entre los valores min y max. El número de elementos que contiene el array será el especificado en el parámetro de entrada numero_de_elementos</h3>";

    function inicializar_array($numero_elementos, $min, $max)
    {
       $numeros = array(); 
       for ($i=1;$i<=$numero_elementos;$i++)
       {
            $numeros[$i] = rand($min, $max); 
       }
       return $numeros;
    }
    # Metemos la salida de una función en una variable, y la mostramos por pantalla.
    $r = inicializar_array(10, 1, 40);
    echo "Salida de la función.";
    print_r($r);
?>