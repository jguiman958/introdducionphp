<?php
echo "6. Escribe una función llamada calcular_minimo que reciba un array como parámetro de entrada y que devuelva la media de todos los valores que contiene.";
echo "<br>";
function calcular_minimo($lista)
{
    $minimo = $lista[0];
#   echo count($lista); 
echo $minimo; 
   for ($i=1;$i<count($lista);$i++)
   {
        if ($lista[$i]<$minimo)
        {
         $minimo = $lista[$i];
         echo $minimo;
        }
   }
   echo $minimo;
   return $minimo;
}

function inicializar_array($numero_elementos, $min, $max)
{
   $numeros = array(); 
   for ($i=0;$i<$numero_elementos;$i++)
   {
        $numeros[$i] = rand($min, $max); 
   }
   return $numeros;
}
# Metemos la salida de una función en una variable, y la mostramos por pantalla.
$lista = inicializar_array(10, 1, 20);
print_r($lista);
$r = calcular_minimo($lista);
echo "<br>";
echo "#-------------------------#";
echo "<br>";
echo "Salida de la función = " ;
print_r($r);
?>