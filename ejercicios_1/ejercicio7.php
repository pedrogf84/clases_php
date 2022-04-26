<!-- Enunciado:

Dado este array de paises de Europa:

 $paises = [
    "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
    "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
    "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
    "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"
 ];

Crear un script que muestre la capital y el país de la siguiente manera,
ordenando la lista por capitales

Ej:
La capital de Netherlands es Amsterdam
La capital de Greece es Athens
La capital de Germany es Berlin
...


Objetivo:

Familiarizarse con el tratamiento de arrays -->

<?php

$paises = [
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
    "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest",
    "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
];

asort($paises);

foreach ($paises as $country => $capital) {
    echo "La capital de $country es $capital<br/>";
}