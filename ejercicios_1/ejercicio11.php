<!-- Enunciado:

Crear una función que ‘milenialice’ un texto que se le pase, es decir:
    * los ‘que’ los convierte el ‘k’
    porque => xq
    * Pone todo en mayúsculas indistintamente
    * Gu/Bu => w
    * Igual => =
    * Sin apertura de ¡ ni ¿, ni acentuación

Podéis echarle imaginación ;)


Objetivo:

Practicar con funciones cadenas y arrays.
Mover esas funciones a un fichero llamado util.php y hacer llamadas a dichas funciones desde otro fichero diferente. -->

<?php


function zoomerText($text) {
    $personaNormal = array('que', 'porque', 'gu', 'wu', 'igual', 'á', 'é', 'í', 'ó', 'ú', '!');
    $zoomer = array('k', 'xq', 'w', 'w', '=', 'a', 'e', 'i', 'o', 'u', '');

    return str_replace($personaNormal, $zoomer, $text);
}

$string = "!que porque gu wu igual áéíóú¡";

echo zoomerText($string);


?>