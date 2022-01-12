<?php

$nama = "Engka"; //global scope

function sayHello() {
    global $nama;
    echo "Hallo $nama";
}

sayHello();