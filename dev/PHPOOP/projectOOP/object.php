<?php


require_once "data/person.php";

$person = new person();
    $person -> nama = "engka";
    $person -> alamat = "Tabongo"; // bisa di isi string atau tidak
    


    // manipulasi properties
    $person -> kota = "GORONTALO";

    echo "Nama \t: {$person->nama}" .PHP_EOL;
    echo "Alamat \t: {$person->alamat}" .PHP_EOL;
    echo "Kota \t: {$person->kota}" .PHP_EOL;

print_r($person);
