<?php
// $counter=5;
// while ($counter>=1) {
//     echo "Ini adalah for loop ke".$counter .PHP_EOL;
//     $counter--;
// }

$counter=1;
while ($counter<=5) {
    echo "Ini adalah for loop ke ".$counter .PHP_EOL;
    $counter++;
    if ($counter >=3) {
        goto akhir;
    }

}
akhir:
echo "Perulangan counter berakhir" .PHP_EOL;