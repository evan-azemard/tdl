<!DOCTYPE html>
<html>

<head>
    <title>To do list</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <button id="inscription">Inscription</button>
        <button id="connexion">Connexion</button>
    </header>

    <main id="index_main">
        <section id="index_main_sec1">
            <div id="index_main_sec1_div1">
                <!-- formulaire inscription -->
                <article id="index_article1">
                    <form method="post" action="" id="inscription-form">
                        <div class="input-zone">
                            <label for="email">Email:</label>
                            <input type="email" id="email" required />
                        </div>

                        <p class="error" id="emailError">Cet Email est déja pris</p>
                        <div class="input-zone">
                            <label for="nom">Nom: </label>
                            <input type="text" id="nom" required />
                        </div>

                        <div class="input-zone">
                            <label for="prenom">Prénom: </label>
                            <input type="text" id="prenom" required />
                        </div>

                        <div class="input-zone">
                            <label for="password">Mot de passe:</label>
                            <input type="password" id="password" required />
                        </div>
                        <p class="error" id="passwordError">Le mot de passe doit contenir au moins 8 characteres dont majuscule, minuscule et symbole</p>

                        <div class="input-zone">
                            <label for="passwordV">Confirmation Mot de Passe:</label>
                            <input type="password" id="passwordV" required />
                        </div>
                        <p class="error" id="passwordVError">Les mot de passes ne correspondent pas !</p>

                        <input type="submit" id="inscription-submit" value="S'inscrire" />
                    </form>
                </article>

                <!-- formulaire connexion -->
                <article id="index_article2">
                    <form method="post" action="" id="connexion-form">
                        <div class="input-zone">
                            <label for="email-co">Email:</label>
                            <input type="email" id="email-co" />
                        </div>

                        <div class="input-zone">
                            <label for="password-co">Mot de passe:</label>
                            <input type="password" id="password-co" />
                        </div>
                        <input type="submit" id="connexion-submit" value="Se Connecter" />
                    </form>
                </article>
            </div>
        </section>

    </main>
    <footer id="index_footer">
        <p>Copyright 2021 © Evan Azemard Clément Nahmens To Do list | Tous droits réservés</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>