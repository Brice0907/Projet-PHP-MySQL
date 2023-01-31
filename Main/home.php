<?php session_start();
if (!$_SESSION['id']) {
    header('location: http://localhost/Projet%20PHP&MySQL/Main/connexion.php');
}
?>

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

    <?php include_once('header.php') ?>

    <div>TU ES BIEN SUR LA PAGE HOME</div>

    <a href="deconnexion.php">
        <button>Se déconnecter</button>
    </a>

</body>

</html>