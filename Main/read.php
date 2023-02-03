<?php
include_once('./config/mysql.php');

$result = $bdd->prepare('SELECT * FROM produit');
$result->execute();

while ($produit = $result->fetch(PDO::FETCH_OBJ)) {
?>

    <div class="read">
        <div>
            <strong>Nom du produit</strong> : <?= $produit->title ?>
        </div>
        <div>
            <strong>Description</strong> : <?= $produit->descriptionpdt ?>
        </div>
        <div>
            <strong>Prix</strong> : <?= $produit->prix ?>€
        </div>
        <div>
            <strong>pseudo</strong> : <?= $produit->pseudo ?>
        </div>
    </div>

<?php
}
