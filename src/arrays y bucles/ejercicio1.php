<?php
echo "<h1>1. Escribe un script PHP que realice las siguientes acciones:</h1>";
echo "<ul>";
echo "<li>Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.</li>";
echo "<li>Una vez que ha inicializado el array, imprimir todos los valores que almacena.</li>";
echo "</ul>";

# Inicializamos el array
$numerosRango = array();

# Bucle para recorrer el array.
for ($i=1;$i<=10;$i++)
{
    echo $numerosRango[$i] = rand(1,30);    
}
?>