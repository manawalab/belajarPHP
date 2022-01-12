<?php
function sayHello (string $nama, $filter) {
	$namafinal = $filter ($nama);
	echo "Hello $namafinal" .PHP_EOL;
	
}

function contohfungsi (string $nama):string {
	return "Abang : $nama" .PHP_EOL;
	
}

sayHello ("Engka", "contohfungsi");
sayHello ("Engka", "strtolower");
sayHello ("Engka", "strtoupper");