<?php

function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter,$name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Noveni","strtoupper");
sayHello("Lasbi","strtolower");
sayHello("Noveni",function (string $name): string {
    
    return strtoupper($name);
});
sayHello ("Noveni", fn($name) => strtoupper($name));
