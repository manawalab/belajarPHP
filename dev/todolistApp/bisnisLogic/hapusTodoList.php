<?php

function hapusTodoList (int $number) : bool {
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }
    
    for ($i = $number; $i < sizeof($todoList); $i++) { //menggeser nomor
        
        $todoList [$i] = $todoList [$i + 1];
    }
    
    unset($todoList[sizeof($todoList)]);
    return true;
}