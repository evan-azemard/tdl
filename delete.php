<?php

if (isset($_POST["data"])){

    $stmt = new PDO("mysql:host=localhost;dbname=tdl", "root", "");
    $sel = $stmt->prepare('DELETE FROM liste WHERE message = ? ');
    $sel->execute(array($_POST['data']));
    $recup = $sel->fetchAll();

}