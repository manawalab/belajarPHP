<?php

//pewarisan

require_once "data/manager.php";
$manager = new Manager ();
$manager->nama = "Engka";
$manager->sayHello("JOKO");


$vp = new Presiden ();
$vp->nama = "Presiden Jokowi";
$vp->sayHello("JOKO");


