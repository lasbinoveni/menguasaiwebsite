<?php

$counter = 1;
while ($counter <= 10){
    echo "ini hitungan yang ke $counter" . PHP_EOL;
    $counter++;
}

$counter = 20;
while ($counter >= 1){
    echo "ini hitungan yang ke $counter" . PHP_EOL;
    $counter--;
}

$counter = 1;
while ($counter <= 10):
    echo "ini hitungan yang ke $counter" . PHP_EOL;
    $counter++;
endwhile;