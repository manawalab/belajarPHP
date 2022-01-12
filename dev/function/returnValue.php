<?php

// function sum (int $pertama, int $kedua){
//     return $pertama + $kedua;
// }

// $result = sum (5,5);
// // $total = sum (10, 10);
// var_dump($result);



$score = getFinalValue (10);
print_r($score);
function getFinalValue (int $value) {
// $nilai =76;

    if ($value >= 90) {
    return "A" .PHP_EOL;
} else if ($value >= 80) {
    return "B" .PHP_EOL;
} else if ($value >= 70) {
    return "C" .PHP_EOL;
} else if ($value >=50) {
    return "D" .PHP_EOL;
} else {
    return "E" .PHP_EOL;
}

echo " Ups, " .PHP_EOL;
}


function sum (int $satu, int $dua) {
    $total = $satu + $dua;
    return $total;
}

$hasil = sum (10, 4);
print_r ($hasil);



