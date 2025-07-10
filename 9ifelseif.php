<?php
$percentage = 50;
if($percentage >= 80 && $percentage <= 100){
    echo "You are in Merit";
}elseif($percentage >= 60 && $percentage < 80){
    echo "You are in Ist Division";
}elseif($percentage >= 45 && $percentage < 60){
    echo "You are in IIst Division";
}elseif($percentage >= 33 && $percentage < 45){
    echo "You are in IIIst Division";
}elseif($percentage < 33){
    echo "You are Fail";
}else{
    echo "Please Enter Valid Percentage.";
}
?>