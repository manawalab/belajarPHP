<?php

require_once "../view/viewTodoList.php";
require_once "../bisnisLogic/addTodoList.php";

addTodoList ("Bangun Pagi");
addTodoList ("Gosok Gigi");
addTodoList ("Nyiram Kopi");
addTodoList ("Charger HP");
addTodoList ("Buka Laptop");
addTodoList ("Ngoding Bro");


vshowTodoList();