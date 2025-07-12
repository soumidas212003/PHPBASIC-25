<?php
//passing argument by value
function wow($a){
    $a="hey";
}
$str="Hello<br>";
wow($str);
echo $str;
//passing argument by Reference
function hello(&$a){
    $a="hey";
}
$str="Hello";
hello($str);
echo $str;
?>