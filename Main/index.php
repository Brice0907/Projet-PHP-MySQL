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
    <link rel="stylesheet" href="./styles/style.css">
    <title>Home</title>
</head>

<body>

    <?php include_once('nav.php') ?>

    <div>TU ES BIEN SUR LA PAGE HOME</div>
    <?php 'Bienvenur' . $_SESSION['email'] ?>
    <!-- re faire une recherche dans la bdd pour trouvere le pseudo et écrire Bienvenue X -->

</body>

</html>