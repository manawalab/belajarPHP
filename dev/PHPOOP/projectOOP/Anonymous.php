<?php

interface HelloWorld {
    function sayHello(): void;
}

$helloworld = new class ("Engka") implements HelloWorld {

    public string $nama;
    public function __construct(string $nama) {
        $this->nama=$nama;
    }

    public function sayHello(): void {
        echo "Hallo $this->nama !!!" . PHP_EOL;
    }
};

$helloworld->sayHello();