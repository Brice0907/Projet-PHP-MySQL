<?php
if (isset($_SESSION['id'])) {
    $loggedUser = ['id' => $_SESSION['id']];
    $pseudoUser = ['pseudo' => $_SESSION['pseudo']];
}
