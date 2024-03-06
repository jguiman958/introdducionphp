<?php
//3. Escribe un script PHP que genere un número aleatorio entre 1 y 7, y muestre un mensaje indicando a qué día de la semana corresponde. Por ejemplo, 1 sería lunes, 2 martes, etc.
$numAleatorio=rand(0,7);
    switch ($numAleatorio) 
    {
        case 1:
            echo "Es lunes";
            break;
        case 2:
            echo "Es Martes";
            break;
        case 3:
            echo "Es Miercores";
            break;
        case 4:
            echo "Es Jueves";
            break;
        case 5:
            echo "Es Viernes";
            break;
        case 6:
            echo "Es sabado";
            break;
        case 7:
            echo "Es domingo";
            break;
    }
?>