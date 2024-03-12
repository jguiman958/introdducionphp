<?php
echo "<h1>1. Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:</h1>";
echo "<ul>";
echo "<li>Mostrar el listado ordenado de mayor a menor.</li>";
echo "<li>Mostrar el listado ordenado de menor a mayor.<\li>";
echo "</ul>";

# Inicializamos el array
$numerosRango = array();

# Bucle para recorrer el array.
for ($i=1;$i<=10;$i++)
{
    echo $numerosRango[$i] = rand(1,30);    
}
?>