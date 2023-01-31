<?php

if (isset($_POST['envoie'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);

        // On compare l'email avec celui dans la BDD
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $recupUser->execute(array($email));

        // On véréfie si l'email correspond à un email dans notre BDD
        if ($recupUser->rowCount() > 0) {

            $hash = $recupUser->fetch()['mdp'];

            // Si oui on compare le password grace à password_verify
            if (password_verify($_POST['password'], $hash)) {

                $recupUserData = $bdd->prepare('SELECT * FROM users WHERE email = ? AND mdp = ?');
                $recupUserData->execute(array($email, $hash));

                $_SESSION['email'] = $email;
                // $_SESSION['pseudo'] = $recupUserData->fetch()['pseudo'];
                $_SESSION['id'] = $recupUserData->fetch()['id'];
            } else {
                echo 'Votre mot de passe ou email est incorrect...';
            }

            header('location: http://localhost/Projet%20PHP&MySQL/Main/index.php');
        } else {
            echo 'Votre mot de passe ou email est incorrect...';
        }
    } else {
        echo 'Veuillez compléter tous les champs...';
    }
}
