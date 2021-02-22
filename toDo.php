<?php 

include_once 'db.php';

class ToDo extends DB {

    function newToDo($text){
        if (!empty($text)) {
            $query=$this->connect()->prepare('INSERT INTO todolist (text) VALUES (:text)');
            $query->execute(['text' => $text]);
        }
    }

    function showToDo(){
        return $this->connect()->query('SELECT * FROM todolist ORDER BY timestamp DESC');
    }
}

?>