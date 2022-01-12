<?php
function sum ($angkasatu, $angkadua) {
    $total = $angkasatu + $angkadua;
    echo "Total $angkasatu + $angkadua = $total " .PHP_EOL;
}

// sum("100", "100");
// sum(100, 100);
// sum(true, false);
sum([],[]);