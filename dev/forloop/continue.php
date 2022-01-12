<?php

// for ($counter=1;$counter<=100;$counter++) {
//     echo "Counter : $counter" .PHP_EOL;
// }


for ($hitung =1;$hitung<=100;$hitung++) {
    if ($hitung % 2 == 1) {
        continue;
    }
    echo "Counter : $hitung" .PHP_EOL;
}
 