<?php

require_once "../model/TodoList.php";
require_once "../bisnisLogic/addTodoList.php";
require_once "../bisnisLogic/showTodoList.php";
require_once "../bisnisLogic /hapusTodoList.php";

addTodoList ("ENGKA");
addTodoList ("ANJAS");
addTodoList ("IKBAL");
addTodoList ("RAJIK");
addTodoList ("NAIM");

showTodoList();
hapusTodoList(5);

showTodoList();
$hapuslagi = hapusTodoList(5);
var_dump($hapuslagi);
showTodoList();