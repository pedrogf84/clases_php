<?php

class User
{

    private $name;
    private $password;

    //CONSTRUCTOR
    function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    //GETTERS & SETTERS

    function getName()
    {
        return $this->name;
    }

    function getPassword()
    {
        return $this->password;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }

    //FUNCTIONS

    function print()
    {
        return "USER:<br />name : $this->name<br />password: $this->password";
    }

    function validatePassword($user)
    {
        if (count_chars($user->password) >= 8 && $this->containsSpecialChar($user->password))
            return "Password válido";
        else return "Password no válido, comprueba que tienes al menos: <br />- 8 caractéres<br />- alguno de estos caracteres especiales: '.' ',' '-' '_' ';'";
    }

    function containsSpecialChar($string): bool
    {
        $specialChars = array('.', ',', '-', '_', ';');
        foreach ($specialChars as $item) {
            if (str_contains($string, $item)) return true;
        }
        return false;
    }
}
