<?php 
echo "Escribe una función que reciba un número como parámetro de entrada y que imprima su tabla de multiplicar.";
function multipiplicar($valor) 
{
    for ($i = 1; $i <= 10; $i++) 
    {
        $resultado = $i * $valor;
        echo "<table border='1'> <td>$i</td> <td>*</td> <td>$valor</td> <td>= $resultado</td></table>"; 
    }
    return $resultado;
}

// Llamar a la función multiplicar

echo "<br>";
$r = multipiplicar(7);


?>