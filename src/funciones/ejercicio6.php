<?php
echo "6. Escribe una función llamada calcular_minimo que reciba un array como parámetro de entrada y que devuelva la media de todos los valores que contiene.";
echo "<br>";
function calcular_minimo($rangoArray)
{
   $numeros = array(); 
   for ($i;$i<=$rangoArray;$i++)
   {
        echo $numeros[] = $i;
   }
   $minimo = min($numeros);
   return $minimo;
}
# Metemos la salida de una función en una variable, y la mostramos por pantalla.
$r = calcular_minimo(20);
echo "<br>";
echo "Salida de la función.";
print_r($r);

?>