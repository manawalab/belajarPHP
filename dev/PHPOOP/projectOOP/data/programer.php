<?php

class programer {

    public string $nama;
    
    public function __construct (string $nama) {
        $this->nama = $nama;
    }

}
    class backendprogramer extends programer {

    }

    class frontendprogramer extends programer {

    }

    class company {

        public programer $programer;
    }