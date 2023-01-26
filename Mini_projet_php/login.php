<?php
if (isset($_POST['envoie'])) {
    if (isset($_POST['email']) && isset($_POST['pseudo']) && isset($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $insertUser = $bdd->prepare('INSERT INTO users(email, pseudo, mdp)VALUES(?, ?, ?)');
        $insertUser->execute(array($email, $pseudo, $password));
    } else {
        echo 'Veuillez compléter tous les champs...';
    }
}
