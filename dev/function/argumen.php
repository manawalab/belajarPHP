<?php

function panggil ($namaawal, $namaakhir ="") {
    echo "Hallo $namaawal $namaakhir" .PHP_EOL;
}

panggil ("rajiq");
panggil ("naim");
panggil ("Engka", "Umar");
panggil (10, 10);


// function argumen 

function argumen (string $namapertama, string $namakedua = "") {
    echo "Hallo $namapertama $namakedua" .PHP_EOL;
}


argumen("Engka");
argumen("Engka", "Umar");