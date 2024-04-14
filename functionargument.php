<?php

function sayHello($firstName, $lastname=""){
    echo "Hallo $firstName $lastname" . PHP_EOL;
}

sayHello("lasbi");
sayHello("Noveni");
sayHello("Lasbi","Noveni");

?>