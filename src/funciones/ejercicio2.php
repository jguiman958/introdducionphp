<?php 
echo "Escribe una función que reciba un número como parámetro de entrada y que imprima su tabla de multiplicar.";
function multipiplicar($inicio,$fin) 
{
    for ($inicio; $inicio <= $fin; $inicio++) 
    {
        $resultado = $inicio * $fin;
        echo "<table border='1'> <td>$inicio</td> <td>*</td> <td>$fin</td> <td>= $resultado</td></table>"; 
    }
    return $resultado;
}

// Llamar a la función multiplicar

echo "<br>";
$r = multipiplicar(1,20);


?>