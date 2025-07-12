<?php
function hello($fname="First",$lname="Last"){
    $v="$fname $lname";
    return $v;
}
$name = hello("Soumita","Das<br>");
echo $name;
function sum($math,$eng,$sc){
    $s = $math + $eng + $sc;
    return $s;
}
function percentage($st){
    $per= $st / 3;
    echo $per;
}
$total = sum(55,65,88);
percentage($total);
?>