<?php
require_once "data/person.php";

echo person::AUTHOR .PHP_EOL;

$person = new person();
$person->nama = "Engka";

$person->sayHello("Budi");
$person->sayHello(null);

$vapor = new person();
$vapor->nama = "myoats";

$vapor->sayHello("blender");
$vapor->sayHello(null);

$person->info();