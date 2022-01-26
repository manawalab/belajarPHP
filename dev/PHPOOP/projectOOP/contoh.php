<?php
class User {

  private $name;

  public function setName($givenName) {
     $this->name = $givenName;
  }

  public function getName() {
     return $this->name;
  }

}

// instansiasi
$obj = new User;

// setName() diisi oleh
// argumen yaitu
// sebuah object dari class
// tanpa nama yang dibuat
// mendadak (anonymous class)
$obj->setName(new class {

  public function show($name) {
     return "Given name: " . $name;
  }

});

// method show() berasal dari
// anonymous class dan
// jika ini dijalankan akan keluar
// Given name: Bagus
echo $obj->getName()->show("Bagus");