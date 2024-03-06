<?php
//2. Escribe un script PHP que genere un número aleatorio entre 1 y 10, simulando una nota numérica y muestre un mensaje indicando la calificación obtenida teniendo en cuenta los siguientes rangos:

//    Insuficiente: [0, 5)
//    Suficiente: [5, 6)
//    Bien: [6, 7)
//    Notable: [7, 9)
//   Sobresaliente: [9, 10]
$numero=10;


# condicional para generar las notas
    if ($numero>=0 and $numero<=5)
    {
        echo "Insuficiente";
    } else if ($numero>5 and $numero<=6) 
        {
            echo "Suficiente";
        } else if ($numero>6 and $numero<=7)
            {
                echo "Bien";
            } else if ($numero>7 and $numero<=9)
                {
                    echo "Notable";
                } else if ($numero>9 and $numero<=10)
                    {
                        echo "Sobresaliente";
                    }

?>