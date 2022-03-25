<?php
require_once __DIR__ . '/getConnection.php';

$connection = getConnection();
// $sql = "SELECT * FROM kustomer";
$sql = "SELECT id, nama, email FROM kustomer";
$result = $connection->query($sql);
$connection = null;

foreach ($result as $row) {
    $id = $row["id"];
    $nama = $row["nama"];
    $email = $row["email"];
    // print_r($row);

    echo "ID : $id" .PHP_EOL;
    echo "nama : $nama" .PHP_EOL;
    echo "email : $email" .PHP_EOL;
}