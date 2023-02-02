<?php include_once('./config/mysql.php');

$recupPseudo = $bdd->prepare('SELECT * FROM users WHERE id = ?');
$recupPseudo->execute(array($_SESSION['id']));
if ($recupPseudo->rowCount() > 0) {
    $_SESSION['pseudo'] = $recupPseudo->fetch()['pseudo'];
}
