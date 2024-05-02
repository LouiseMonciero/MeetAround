<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <body>
        <?php include "header.php" ?>
        This is the Welcome Page !

    <div class="container">
        <form id="loginForm" action="Connexion.php" method="POST">
            <h2>Connexion</h2>
            <div class="input-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" >Se connecter</button>
            <button type="button" onclick=is_in_data_base($_POST["username"])>S'inscrire</button>
        </form>
    </div>

        <?php
            function is_in_data_base(username, password){
                if (True):
                    return
            }
        ?>
        <?php include "below_page.html" ?>
    </body>
</html>
