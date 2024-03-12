<?php
echo "<h1>Escribe un script PHP que realice las siguientes acciones mediante bucles for:</h1>";
echo "<ul>";
echo "<li>Calcular la media.</li>";
echo "<li>Calcular el valor máximo.</li>";
echo "<li>Calcular el valor mínimo.</li>";
echo "<li>Mostrar todos los valores calculados.</li>";
echo "<li>El array de temperaturas lo vamos a generar con números aleatorios. El array será de 10 elementos y los valores aletorios generados estarán entre 1 y 30.</li>";
echo "</ul>";
    # array  para la temperatura:
    $numerosTemperatura = array();
    

    echo "<h2>Temperatura media</h2>" . "<br>";
    # Bucle para calcular la media
    for ($i=1;$i<=10;$i++) 
    {
        echo $numerosTemperatura[$i] = rand(1,30) . "\n";
        # En varias lineas
        # Primero debemos sumar la cantidad total de numeros que hay en ese array,
        # He empleado la función array_sum para sumarlos todos.
        $suma = array_sum($numerosTemperatura);
        # Seguidamente necesito el total de numeros que hay en el array, realizado con la función count.
        $total_numeros = count($numerosTemperatura);
        # Finalmente realizo la media, para sacar la media se debe emplear la suma de todos los numeros, divido entre el total de todas los numeros.
        $media = $suma/$total_numeros . "\n";
    }

    # Mostrar por pantalla la media de las temperaturas.
    echo "<br>";
    echo "#--------------------------------#" . "<br>";
    echo "La media de las temperaturas es: " . $media . "<br>";
    echo "#--------------------------------#" . "<br>";

    echo "<h3>Temperatura máxima</h3>" . "<br>";
    echo "#--------------------------------#" . "<br>";
    # Calculo de la máxima temperatura.
    $numerosTemperaturaM = array(); 
    for ($j=1;$j<=10;$j++) 
    {
        echo $numerosTemperaturaM[$j] = rand(1,30);
        echo "<br>";
        
    }
    echo "#--------------------------------#" . "<br>";
    $temperaturaMaximaM = max($numerosTemperaturaM);
    echo "La temperatura máxima es " . $temperaturaMaximaM;    
# Sacamos el valor mínimo del mismo array antes realicé dos bucles, pèro buscando un poco por internet me di cuenta de que no es necesario
# con la media hacer un unico bucle tanto para la media, como el máximo y el minimo me daba problemas....
    echo "<br>";
    echo "<br>";
    echo "#--------------------------------#" . "<br>";
    echo "<h3>Temperatura mínima</h3>" . "<br>";
    $minimo = min($numerosTemperaturaM);
    # Mostramos la salida por pantalla.
    echo "La temperatura minima es: " . $minimo;
?>