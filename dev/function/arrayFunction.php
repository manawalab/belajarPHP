<?php

$data = [1, 2, 3 , 4, 5];
$mapfunctions = fn (int $value) => $value * 10;
$dataresult = array_map ($mapfunctions, $data);

// print_r ($dataresult);

// rsort ($dataresult);
// print_r ($dataresult);

print_r(array_keys ($data));
print_r(array_values ($data));