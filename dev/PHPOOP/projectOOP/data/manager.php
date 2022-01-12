<?php

//pewarisan
class manager {
    var string $nama;
    var string $judul;

    public function __construct (string $nama ="", string $judul = "Manager Baru") {
        $this->nama = $nama;
        $this->judul = $judul;

}



    function sayHello (string $nama): void
    {
        echo "Hy $nama, Nama saya Manajer $this->nama" .PHP_EOL;
    }
}

class Presiden extends manager {
    
    public function __construct (string $nama = "") {
    parent::__construct($nama, "Presiden");
    }

    function sayHello (string $nama): void
    {
        echo "Hy $nama, Nama saya Presiden $this->nama" .PHP_EOL;
    }
}

