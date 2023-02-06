<?php
session_start();
include_once('./config/mysql.php');
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
            <form action="post_delete.php" method="POST">
                <div>
                    <label for="id">Identidiant du produit</label>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                </div>
                <button type="submit">La suppression est définitive</button>
            </form>
        </div>

        <?php include_once('footer.php') ?>

</body>

</html>