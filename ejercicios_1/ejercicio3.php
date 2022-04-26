<!-- Enunciado:

Crear un código que pasado un número nos diga cuántas veces es
necesario elevarlo para que pase de 10.000
Ej: si el número es 150, el resultado es 2 =>  150^2 > 10.000
Ej: si el número es 5, el resultado es 6 => 5^6 > 10.000

Objetivo:

Familiarizarse con los bucles y las operaciones aritméticas -->


<?php

function exponentNumber(int $base) : string {
    $result = 0;
    $exponent = 2;
    while ($result < 10000) {
        $result += pow($base, $exponent);
        $exponent++;
    }
    return "Hay que elevar $base a $exponent para que sea mayor a 10.000";
}

if (isset($_GET["base"]) && is_numeric($_GET["base"])) {
    echo exponentNumber($_GET["base"]);
} else {
    echo "param base was not introduced or is not a number";
}

?>