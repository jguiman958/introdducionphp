<?php
echo "4. Escribe una función llamada calcular_media que reciba un array como parámetro de entrada y que devuelva la media de todos los valores que contiene.";
echo "<br>";
function calcular_media($rangoArray)
{
   $numeros = array(); 
   for ($i;$i<=$rangoArray;$i++)
   {
        $numeros[] = $i;
        # En varias lineas
        # Primero debemos sumar la cantidad total de numeros que hay en ese array,
        # He empleado la función array_sum para sumarlos todos.
        $suma = array_sum($numeros);
        # Seguidamente necesito el total de numeros que hay en el array, realizado con la función count.
        $total_numeros = count($numeros);
        # Finalmente realizo la media, para sacar la media se debe emplear la suma de todos los numeros, divido entre el total de todas los numeros.
        $media = $suma/$total_numeros . "\n";

#    Calcular la media.En una sola linea
#        $media = array_sum($numerosRango)/count($numerosRango);
   }
   return $media;
}
# Metemos la salida de una función en una variable, y la mostramos por pantalla.
$r = calcular_media(3);
echo "<br>";
echo "Salida de la función.";
print_r($r);

?>