<?php
    define ("Aplikasi", "Belajar PHP Dasar");


class person {
    const AUTHOR = "AUTHOR : Engka Umar";
   
    var string $nama;
    var ?string $alamat = null;
    var $kota = "Gorontalo";
   

    function __construct (string $nama, ?string $alamat){
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    function sayHello(?string $nama) {

        if (is_null($nama)) {
            echo "Hallo, Nama Saya {$this->nama}" .PHP_EOL;
        } else {
            echo "Hi $nama, Nama Saya {$this->nama}" .PHP_EOL;
        }
    }
        function info () {
            echo "AUTHOR :" .self::AUTHOR .PHP_EOL;
        }       
        
        function __destruct () {
            echo "Objek person $this->nama telah dihancurkan" .PHP_EOL;
        }


}