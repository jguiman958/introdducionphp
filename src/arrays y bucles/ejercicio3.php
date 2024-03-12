<?php
echo "<h1>Escribe un script PHP que realice las siguientes acciones:</h1>";
echo "<ul>";
echo "<li>Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.</li>";
echo "<li>Una vez que ha inicializado el array, imprima todos los valores que almacena.</li>";
echo "<li>Buscar el valor máximo de los valores del array.</li>";
echo "<li>Muestre el valor máximo que ha encontrado.</li>";
echo "</ul>";

# Inicializamos el array
$numerosRango = array();

# Bucle para recorrer el array.
for ($i=1;$i<=10;$i++)
{
#   Primero añadimos los numeros aleatorios al array son del 1 al 30
    echo $numerosRango[$i] = rand(1,30);  
    echo "<br>";
}  
echo "<br>";
echo "#-----------------------------#" . "\n" . "<br>";
# Sacamos el valor máximo del array
$maximo = max($numerosRango);
# Mostramos la salida por pantalla.
echo "El valor máximo del array es: " . $maximo;
?>