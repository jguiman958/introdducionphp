<?php
echo " Escribe una función llamada imprimir_array que reciba un array como parámetro de entrada y muestre su contenido en una tabla con dos columnas. La primera columna mostrará la posición del array y la segunda el valor que hay en esa posición.";
echo "<br>";
function calcular_minimo($rangoArray)
{
   $numeros = array(); 
   for ($i=1;$i<=$rangoArray;$i++)
   {
        echo $numeros[] = $i;
   }
   return $numeros;
}
# Metemos la salida de una función en una variable, y la mostramos por pantalla.
$r = calcular_minimo(20);
echo "<br>";
echo "#-------------------------#";
echo "Salida de la función = " ;
echo "<br>";
print_r($r);

?>