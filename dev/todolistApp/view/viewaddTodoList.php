<?php
require_once __DIR__ . "/../model/TodoList.php";
require_once __DIR__ . "/../Helper/inputData.php";
require_once __DIR__ . "/../bisnisLogic/addTodoList.php";

function viewaddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (X untuk batal)");

    if ($todo == "X") {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}