<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "post method works<br />";
    $path = $_FILES["file"]["tmp_name"];
    $word = $_POST["word"];
}

echo "La palabra $word aparece: " . countWords($path, $word) . " veces";

function countWords($path, $word) : int {
    $wordLower = strtolower($word);
    return substr_count(strtolower(file_get_contents($path)), $wordLower);
}
