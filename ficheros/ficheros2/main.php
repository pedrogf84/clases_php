<?php

$text = file_get_contents("./loremp-ipsum.txt");
$sign = "\n\n Un saludo, Pedro.";

if (!file_exists("./file2.txt")) $myfile = fopen("file2.txt", "x") or die("file not created");
fwrite($myfile, $text . $sign);

print_r($myfile);

