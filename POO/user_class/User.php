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

    function validateUser($user)
    {
        if ($this->name == $user->name && $this->password == $user->password)
            return "Usuario válido";
        else return "usuario no válido";
    }
}
