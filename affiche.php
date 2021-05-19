<?php
$stmt = new PDO("mysql:host=localhost;dbname=tdl", "root", "");
if (!empty($_SESSION['id'])){


    $id = (int)$_SESSION['id'];

    $bdd = new PDO("mysql:host=localhost;dbname=tdl", "root", "");

    $sel = $bdd->prepare('SELECT * FROM liste  WHERE id_user = ?');
    $sel->execute(array($id));
    $liste = $sel->fetchAll();


}



?>