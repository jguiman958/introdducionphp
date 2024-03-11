<?php
echo "<h1>Escribe un script que muestre los números del 1 al 10 en una tabla de una fila y 10 columnas. Utiliza un bucle while</h1>";


echo "<table border='1'>";
while ($i <= 10) 
{
    echo "<td>$i</td>";
    $i++;
}
echo "</table>";
?>