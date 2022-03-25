<?php
trait sampeltrait {
    public abstract function sampelFunction (string $nama): string;
}

class sampelClass {
    use sampeltrait;
    public function sampelFunction (string $nama): string {

    }
}