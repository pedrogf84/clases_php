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

    /*
    * function validatePassword
    * 
    * params: $user : User
    *
    * includes: functions containsSpecialChar, checkStrength
    *
    * return: string
    */

    function validatePassword($user) : string
    {
        if (count_chars($user->password) >= 8 && $this->containsSpecialChar($user->password))
            return "Password válido, la fuerza del password es: ".$this->checkStrength($user->password);
        else return "Password no válido, comprueba que tienes al menos: <br />- 8 caractéres<br />- alguno de estos caracteres especiales: '.' ',' '-' '_' ';'";
    }


    /*
    * function containsSpecialChar
    * 
    * params: $password
    *
    * return: boolean
    */
    function containsSpecialChar($password): bool
    {
        $specialChars = array('.', ',', '-', '_', ';');
        foreach ($specialChars as $item) {
            if (str_contains($password, $item)) return true;
        }
        return false;
    }

    /*
    * function checkStrength
    * 
    * params: $password
    *
    * return: password strength form very weak to very strong.
    */

    function checkStrength($password) : string
    {
        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        $strength = array($number, $uppercase, $lowercase, $specialChars);

        switch (count(array_filter($strength))) {
            case 1:
                return "muy débil";
                break;
            case 2:
                return "débil";
                break;
            case 3:
                return "fuerte";
                break;
            case 4:
                return "muy fuerte";
                break;
            default:
                return "not evaluable";
                break;
        }
    }
}
