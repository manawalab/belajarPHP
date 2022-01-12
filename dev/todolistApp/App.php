<?php


require_once __DIR__. "/model/TodoList.php";
require_once __DIR__. "/bisnisLogic/showTodoList.php";
require_once __DIR__. "/bisnisLogic/addTodoList.php";
require_once __DIR__. "/bisnisLogic/hapusTodoList.php";
require_once __DIR__. "/view/viewaddTodoList.php";
require_once __DIR__. "/view/viewhapusTodoList.php";
require_once __DIR__. "/view/viewTodoList.php";
require_once __DIR__. "/Helper/inputData.php";




echo "Aplikasi TODO - List ".PHP_EOL;
require_once __DIR__. "/view/viewaddTodoList.php";
viewTodoList();