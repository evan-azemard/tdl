<?php
$stmt = new PDO("mysql:host=localhost;dbname=tdl", "root", "");

if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["login"]) && isset($_POST["password"])) {

    if (!empty($stmt->query("SELECT * FROM inscription WHERE login = '" . $_POST["login"] . "'")->fetch())) {
        echo "errMail";
    } else {
        if ($stmt->query("INSERT INTO `inscription`(`ID`, `nom`, `prenom`, `login`, `password`)
							VALUES (NULL, '" . $_POST["nom"] . "', '" . $_POST["prenom"] . "', '" . $_POST["login"] . "',
							'" . password_hash($_POST["password"], PASSWORD_BCRYPT) . "')")) {
            echo "success";
        } else {
            echo "err";
        }
    }
} else {
    echo "err";
}
