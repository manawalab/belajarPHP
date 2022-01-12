<?php


require_once "data/person.php";

$person = new person();
$person->nama = "ANJAS";
$person->alamat = "MANADO";
$person->kota = "SULAWESI UTARA";

var_dump($person);

echo "Nama : {$person->nama}" .PHP_EOL;
echo "Alamat : $person->alamat" .PHP_EOL;
echo "Kota : $person->kota" .PHP_EOL;



$person2 = new person();
$person2->nama = "Endang";
$person2->alamat = "barakati";
$person2->kota = "Gorontalo";
print_r($person2);