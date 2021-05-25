
<?php

    if (isset($_POST['input'])) {

        $bdd = new PDO("mysql:host=localhost;dbname=tdl", "root", "");
        $sel = $bdd->prepare('SELECT id FROM liste  WHERE message = ?');
        $sel->execute(array($_POST['input']));
        $recup = $sel->fetchAll();

        var_dump($recup);

    }
    





?>



