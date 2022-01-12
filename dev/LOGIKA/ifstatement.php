<?php
//jika nilai dan absen memenuhi standar maka hasilnya lulus
$nilai = 75;
$absen = 60;

if ($nilai >=75 && $absen >=70) {
    echo "Selamat Anda Lulus";
} else {
    echo "Maaf Anda Gugur";
}
