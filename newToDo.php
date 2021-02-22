<?php
include_once 'toDo.php';

        $toDo=new ToDo();

        if (isset($_POST['toDo'])) {
            $toDo->newToDo($_POST['toDo']);
        }
?>