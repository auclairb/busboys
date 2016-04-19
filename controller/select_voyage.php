<?php
session_start();
include '../model/select_voyage.php';
$bdd = connectToDB();

$id = $_SESSION['ID'];
// Récupérer les voyages disponibles à la réservation
$voyagesDispo = getVoyagesDispo($bdd, $id);

include '../view/select_voyage.php';