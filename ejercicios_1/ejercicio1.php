<!-- Enunciado:

Crear un fichero php que reciba el título como parámetro GET
y en base a eso añada el contenido dentro de la etiqueta <h1>
del documento html.

Objetivo:

Poder coger un parámetro de entrada, y usarlo para generar un
documento HTML muy simple. -->

<?php

if(isset($_GET["text"])) {
    $param = $_GET["text"];
    echo "<h1>$param</h1>";
}

?>