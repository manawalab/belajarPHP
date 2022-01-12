<?php

require_once "data/manager.php";

$manager = new manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

$vp = new Presiden();
$vp->name = "Eko";
$vp->sayHello("Joko");