<?php

 //polimorphysm adalah kemampuan dari sebuah objek untuk merubah semua objek dan turunannya
require_once "data/programer.php";
$company = new company();
$company->programer =  new programer("Engka");
var_dump ($company);

$company->programer =  new backendprogramer("Endang");
var_dump ($company);

$company->programer =  new frontendprogramer("ayka");
var_dump ($company);



