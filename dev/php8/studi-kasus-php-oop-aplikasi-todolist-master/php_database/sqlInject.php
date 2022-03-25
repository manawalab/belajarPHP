<?php

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$username = "admin'; #";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password';";
// echo "$sql"; ==> menampilkan hasil query sql (sangat tidak dsarankan perintah di atas)
$result = $connection->query($sql);

$sukses = false;
$cariuser = null;

foreach ($result as $row) {
    $sukses = true;
    $cariuser = $row["username"];
}


if ($sukses) {
    echo "Sukses Login " .$cariuser .PHP_EOL;

} else {
    echo "Gagal Login";
}

$connection = null;