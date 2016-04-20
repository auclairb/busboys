<?php 
session_start();
$voyage = $_SESSION['NOM_V'];
$prenom_getted = $_SESSION['PRENOM'];
$nom_getted = $_SESSION['NOM'];

include '../view/bde.php';