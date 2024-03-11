<?php

echo "<h3>5. Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. Utiliza un bucle for</h3>";

$numerorand = rand(1,10);
echo "<table border=1>";
    for ($numerorand = 1; $numerorand <= 10; $numerorand++)

        {
            for ($i = 1; $i <=10; $i++)
            {
                echo "<tr>";
                    echo "<td>$numerorand</td>";
                    echo "<td>x</td>";
                    echo "<td>$i</td>";
                    echo "<td>($numerorand * $i)</td> <br>";
                echo "</tr>"; # Hecho pero pendiente
            }
        }
echo "</table>";

?>