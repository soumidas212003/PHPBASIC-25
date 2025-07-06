<?php
    /*
    Constant Variables

    define(name,value,case-insensitive)
    case-insensitive = either true and bydefault false

    Important Notes:
        The third parameter (case-insensitive) was deprecated as of PHP 7.3.0.
        It was removed entirely in PHP 8.0.0.

    define("CONSTANT_NAME", "value")
    */
    define("test",50);//by default false
    echo test . "<br>";
    $sum=test+20;
    echo $sum;
?>