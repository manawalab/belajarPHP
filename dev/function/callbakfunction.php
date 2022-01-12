<?php

function sayHello (string $nama, callable $filter) {
    $finalname = call_user_func($filter, $nama);
    echo "Hello $finalname" . PHP_EOL;
}


sayHello ("Engka","strtolower");
/*sayHello ("Engka","strtoupper");

sayHello ("Engka", function (string $nama): string{
    return strtoupper($nama);
});
*/
sayHello ("Engka", fn($nama) => strtoupper ($nama));