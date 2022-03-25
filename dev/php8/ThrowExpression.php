<?php
function sayHello (?string $nama) {
    if ($nama == null) {
        throw new Exception ("tidak boleh Null");
    }
    echo " Hello $nama" .PHP_EOL;
}

function sayHelloExpresion (?string $nama) {
    // $nama = null;
    $result = $nama != null ? "Hello $nama" : throw new Exception ("Tidak boleh null");
    echo $result .PHP_EOL;
}


sayHelloExpresion ("engka");
sayHelloExpresion (null);