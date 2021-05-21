<?php
$stmt = new PDO("mysql:host=localhost;dbname=tdl", "root", "");

if (isset($_POST["input"]) && isset($_POST["dateLocale"]) && isset($_POST["utilisateur"])) {

    $input = $_POST['input'];
    $dateLocale = $_POST['dateLocale'];
    $utilisateur = $_POST['utilisateur'];

    $sql = $stmt->prepare("INSERT INTO liste (id_user,message,date_debut) VALUE (?,?,?) ");
    $sql->execute(array($utilisateur, $input, $dateLocale));


}






