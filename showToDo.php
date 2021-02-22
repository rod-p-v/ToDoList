<?php 
    include 'toDo.php';

        $toDo=new ToDo();

        $list=$toDo->showToDo();

        foreach ($list as $toDo) {
            echo '<div class="pending">' . $toDo['text'] . '</div>';
        }
?>