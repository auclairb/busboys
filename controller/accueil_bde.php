<?php
session_start();
$prenom_getted = $_SESSION['PRENOM'];
$nom_getted = $_SESSION['NOM'];
include '../view/accueil_bde.php';