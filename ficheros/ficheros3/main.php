<?php

$file = fopen('texto.txt', "r") or die("file not found");


$counter = 1;
while ($line = fgets($file)) {
    $wordNumber = count(explode(" ", $line));
    if ($line != "\n") {
        echo "LINEA $counter: '$line' --> Palabras: $wordNumber <br />";
        $counter++;
    }
}
