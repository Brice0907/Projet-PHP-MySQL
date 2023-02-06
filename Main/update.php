<?php
session_start();
include_once('./config/mysql.php');

if (!isset($_GET['id']) && is_numeric($_GET['id'])) {
    echo ('il faut un identifiant de recette pour le modifier.');
    return;
}

$recupProduitStatement = $bdd->prepare('SELECT * FROM produit WHERE id = :id');
$recupProduitStatement->execute([
    'id' => $_GET['id'],
]);

$produit = $recupProduitStatement->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/62e09fd665.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/style.css">
    <title>Page update</title>
</head>

<body>

    <?php include_once('user.php') ?>
    <?php include_once('nav.php') ?>

    <section class="body_fond">
        <img src="./image/grandtriangle.jpg" alt="Image de fond" class="body_fond_img">
        <h1 class="body_fond_title">Modification du produit</h1>
        <div class="body_fond_bloc centre">
            <form action="post_update.php" method="POST">
                <div>
                    <label for="id"></label>
                    <input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>">
                </div>
                <div class="body_fond_bloc_form_bloc">
                    <label for="produitTitle" class="body_fond_bloc_form_bloc_text white">Titre du produit : </label>
                    <input type="text" name="produitTitle" required value="<?php echo ($produit['title']); ?>">
                </div>
                <div class="body_fond_bloc_form_bloc">
                    <label for="produitDescription" class="body_fond_bloc_form_bloc_text white">Description du produit :</label>
                    <textarea class="body_fond_bloc_form_bloc_description" name="produitDescription" cols="30" rows="10" required>
                    <?php echo strip_tags($produit['descriptionpdt']); ?>
                    </textarea>
                </div>
                <div class="body_fond_bloc_form_bloc">
                    <label for="produitPrice" class="body_fond_bloc_form_bloc_text white">Prix : </label>
                    <input type="number" name="produitPrice" required value="<?php echo ($produit['prix']); ?>">
                </div>
                <button class="body_fond_bloc_form_submit" type="submit">Modifier</button>
            </form>
        </div>
    </section>

    <?php include_once('footer.php') ?>

</body>

</html>