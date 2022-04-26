<!-- Enunciado:

Escribir un programa que dado un número, cree una pirámide cuya base tiene esa longitud en asteriscos.
Es decir, si el número es 5 el resultado sea:

    *
   * *
  * * *
 * * * *
* * * * *

Y si es 3, el resultado sea:

  *
 * *
* * *

Objetivo:

Familiarizarse con el tratamiento de cadenas
 -->


<?php

if (isset($_GET["number"])) {
    $number = $_GET["number"];
    piramid2($number);
    echo "<hr />";
    piramid3($number);
} else {
    echo "no valid number";
}

function piramid2($number)
{
    for ($i = 1; $i <= $number; $i++) {
        echo "<pre>";
        for ($j = 0; $j < $number - $i; $j++) {
            echo "&nbsp;";
        }
        for ($k = 0; $k < $i; $k++) {
            echo "* ";
        }
        echo "</pre>";
    }
}


function piramid3($number)
{
    for ($i = 1; $i <= $number; $i++) {
        echo "<pre>";
        echo str_repeat("&nbsp;", $number - $i);
        echo str_repeat("* ", $i);
        echo "</pre>";
    }
}



/*  function printPiramid($number) {
     echo "<p style='text-align: center'>";

    for($i = 1; $i <= $number; $i++){
        $line = "";

        for ($j = 1; $j <= $i; $j++) {
            $line .= "*";
        }

        echo $line;
        echo "<br />";
    }

    echo "</p>";
 } */