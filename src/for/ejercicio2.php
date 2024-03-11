<?php
echo "<h3>2. Escribe un script PHP que muestre los números del 1 al 10  en una tabla de una columna y 10 filas. Utiliza un bucle for.</h3>";
echo "#-----------------------------------------#"; echo "<br>";
for ($i = 10; $i >= 1; $i--) {
    echo "<table border='1'><td>$i</td></table>";
}
?>
