<?php
include_once('./config/mysql.php');

$result = $bdd->prepare('SELECT * FROM produit');
$result->execute();

while ($produit = $result->fetch(PDO::FETCH_OBJ)) {
?>

    <div class="read">
        <div class="read_title">
            <div>Nom du produit : <?= $produit->title ?></div>
        </div>
        <div class="read_description">
            <div>Description : <?= $produit->descriptionpdt ?></div>
        </div>
        <div class="read_bloc">
            <div class="read_bloc_pseudo">
                <div>Pseudo: <?= $produit->pseudo ?></div>
            </div>
            <div class="read_bloc_price">
                <div>Prix: <?= $produit->prix ?>€</div>
            </div>
        </div>
        <?php
        if (isset($loggedUser) && $produit->userid === $loggedUser['id']) : ?>
            <div>
                <div>Editer le produit</div>
                <div>Supprimer le produit</div>
            </div>
        <?php endif; ?>
    </div>

<?php
}
