<?php
session_start();
?>

<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/62e09fd665.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/style.css">
    <title>Page delete</title>
</head>

<body>

    <?php include_once('user.php') ?>
    <?php include_once('nav.php') ?>

    <section class="body_fond">
        <img src="./image/grandtriangle.jpg" alt="Image de fond" class="body_fond_img">
        <h1 class="body_fond_title">Suppression du produit</h1>
        <div class="body_fond_bloc centre">
            <form action="post_delete.php" method="POST" class="body_fond_bloc_delete">
                <div class="body_fond_bloc_delete_text white">
                    <label for="id">Voulez vous vraiment supprimer votre produit ? Celle-ci sera définitive</label>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                </div>
                <button type="submit" class="body_fond_bloc_delete_btn">Supprimer</button>
            </form>
        </div>
    </section>

    <?php include_once('footer.php') ?>

</body>

</html>