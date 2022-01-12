<?php
    $nilai1 = 9.87654321;
    $nilai2 = 1.87654329;
    $mesinepsilon = 0.00001;

    if (abs($nilai1-$nilai2)<$mesinepsilon) {
        echo "Benar Semua";
    } else {

        echo "Tidak Sama";
    }

?>