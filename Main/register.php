<?php session_start(); ?>

<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Register</title>
</head>

<body>

    <!-- Navigation de connection -->
    <?php include_once('header.php') ?>
    <?php include_once('inscription.php') ?>

    <!-- Formulaire d'inscription -->
    <div class="body_inscription">
        <h1 class="body_inscription_title">Inscrivez vous</h1>
        <form method="post" class="body_inscription_form">
            <div class="body_inscription_form_bloc">
                <label for="email" class="body_inscription_form_bloc_text">Email :</label>
                <input type="email" id="email" name="email" class="body_inscription_form_bloc_input" required autocomplete="off">
            </div>
            <div class="body_inscription_form_bloc">
                <label for="text" class="body_inscription_form_bloc_text">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" class="body_inscription_form_bloc_input" required autocomplete="off">
            </div>
            <div class="body_inscription_form_bloc">
                <label for="password" class="body_inscription_form_bloc_text">Mot de passe :</label>
                <input type="password" id="password" name="password" class="body_inscription_form_bloc_input" required minlength="5" autocomplete="off">
            </div>
            <button class="body_inscription_btn" type="submit" name="envoie">S'inscrire</button>
        </form>
    </div>

</body>

</html>