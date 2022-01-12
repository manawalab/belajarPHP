<?php

$name = "Engka"; //LOKAL SCOPE
function createName () {
    global $name;
    echo $name . PHP_EOL;
    echo $GLOBALS["name"] . PHP_EOL;
}


createName();
// echo $name;