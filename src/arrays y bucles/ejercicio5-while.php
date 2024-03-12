<?php
echo "<h1>Escribe un script PHP que realice las siguientes acciones mediante while:</h1>";
echo "<ul>";
echo "<li>Calcular la media.</li>";
echo "<li>Calcular el valor máximo.</li>";
echo "<li>Calcular el valor mínimo.</li>";
echo "<li>Mostrar todos los valores calculados.</li>";
echo "<li>El array de temperaturas lo vamos a generar con números aleatorios. El array será de 10 elementos y los valores aletorios generados estarán entre 1 y 30.</li>";
echo "</ul>";

echo "<h3>Temperatura máxima</h3>" . "<br>";
echo "#--------------------------------#" . "<br>";

# Array con while
$listadoTemperaturas = array();
$i = 0;

# Bucle while
while ($i<10) 
{
    # Un problema que he solucionado aquí, es que ha diferencia del for
    # while no asigna los datos del array en la variable, se debe hacer un array_push
    # Para que si los reciba.
    echo $aleatorios = rand(1,30) . "\n";
    array_push($listadoTemperaturas, $aleatorios);
    $i++;
}
echo "<br>";
echo "#--------------------------------#" . "<br>";
    # Primero debemos sumar la cantidad total de numeros que hay en ese array,
    # He empleado la función array_sum para sumarlos todos.
    $suma = array_sum($listadoTemperaturas);
    #Seguidamente necesito el total de numeros que hay en el array, realizado con la función count.
    $total_numeros = count($listadoTemperaturas);
    $media = $suma/$total_numeros . "\n";
echo "Está es la media de las temperaturas : ". $media . "<br>";

# Calcular valor maximo.
$maximo = -1; # Esto indica, que dispone de un valor que cualquier numero en el array será mayor que este.
while ($i<10)
{
    echo $aleatorios = rand(1,30) . "\n";
    array_push($listadoTemperaturas, $aleatorios);
    if ($listadoTemperaturas[$i] > $maximo)
    {
        $maximo = $listadoTemperaturas;
    }
    $i++;
}

echo $maximo;

#$minimo = min($listadoTemperaturas);
#echo "Valor minimo: $minimo<br>";
?>