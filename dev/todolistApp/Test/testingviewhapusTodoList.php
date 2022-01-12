<?php

require_once "../model/TodoList.php";
require_once "../view/viewhapusTodoList.php";
require_once "../bisnisLogic/addTodoList.php";
require_once "../bisnisLogic/showTodoList.php";


addTodoList ("Engka");
addTodoList ("Umar");
addTodoList ("Program");
addTodoList ("PHP");

showTodoList();

viewhapusodoList();
showTodoList();