<?php

function factorialloop (int $value) :int {
     $total = 1;

     for ($i=1; $i<=$value; $i++) {
         $total *= $i;
     }

    return $total;
}

print_r ("hasil dari factorial nya adalah : ". factorialloop(3));
// print_r (1*2*3*4*5);


function factorialRecursive (int $value) : int {
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive ($value - 1);
        
    }
}
var_dump (factorialRecursive (4));