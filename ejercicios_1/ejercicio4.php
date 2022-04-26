<!-- Enunciado:

Dado 2 ficheros, si la extensión termina en .exe poner en mayúscula
el nombre del fichero, y si termina en .db imprimirlo en minúculas.

Es decir, si los ficheros son pepe.exe y Ana.db, el resultado tiene
que ser PEPE.EXE y ana.db

Objetivo:

Familiarizarse con el tratamiento de strings -->

<?php

if (isset($_GET["name"])) {
    $name = $_GET["name"];
    if(substr($name, -4) == '.exe') {
        echo strtoupper($name);
    } elseif(substr($name, -3) == '.db') {
        echo strtolower($name);
    } else {
        echo 'invalid name';
    }
} else {
    echo "param name was not introduced";
}

?>

