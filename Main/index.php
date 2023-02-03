<?php session_start(); ?>
<?php if (!$_SESSION['email']) {
    header('location: http://localhost/Projet%20PHP&MySQL/Main/register.php');
} ?>

<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/62e09fd665.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/style.css">
    <title>Home</title>
</head>

<body class="body">

    <?php include_once('user.php') ?>
    <?php include_once('nav.php') ?>

    <section class="body_fond">
        <img src="./image/grandtriangle.jpg" alt="Image de fond" class="body_fond_img">
        <h1 class="body_fond_title">E-SMOCK</h1>
        <h2 class="body_fond_bvn">Bienvenue <?php echo $_SESSION['pseudo'] ?> sur notre site...</h2>
        <div class="body_fond_bloc">
            <div class="body_fond_bloc_haut">
                <a href="create.php" class="body_fond_bloc_haut_btn">Ajout d'un produit</a>
            </div>

            <!-- Contenue venant de la base de donnée -->
            <div class="body_fond_bloc_affichage">
                <?php include_once('read.php') ?>
            </div>

        </div>
    </section>


    <?php include_once('footer.php') ?>

</body>

</html>