<!-- Enunciado:

Detectar si un número es capicúa (o palíndromo)

Objetivo:

Seguir trabajando con cadenas de caracteres y números -->

<?php
if (isset($_GET["palindrome"])) {
    $palindrome = $_GET["palindrome"];
    echo $palindrome == strrev($palindrome) ? "$palindrome is palindrome" : "$palindrome is not palindrome";
} else {
    echo "param palindrome was not introduced";
}
?>