<?php
echo "4. Escribe una función llamada calcular_maximo que reciba un array como parámetro de entrada y que devuelva la media de todos los valores que contiene.";
echo "<br>";
function calcular_maximo($rangoArray)
{
   $numeros = array(); 
   for ($i;$i<=$rangoArray;$i++)
   {
        echo $numeros[] = $i;
   }
   $maximo = max($numeros);
   return $maximo;
}
# Metemos la salida de una función en una variable, y la mostramos por pantalla.
$r = calcular_maximo(20);
echo "<br>";
echo "Salida de la función.";
print_r($r);

?>