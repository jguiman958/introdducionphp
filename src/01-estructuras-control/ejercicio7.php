<?php
// 7. Escribe un script PHP que realice la simulación de lanzar dos dados y muestre una imagen con los valores obtenidos en cada uno de los dados.
$numAleatorio=rand(1,6);
    switch ($numAleatorio) 
    {
        case 1:
            echo "<center><img src='images/dice/1.PNG'></center>";
            break;
        case 2:
            echo "<center><img src='images/dice/2.PNG'></center>";
            break;
        case 3:
            echo "<center><img src='images/dice/3.PNG'></center>";
            break;
        case 4:
            echo "<center><img src='images/dice/4.PNG'></center>";
            break;
        case 5:
            echo "<center><img src='images/dice/5.PNG'></center>";
            break;
        case 6:
            echo "<center><img src='images/dice/6.PNG'></center>";
            break;
    }
    $lanzarDado=rand(1,6);
    echo "<footer><img src='images/dice2/$lanzarDado.PNG'></footer>";

?>
