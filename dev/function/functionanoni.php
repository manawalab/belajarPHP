<?php

function goodbye (string $nama, $filter) {
    $namafinal = $filter ($nama);
    echo "Good Bye $namafinal" .PHP_EOL;
}

goodbye ("Engka", function (string $nama) : string {
    return strtoupper ($nama);
    });

    $filterfungsi = function (string $nama) : string {
        return strtoupper ($nama);
    };


goodbye ("Engka", $filterfungsi);


$firstname = "Engka";
$lastname = "Umar";
$sayHelloNK = function () use ($firstname, $lastname) {
    echo "Hello $firstname $lastname" . PHP_EOL;

};

$firstname = "Engka";
$lastname= "Umar";
$sayHelloNK();