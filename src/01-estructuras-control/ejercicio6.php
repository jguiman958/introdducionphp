<?php
// 6. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor aleatorio enre 1 y 6. Resuelva el ejercicio sin utilizar las estructuras de control if - else y switch.
    $lanzarDado=rand(1,6);
    echo "<center><img src='images/dice/$lanzarDado.PNG'></center>";
?>