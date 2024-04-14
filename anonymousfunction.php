<?php

$sayHello = function (string $name){
    echo "Hello $name" . PHP_EOL;
};
$sayHello("Lasbi");
$sayHello("Noveni");

function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Goood Bye $finalName" . PHP_EOL;
}

sayGoodBye("Lasbi", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtolower($name);
};

sayGoodBye("Lasbi", $filterFunction);



?>