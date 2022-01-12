<?php

$nama = "engka";
 echo $nama .PHP_EOL;
$namalain = &$nama; //tanda (&) merubah nilai variabel berikutnya
$namalain ="ngkong" .PHP_EOL;

echo "$nama" . PHP_EOL;


//contoh 2 ;

function increment (int &$value) {
    $value++;
}

$counter = 1;
increment($counter);


echo "$counter" .PHP_EOL;