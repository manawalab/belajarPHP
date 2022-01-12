<?php

// function foo () {
//     echo "FOO" .PHP_EOL;
// }
// function bar () {
//     echo "BAR" .PHP_EOL;
// }

// $namafoo = "foo";
// $namafoo();

// $namabar = "bar";
// $namabar();


function sayHello (string $nama, $filter) {
    $namafinal = $filter ($nama);
    echo "Hello $namafinal" .PHP_EOL;

} 

function contohfungsi (string $nama) : string {

    return "Abang $nama";
}

sayHello("Engka", "contohfungsi");
sayHello("Engka", "strtolower");
sayHello("Engka", "strtoupper");
