<?php

class sosialMedia {
    public string $nama;
}

class facebook extends sosialMedia {
    public function login (string $username, password $password): bool {
        return true;
    }
}
// akan error karna ad kondisi final di class facebook
class fakebook extends facebook {
    final public function login (string $username, password $password): bool {
        return false;
}
}
