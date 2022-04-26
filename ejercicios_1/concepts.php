<?php

#Dado el nombre de un fichero, si termina en .exe imprimir en muyusculas y si termina en .db imprimir en minusculas

$name = '';

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

echo '<hr />';

#ver si una cadena de texto es palindromo


if (isset($_GET["palindrome"])) {
    $palindrome = $_GET["palindrome"];
    echo $palindrome == strrev($palindrome) ? "$palindrome is palindrome" : "$palindrome is not palindrome";
} else {
    echo "param palindrome was not introduced";
}



echo '<hr />';

#crear una funcion que nos diga a que exponente hay que elevarlo para que pase de 10000


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

echo '<hr />';









?>