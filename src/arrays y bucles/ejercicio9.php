<?php
echo "<h1>1. Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:</h1>";
echo "<ul>";
echo "<li>Mostrar el listado ordenado de mayor a menor.</li>";
echo "<li>Mostrar el listado ordenado de menor a mayor.<\li>";
echo "</ul>";

# Inicializamos el array
$asociativo = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");


echo "De forma ascendente ordenado por valor.";
echo "<br>";
echo "<br>";
asort($asociativo);

foreach ($asociativo as $valor => $valor1)
{
    echo "Clave: = $valor1 ";
}
echo "<br>";
echo "<br>";
echo "De forma ascendente ordenado por clave.";
echo "<br>";
echo "<br>";
ksort($asociativo);
foreach ($asociativo as $clave => $clave1)
{
    echo "Clave: = $clave1 ";
}
echo "<br>";
echo "<br>";
echo "De forma descendente ordenado por valor.";
arsort($asociativo);
echo "<br>";
echo "<br>";
foreach ($asociativo as $valor1 => $valor2)
{
    echo "Clave: = $valor2 ";
}

echo "<br>";
echo "<br>";
echo "De forma descendente ordenado por clave.";

krsort($asociativo);
echo "<br>";
echo "<br>";
foreach ($asociativo as $key2 => $clave2)
{
    echo "Clave: = $clave2 ";
}


?>