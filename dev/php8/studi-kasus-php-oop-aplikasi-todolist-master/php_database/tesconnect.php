<?php

$host = "localhost";
$port = 3306;
$database = "belajar_asdffdsaphp_database";
$username = "root";
$password = "";

try {
    $conection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Koneksi Sukses" .PHP_EOL;

    $conection = null; //menutup koneksi

} catch (PDOException $exception) {
    echo "Koneksi Gagal : " . $exception->getMessage() .PHP_EOL;
}

// if ($conek = new PDO ("mysql:host=$host:$port;nama_db = $database", $user,$pass)) {
//     echo "Takonek";
// } else {
//     echo "tidak koneksi";
// }