<!-- Crear un código que pasado un número, nos diga si es par o impar.

Objetivo:

Realizar operaciones aritméticas simples con un valor pasado por parámetro. -->

<?php
if(isset($_GET["number"])) {
    $number = $_GET["number"];
    echo $number%2 == 0 ? "par" : "impar";
}

?>