<?php

function increment () {
    static $counter = 1; // untuk menetapkan namma variabel counter
    echo "counter = $counter" .PHP_EOL;
    $counter++;
}

increment();
increment();
increment();