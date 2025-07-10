<?php
    //logical operator and if else statement
    
    $age=20;

    /*
     logical and = '&&' or 'and'
     logical or = '||' or 'or'
    */

    /*if($age >= 18 && $age <=21){
        echo "You are eligible";
    }*/

    //logical not = !
    /*if(!($age <= 18)){
        echo "You are eligible";
    }*/

    //xor operator = both true then result false , both false then result false otherwise true
    if($age >= 18 xor $age <=21){
        echo "You are eligible";
    }else{
        echo "You are not eligible";
    }
?>