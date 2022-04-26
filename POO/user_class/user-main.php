<?php

require_once("User.php");

$savedUser = new User("paco", "12345");
$name = $password = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clean($_POST["name"]);
    $password = clean($_POST["password"]);
}

echo $savedUser->validateUser(new User($name, $password));



function clean($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
