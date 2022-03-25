<?php
// pengganti if else, switch case, ternary operator


$nilai = "E";
$hasil = match ($nilai) {
    "A", "B", "C" => "Lulus nt Bro !!",
    "D" => "Anda Tidak Lulus !!",
    "E" => "Salah Jurusan NT, wkwkkwkwkwk", 
    default => "Nilai apa itu ?"
};
// echo "$hasil" .PHP_EOL;

$value = 95;

$result = match (true) {
    $value >= 90 => "A",
    $value >= 75 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo "Nilai $result" .PHP_EOL;

$nama = "Mrs. Engka";

$panggilan = match (true) {
    str_contains ($nama, "Mr.") => "Mister",
    str_contains ($nama, "Mrs.") => "Mom",
    default => "Hello"
};
echo "Hello $panggilan" .PHP_EOL;