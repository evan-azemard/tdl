<?php
$stmt = new PDO("mysql:host=localhost;dbname=tdl", "root", "");

if (isset($_POST["input"]) && isset($_POST["dateLocale"]) && isset($_POST["utilisateur"])) {

    $input = $_POST['input'];
    $dateLocale = $_POST['dateLocale'];
    $utilisateur = $_POST['utilisateur'];

    $sql = $stmt->prepare("INSERT INTO liste (id_user,message,date_debut) VALUE (?,?,?) ");
    $sql->execute(array($utilisateur, $input, $dateLocale));

    $bdd = new PDO("mysql:host=localhost;dbname=tdl", "root", "");
        $sel = $bdd->prepare('SELECT id FROM liste  WHERE message = ?');
        $sel->execute(array($_POST['input']));
        $recup = $sel->fetchAll();
        

}






