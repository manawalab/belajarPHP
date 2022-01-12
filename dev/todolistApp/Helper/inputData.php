<?php

function input ($info) : string {
    echo "$info : ";
    $result = fgets (STDIN);
    return trim ($result);
}