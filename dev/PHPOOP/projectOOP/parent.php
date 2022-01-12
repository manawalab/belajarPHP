<?php

require_once "data/shape.php";

use data\{shape,rectangle};

$shape = new shape();
echo $shape->getcorner() .PHP_EOL;

$rectangle = new rectangle();
echo $rectangle->getcorner() .PHP_EOL;
echo $rectangle->getparentcorner() .PHP_EOL;


