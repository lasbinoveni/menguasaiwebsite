<?php
function getFinalValue(int $value){
    if ($value >= 80){
        return "A";
    } else if ($value >=70){
        return "B";
    } else if ($value >=60){
        return "C";
    } else if ($value >=50){
        return "D";
    } else {
        return "E";
    }
    echo "ups" . PHP_EOL;
}


$score = getFinalValue(98);
var_dump($score);
?>