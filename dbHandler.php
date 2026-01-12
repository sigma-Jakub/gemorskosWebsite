<?php
    $dbHandler = null;

    try {
        $dbHandler = new PDO("mysql:host=localhost;dbname=database;charset=utf8", "root", "qwerty");
    } catch(Exception $ex) {
        echo $ex;
    }
?>