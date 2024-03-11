<?php
    echo "<table border='1'>"; # Algo que no tenia en cuenta aquí es que si creo la tabla dentro del bucle for 
                               # Creará 10 tablas como declaradas en el bucle for...
                               # por eso no me salia bien...
        echo "<tr>"; # En este caso, "creamos table row" que va a constar la fila de la tabla añadiendo y cerrando
                     # fuera del bucle y dentro para esa fila de la tabla.        
            for ($i = 1; $i <= 10; $i++) {
                echo "<td> $i </td>"; # Se crean las columnas en proporción al numero del bucle, designado en la condición.
        
            }   
        echo "</tr>";
    echo "</table>";
?>