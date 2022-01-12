<?php

require_once  __DIR__ . "/../model/TodoList.php";
require_once  __DIR__ . "/../bisnisLogic/showTodoList.php";
require_once  __DIR__ . "/../view/viewaddTodoList.php";
require_once  __DIR__ . "/../view/viewhapusTodoList.php";
require_once  __DIR__ . "/../Helper/inputData.php";
function viewTodoList () {
    
while (true) {
    showTodoList();

    echo "MENU" .PHP_EOL;
    echo "1. Tambah TODO" .PHP_EOL;
    echo "2. Hapus TODO" .PHP_EOL;
    echo "X. Keluar" .PHP_EOL;
 
    $pilihan = input ("Pilih");

    
    if ($pilihan == "1") {
        viewaddTodoList ();
        
    } else if ($pilihan == "2") {
        viewhapusodoList ();
        
    } else if ($pilihan == "X") {
        break;
    } else {
        echo "Pilihan Tidak Dimengerti !" .PHP_EOL;
    }
}

    echo "Sampai Jumpa Lagi Guruku";
}