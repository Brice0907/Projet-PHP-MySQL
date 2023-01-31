<?php
session_start();
$_SESSION = array();
session_destroy();
header('location: http://localhost/Projet%20PHP&MySQL/Main/connexion.php');
