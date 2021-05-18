<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do list</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
</head>
<body id="index_body">
<header id="tdl_header">
    <div id="header_but">
        <div id="tdl_header_div1">
            <h1>To Do List</h1>
        </div>
        <div id="lien_button">
            <a href="deconnexion.php">Déconnexion</a>
        </div>
    </div>
</header>
<main id="tdl_main">
    <section id="tdl_section">
        <article id="art1">
            <div  class="form_ajouter">
                <legend>Ajouter une tache</legend>
                <input aria-label="titre" id="tachename"  placeholder="Nom de la tache" type="text">
                <p><span id="buttonajouter" onclick="getValue();">Ajouter</span></p>
            </div>
        </article>
        <article id="art2">
            <div class="titre_list">
                <h1 class="h1titre">Liste des taches.</h1>
            </div>

            <br>
        </article>
        <article id="art3">
            <div class="titre_list">
                <h1 class="h1titre">Taches accomplie.</h1>
            </div>
            <div class="div_list">
                <div class="div_list_1">
                    <div class="titre_list">
                        <h2>titre</h2>
                    </div>
                    <div class="description_list">
                        <p>description</p>
                    </div>
                </div>
                <div class="div_list_2">
                    <p>Créer le <br>28/06/2021</p>
                </div>
                <div class="div_list_2">
                    <p>Finit le <br>28/06/2021</p>
                </div>
            </div>
            <br>
        </article>
    </section>
</main>
<footer id="index_footer">
    <p>Copyright 2021 © Evan Azemard, Clément Nahmens To Do list | Tous droits réservés</p>
</footer>
</body>
<script src="script.js"></script>
</html>

