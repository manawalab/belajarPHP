<?php

$nilai = 90;

// standar tertinggi nilai 95 dan absen 95
// if ($nilai >=80 && $absen >=95) {
//     echo "Nilai Anda A".PHP_EOL;
// } else if ($nilai >=70 && $absen >=80) {
//     echo "Nilai Anda B".PHP_EOL; 
// } else if ($nilai >=60 && $absen >=70) {
//     echo "Nilai Anda C".PHP_EOL;
// } else if ($nilai >=50 && $absen >=60) {
//     echo "Nilai Anda D".PHP_EOL;
// } else {
//     echo "Maaf Anda Kalah Perang";
// }


switch ($nilai) {
    case $nilai>=80:
        echo "Nilai Anda A".PHP_EOL;
    break;

    case 70:
        echo "Nilai Anda B".PHP_EOL;
    break;

    case 60:
        echo "Nilai Anda C".PHP_EOL;
    break;

    case 50:
        echo "Nilai Anda D".PHP_EOL;
    break;
    default:
        echo "mungkin anda salah jurusan";
}