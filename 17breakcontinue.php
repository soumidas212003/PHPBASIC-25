<?php
/*for($a = 1; $a <= 10; $a++){
    if($a == 3){
        //echo "No. :" . $a . "<br>";
        continue;
    }
    echo "Number : " . $a . "<br>";
}*/
for($a = 1; $a <= 10; $a++){
    if($a == 3){
        echo "No. :" . $a . "<br>";
        break;
    }
    echo "Number : " . $a . "<br>";
}
?>