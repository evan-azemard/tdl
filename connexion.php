<?php
if (!isset($_SESSION["id"])) {
    if (isset($_POST["login"]) && isset($_POST["password"])) {
        $stmt = new PDO("mysql:host=localhost;dbname=tdl", "root", "");
        $user = $stmt->query("SELECT nom, password, id FROM connexion WHERE login = '" . $_POST["login"] . "'")->fetch(PDO::FETCH_ASSOC);
        if (password_verify($_POST["password"], $user["password"])) {
            echo json_encode($user);
        } else {
            echo "err";
        }
    }
}
