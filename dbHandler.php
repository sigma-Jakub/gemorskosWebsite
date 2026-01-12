<?php
    $dbHandler = null;

    try {
        $dbHandler = new PDO("mysql:host=mysql;dbname=database;charset=utf8", "root", "qwerty");
        // CHANGE TJE HOST TO localhost TO MAKE IT WORK ON A SERVER (hopefully...)
    } catch(Exception $ex) {
        echo $ex;
    }
?>