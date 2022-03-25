<?php

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = 'username' AND password = 'password';";

$result = $connection->query($sql);

$sukses = false;
$cariuser = null;

foreach ($result as $row) {
    $sukses = true;
    $cariuser = $row['username'];
}

if ($sukses) {
    echo "Sukses Login" .PHP_EOL;
} else {
    echo "Gagal Login" .$cariuser .PHP_EOL;
}

$connection = null;