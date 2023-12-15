<?php
       // variables and datatypes

    // data types in php

    /*
        - String - A string is a series of characters surrounded by quotes
        - Integer - Whole numbers
        - Float - Decimal numbers
        - Boolean - true or false
        - Array - An array is a special variable, which can hold more than one value
        - Object - A class
        - NULL - Empty variable
        - Resource - A special variable that holds a resource
    */


    // Rules for defining variables

    /*
    - Variables must be prefixed with $
    - Variables must start with a letter or the underscore character
    - variables can't start with a number
    - Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    - Variables are case-sensitive ($name and $NAME are two different variables)
    */

    $A;
    $a;
    $a1;
    $_a;


    $name = "ABC";
    $age = 14;
    $online = true;

    // var_dump($age);

    // adding variables with string
    echo "<br>";
    echo "Name is: $name. Age is: $age and has account: $online";
    
    echo "<br>";

    echo "Name is:" .  $name. "Age is: ". $age . "and has account: ". $online;



    define('USER', "abc");
    define('HOBBY', "cricket");

    echo HOBBY;
?>