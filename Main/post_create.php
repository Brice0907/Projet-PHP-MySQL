<?php
include_once('./config/mysql.php');
include_once('variable.php');

if (isset($_POST['ajout'])) {
    if (isset($_POST['produitTitle']) && isset($_POST['produitDescription']) && isset($_POST['produitPrice'])) {

        $produitTitle = htmlspecialchars($_POST['produitTitle']);
        $descriptionpdt = htmlspecialchars($_POST['produitDescription']);

        $insertProduit = $bdd->prepare('INSERT INTO produit(title, descriptionpdt, prix, userid, pseudo) VALUE (?, ?, ?, ?, ?)');
        $insertProduit->execute(array($produitTitle, $descriptionpdt, $_POST['produitPrice'], $loggedUser['id'], $pseudoUser['pseudo']));

        header('location: http://localhost/Projet%20PHP&MySQL/Main/index.php');
    } else {
        echo 'il manque des renseignements';
    }
}
