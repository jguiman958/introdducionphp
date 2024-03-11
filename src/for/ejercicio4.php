<?php
echo "<h3>4. Escribe un script PHP que muestre la tabla de multiplicar de un número aleatorio. Utiliza un bucle for</h3>";
echo "<br>";
echo "#--------------------------------#";
echo "<br>";
$numero_aleatorio = rand(1,10);

            for ($i = 1; $i <= 10; $i++) 
            {
                $resultado = $i * $numero_aleatorio;
                echo "<table border='1'> <td>$i</td> <td>*</td> <td>$numero_aleatorio</td> <td>= $resultado</td></table>"; 
            }

?>