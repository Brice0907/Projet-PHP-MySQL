<?php
if (isset($_POST['envoie'])) {
    if (isset($_POST['email']) && isset($_POST['pseudo']) && isset($_POST['password'])) {

        $email = htmlspecialchars($_POST['email']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $insertUser = $bdd->prepare('INSERT INTO users(email, pseudo, mdp)VALUES(?, ?, ?)');
        $insertUser->execute(array($email, $pseudo, $password));

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ? AND pseudo = ? AND mdp = ?');
        $recupUser->execute(array($email, $pseudo, $password));
        if ($recupUser->rowCount() > 0) {
            $_SESSION['email'] = $email;
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['id'] = $recupUser->fetch()['id'];
        }
        header('location: http://localhost/Projet%20PHP&MySQL/Main/index.php');
    } else {
        echo 'Veuillez compléter tous les champs...';
    }
}
