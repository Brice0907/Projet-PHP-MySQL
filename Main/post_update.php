<?php
session_start();

include_once('./config/mysql.php');

if (!isset($_POST['id']) || !isset($_POST['produitTitle']) || !isset($_POST['produitDescription']) || !isset($_POST['produitPrice'])) {
    echo 'Il manque des informations pour permettre l\'édition du formulaire.';
    return;
}

$id = $_POST['id'];
$title = $_POST['produitTitle'];
$text = $_POST['produitDescription'];
$price = $_POST['produitPrice'];

$insertProduitStatement = $bdd->prepare('UPDATE produit SET title = :title, descriptionpdt = :descriptionpdt, prix = :price WHERE id = :id');
$insertProduitStatement->execute([
    'title' => $title,
    'descriptionpdt' => $text,
    'price' => $price,
    'id' => $id,
]);

header('location: http://localhost/Projet%20PHP&MySQL/Main/index.php');
