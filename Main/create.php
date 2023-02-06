<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="https://kit.fontawesome.com/62e09fd665.js" crossorigin="anonymous"></script>
    <title>Ajout d'un produit</title>
</head>

<body>

    <?php include_once('nav.php') ?>
    <?php include_once('post_create.php') ?>

    <section class="body_fond">
        <img src="./image/grandtriangle.jpg" alt="Image de fond" class="body_fond_img">
        <h1 class="body_fond_title">Ajout d'un produit</h1>
        <div class="body_fond_bloc centre">
            <form method="post" class="body_fond_bloc_form" enctype="multipart/form-data">
                <div class="body_fond_bloc_form_bloc">
                    <label for="produitTitle" class="body_fond_bloc_form_bloc_text white">Titre du produit : </label>
                    <input type="text" name="produitTitle" required autocomplete="off">
                </div>
                <div class="body_fond_bloc_form_bloc">
                    <label for="produitDescription" class="body_fond_bloc_form_bloc_text white">Description du produit :</label>
                    <textarea class="body_fond_bloc_form_bloc_description" name="produitDescription" cols="30" rows="10" required placeholder="Description du produit"></textarea>
                </div>
                <div class="body_fond_bloc_form_bloc">
                    <label for="produitPrice" class="body_fond_bloc_form_bloc_text white">Prix : </label>
                    <input type="number" name="produitPrice" required autocomplete="off">
                </div>
                <button class="body_fond_bloc_form_submit" type="submit" name="ajout">Ajouter</button>
            </form>
        </div>

    </section>

    <?php include_once('footer.php') ?>

</body>

</html>