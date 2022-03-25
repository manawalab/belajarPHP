<?php
require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO kustomer(id,nama,email)
    VALUES('ENDANG','endang','endangpayu28@gmail.com')
    SQL;
    $connection->exec ($sql);
    $connection = null;