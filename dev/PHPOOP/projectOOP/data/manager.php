<?php

//pewarisan
class Manager {
    var string $nama;

    function sayHello (string $nama): void
    {
        echo "Hy $nama, Nama saya $this->nama" .PHP_EOL;
    }
}

class Presiden extends Manager {

}

