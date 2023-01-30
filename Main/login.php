<?php

if (isset($_POST['envoie'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);

        // On compare nos données avec celles dans la BDD
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $recupUser->execute(array($email));

        // On véréfie si l'email correspond à un email dans notre BDD
        if ($recupUser->rowCount() > 0) {

            $hash = $recupUser->fetch()['mdp'];

            // Si oui on compare le password grace à password_verify
            if (password_verify($_POST['password'], $hash)) {

                $_SESSION['email'] = $email;
                $_SESSION['id'] = $recupUser->fetch()['id'];

                echo $_SESSION['id'];
            } else {
                echo 'Votre mot de passe ou email est incorrect...';
            }
        } else {
            echo 'Votre mot de passe ou email est incorrect...';
        }
    } else {
        echo 'Veuillez compléter tous les champs...';
    }
}
