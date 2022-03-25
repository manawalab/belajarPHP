<?php 
class example {
    public string |  int | bool | array $data;
}

$example = new example();
$example->data = "Engka";
$example->data = "100";
$example->data = "true";
$example->data = "[1, 2, 3]";

var_dump ($example);

function unionargument (string | array $data): string | array {
    if (is_array ($data)) {
        // echo "Array ini bro" .PHP_EOL;
        return["1,2,3"];
    } else if (is_string ($data)) {
        // echo "String ini bro" .PHP_EOL;

        return "Contoh String" .PHP_EOL;
    }
}

unionargument("Engka Umar");
unionargument([]);