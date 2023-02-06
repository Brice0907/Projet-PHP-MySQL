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
            <div class="read_btn">
                <div class="read_btn_bloc">
                    <a href="update.php" class="read_btn_bloc_text">Editer le produit</a>
                    <a href="delete.php" class="read_btn_bloc_text">Supprimer le produit</a>
                </div>
            </div>
        <?php endif; ?>
    </div>

<?php
}
