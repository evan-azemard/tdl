<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do list</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="index_body">
    <header id="index_header">
        <div id="index_header_div1">
            <h1>To Do List</h1>
        </div>
    </header>
    <main id="index_main">
        <section id="index_main_sec1">
            <div id="index_main_sec1_div1">
                <article id="index_article1">
                    <form method="post" name="Connexion" id="form_connexion">
                        <legend id="legend_connexion">Connexion</legend>
                        <input aria-label="pseudo" type="text" name="c_pseudo" id="c_pseudo" placeholder="Login:">
                        <input aria-label="password" type="password" name="c_password" id="c_password" placeholder="Password:">
                        <input aria-label="connexion" type="submit" name="connexion" id="connexion-submit" value="Se connecter !">
                    </form>
                </article>
                <article id="index_article2">
                    <form method="post" name="inscription" id="form_inscription">
                        <legend id="legend_inscription">Inscription</legend>
                        <input aria-label="pseudo" type="text" name="nom" id="nom" placeholder="Nom:">
                        <input aria-label="pseudo" type="text" name="prenom" id="prenom" placeholder="Prenom:">
                        <input aria-label="pseudo" type="text" name="pseudo" id="pseudo" placeholder="Pseudo:">
                        <input aria-label="password" type="password" name="password" id="password" placeholder="Password:">
                        <input aria-label="r_password" type="password" name="r_password" id="r_password" placeholder="Répéter le password">
                        <input aria-label="inscription" type="submit" name="inscription" id="inscription-submit" value="S'inscrire !">
                    </form>
                </article>
            </div>
        </section>
    </main>
    <footer id="index_footer">
        <p>Copyright 2021 © Evan Azemard To Do list | Tous droits réservés</p>
    </footer>
</body>
<script rel="text/javascript" src="script.js"></script>

</html>