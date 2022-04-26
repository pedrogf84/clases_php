<!-- Enunciado:

Dado el siguiente array:
    $colores = ['blanco', 'verde, 'rojo'];

Escribir un script que muestre los colores de la2 siguientes maneras:

* Separados por comas

ej:   blanco, verde, rojo

* Como una lista html, estando los elementos ordenados alfabéticamente

ej:
<ul>
    <li>blanco</li>
    <li>rojo</li>
    <li>verde</li>
</ul>


Objetivo:

Familiarizarse con el tratamiento de arrays -->

<?php

$colores = array('blanco', 'verde', 'rojo');

for ($i = 0; $i < count($colores); $i++) {
    if($i == count($colores) -1 ){
        echo $colores[$i];
    } else {
        echo $colores[$i].", ";
    }
}

echo "<hr />";


sort($colores);

echo "<ul>";

foreach ($colores as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";

?>