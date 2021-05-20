<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>To do list</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="index_body">
<header id="tdl_header">
    <div id="header_but">
        <div id="tdl_header_div1">
            <h1>To Do List</h1>
        </div>
        <div id="lien_button">
            <button id="inscription">Inscription</button>
            <button id="connexion">Connexion</button>
            <a style="margin-left: 25px" href="todolist.php">todolist</a>
        </div>
    </div>
</header>



<main id="index_main">
    <section id="index_main_sec1">
        <div id="index_main_sec1_div1">
            <article id="index_article1">
                <form method="post" name="Connexion" id="connexion_form">
                    <legend id="legend_connexion">Connexion</legend>
                    <input type="email" placeholder="email" aria-label="email" id="email-co" />
                    <input type="password" placeholder="password" aria-label="pasword" id="password-co" />
                    <input type="submit" id="connexion-submit" value="Se Connecter" />
                </form>
            </article>
            <article id="index_article2">
                <form method="post" name="inscription" id="inscription_form">
                    <legend id="legend_inscription">Inscription</legend>
                    <p class="error" style="display: none" id="passwordError">Le mot de passe doit contenir au moins 8 characteres dont majuscule, minuscule et symbole</p>
                    <p class="error" style="display: none" id="emailError">Cet Email est déja pris</p>
                    <p class="error" style="display: none" id="passwordVError">Les mot de passes ne correspondent pas !</p>
                    <input placeholder="email" aria-placeholder="email" aria-label="email" type="email" id="email" required />
                    <input type="text" id="nom"  placeholder="nom" aria-label="nom" required />
                    <input type="text"  placeholder="prénom" aria-label="prénom" id="prenom" required />
                    <input type="password"  placeholder="password" aria-label="password" id="password" required />
                    <input placeholder="confirmer le password" aria-label="passwor" type="password" id="passwordV" required />
                    <input type="submit" id="inscription-submit" value="S'inscrire" />
                </form>
            </article>
        </div>
    </section>
</main>
<footer id="index_footer">
    <p>Copyright 2021 © Evan Azemard, Clément Nahmens To Do list | Tous droits réservés</p>
</footer>
<script src="script.js"></script>
</body>
</html>



