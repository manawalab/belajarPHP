<?php
require_once  __DIR__ . "/../Helper/inputData.php";
require_once __DIR__ . "/../bisnisLogic/hapusTodoList.php";

function viewhapusodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x") {
        echo "Batal menghapus TODO" . PHP_EOL;
    } else {
        $success = hapusTodoList($pilihan);

        if ($success) {
            echo "Sukses menghapus TODO nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus TODO nomor $pilihan" . PHP_EOL;
        }
    }
}