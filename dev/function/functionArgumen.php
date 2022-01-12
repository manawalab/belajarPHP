<?php
function sumAll (...$angka) {

    $total = 0;
    foreach ($angka as $hasil) {
        $total += $hasil;
    }
    echo "Total " . implode(" + ", $angka) . " = $total" .PHP_EOL;

}
$total = [1,2,3,4,5];
sumAll (20,15);
sumAll (...$total);