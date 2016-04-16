<?php
session_start();
include '../model/eleve.php';

// ******* IMPORTANT : décommenter cette section et commenter tout le reste jusque l'avant -dernière ligne pour vous ***********
//DEBUT SECTION A DECOMMENTER
/*
$nom_getted = "Chochod";
$prenom_getted = "Martin";
$id = getID($bdd, $nom_getted, $prenom_getted);

$voyages = array(array("WEI (aller)"),array("WEI (retour)"), array("WEE"));
$groupes_array = array("Busboys", "Tivi+", "Bresil");
$prenoms_array = array("Benjamin", "Bernardo", "Augustin", "Martin");
$noms_array = array("Auclair", "Cordeiro", "Morel", "Chochod");
$liste_eleves = array(array('PRENOM'=> "Augustin", 'NOM'=>"MOREL"), array('PRENOM'=> "Godefroy", 'NOM'=>"Galas"));
*/
//FIN SECTION A DECOMMENTER


//Connexion à la BDD
$bdd = connectToDB();    

 //Instanciation de variables qu'on s'arrangera pour récupérer en POST ou GET 
$id = $_SESSION['ID'];
$nom_getted = $_SESSION['NOM'];
$prenom_getted = $_SESSION['PRENOM'];

	
// Récupérer les voyages disponibles à la réservation
$voyages = getVoyagesDispo($bdd, $id); //**** On veut vérifier que la personne est inscrite à ce voyage


//Tableau des groupes de la personne
$groupes_array = getGroups($bdd, $id);

//Récupérer tous les membres du groupe
list($noms_array,$prenoms_array) = getPersonnesGroupe($bdd, "BusBoys");

// Récupérer la liste BDE
$liste_eleves = getListeEleves($bdd);

// ****** PARTIE A CONSERVER TOUJOURS
include '../view/eleve.php';
?>