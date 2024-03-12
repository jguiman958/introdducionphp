<?php
echo "<h1>Escribe un script PHP que realice las siguientes acciones:</h1>";
echo "<ul>";
echo "<li>Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.</li>";
echo "<li>Una vez que ha inicializado el array, imprima todos los valores que almacena.</li>";
echo "<li>Calcular el valor medio de los valores del array.</li>";
echo "<li>Mostrar el valor medio que ha calculado.</li>";
echo "</ul>";

# Inicializamos el array
$numerosRango = array();

# Bucle para recorrer el array.
for ($i=1;$i<=10;$i++)
{
#   Primero añadimos los numeros aleatorios al array son del 1 al 30
    echo $numerosRango[$i] = rand(1,30) . "\n";  

# En varias lineas
    # Primero debemos sumar la cantidad total de numeros que hay en ese array,
    # He empleado la función array_sum para sumarlos todos.
    $suma = array_sum($numerosRango);
    # Seguidamente necesito el total de numeros que hay en el array, realizado con la función count.
    $total_numeros = count($numerosRango);
    # Finalmente realizo la media, para sacar la media se debe emplear la suma de todos los numeros, divido entre el total de todas los numeros.
    $media = $suma/$total_numeros . "\n";

#    Calcular la media.En una sola linea
#    $media = array_sum($numerosRango)/count($numerosRango);
}
echo "<br>";
echo "#----------------------------------#";
echo "<br>";
echo "La media es: " . $media;
?>
