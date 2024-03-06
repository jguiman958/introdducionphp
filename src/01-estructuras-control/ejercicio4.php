<?php
//5. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor aleatorio entre 1 y 6. Resuelva el ejercicio utilizando la estructura de control switch.
$numAleatorio=rand(1,6);
    switch ($numAleatorio) 
    {
        case 1:
            echo "<img src='introdducionphp/src/01-estructuras-control/images/dice/1.PNG'>";
            break;
        case 2:
            echo "<img src='introdducionphp/src/01-estructuras-control/images/dice/2.png'>";
            break;
        case 3:
            echo "<img src='introdducionphp/src/01-estructuras-control/images/dice/3.PNG'>";
            break;
        case 4:
            echo "<img src='introdducionphp/src/01-estructuras-control/images/dice/4.PNG'>";
            break;
        case 5:
            echo "<img src='introdducionphp/src/01-estructuras-control/images/dice/5.PNG'>";
            break;
        case 6:
            echo "<img src='introdducionphp/src/01-estructuras-control/images/dice/6..PNG'>";
            break;
?>