<?php
//menggunakan kata kunci fn ()
$namaku = "vapor";
$namanya = "endang";

$arrowfunction = fn() => "Halo $namaku, $namanya" . PHP_EOL;

echo $arrowfunction();