<?php
session_start();
	print_r($_POST);

if(ISSET($_POST['NOM_V']))
	echo "WOUHOUOOU";
include '../model/eleve.php';

// ******* IMPORTANT : décommenter cette section et commenter tout le reste jusque l'avant -dernière ligne pour vous ***********
// ********** DEBUT SECTION A DECOMMENTER *******************************
/*
$nom_getted = "Chochod";
$prenom_getted = "Martin";
$id = 1;
$voyage = "WEI";

$voyages = array(array("WEI (aller)"),array("WEI (retour)"), array("WEE"));
$groupes_array = array("Busboys", "Tivi+", "Bresil");
$BusBoys_prenoms_array = array("Benjamin", "Bernardo", "Augustin", "Martin");
$BusBoys_noms_array = array("Auclair", "Cordeiro", "Morel", "Chochod");

$Tivi_prenoms_array = array("Gabin", "Juliette", "Augustin");
$Tivi_noms_array = array("Marignier", "Soler", "Morel");

$Bresil_prenoms_array = array("Gogo", "Bernardo", "Mike", "Dilma");
$Bresil_noms_array = array("Galaçao", "Cordeiro", "Botazzo", "Roussef");

$all_groupes_personnes = array(array($BusBoys_noms_array, $BusBoys_prenoms_array), array($Tivi_noms_array,$Tivi_prenoms_array), array($Bresil_noms_array, $Bresil_prenoms_array));
$liste_eleves = array(array('PRENOM'=> "Augustin", 'NOM'=>"MOREL"), array('PRENOM'=> "Godefroy", 'NOM'=>"Galas"));
*/
// ********** FIN SECTION A DECOMMENTER ********************************


// ********** DEBUT SECTION A COMMENTER ********************************
//Connexion à la BDD
$bdd = connectToDB();
 //Instanciation de variables qu'on s'arrangera pour récupérer en POST ou GET 
$id = $_SESSION['ID'];
$nom_getted = $_SESSION['NOM'];
$prenom_getted = $_SESSION['PRENOM'];
$voyage = $_SESSION['NOM_V'];
	
// Récupérer les voyages disponibles à la réservation
$voyages = getVoyagesDispo($bdd, $id); //**** On veut vérifier que la personne est inscrite à ce voyage


//Tableau des groupes de la personne
$groupes_array = getGroups($bdd, $id);


//Récupérer tous les membres de tous les groupes
$all_groupes_personnes = array();

foreach($groupes_array as $group){
	$nom_array = array();
	$prenom_array = array();
	list($nom_array,$prenom_array) = getPersonnesGroupe($bdd, $group);
	$group_name = "'" . $group . "'";
	$all_groupes_personnes[$group_name] = array($nom_array,$prenom_array);
}

// Récupérer la liste BDE
$liste_eleves = getListeEleves($bdd);

// ********** FIN SECTION A COMMENTER  ********************************



// ****** PARTIE A CONSERVER TOUJOURS
include '../view/eleve_dyn.php';
?>