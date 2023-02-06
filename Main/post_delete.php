<?php
session_start();
include_once('./config/mysql.php');

if (!isset($_POST['id'])) {
    echo 'il faut un identifiant valide pour supprimer une recette';
    return;
}

$deleteProduit = $bdd->prepare('DELETE FROM produit WHERE id = :id');
$deleteProduit->execute([
    'id' => $_POST['id'],
]);

header('location: http://localhost/Projet%20PHP&MySQL/Main/index.php');
