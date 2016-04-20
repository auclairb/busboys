<?php
session_start();
include '../model/enter.php';

//**** Alternative avec BDD
$bdd = connectToDB();
if(!isset($_POST['LOGIN_BDE']) || !isset($_POST['PSWD'])){
	echo "Identifiants non renseignés </br>";
	die();
}
$login = $_POST['LOGIN_BDE'];
$pswd = $_POST['PSWD'];
$resultat = checkLogin($bdd, $login, $pswd);
//Le voyage sera en réalité ajouté après sélection du voyage que l'on veut réserver ***
$voyage = "WEI";

//*********** alternative HARDCODEE ****************
/*
$login = "mchochod";
$resultat = 1;
$id = 1;
$nom = "Chochod";
$prenom = "Martin";
//Le voyage sera en réalité ajouté après sélection du voyage que l'on veut réserver ***
$voyage = "WEI";
*/
//***********Fin alternative HARDCODEE ********

// NE PAS COMMENTER :)
if(!$resultat){
	header('Location:login_admin.php?login_admin_failure=true'); 
}
else{
	echo "Succès vous êtes connectés !</br></br>";
	list($id, $nom, $prenom) = getIDNomPrenom($bdd, $login)[0];
	$_SESSION['LOGIN_BDE'] = $login;
	$_SESSION['LOGIN'] = $login;
	$_SESSION['NOM'] = $nom;
	$_SESSION['PRENOM'] = $prenom;
	$_SESSION['ID'] = $id;
	//Même remarque pour le voyage ******************
	$_SESSION['NOM_V'] = $voyage;
	header("Location: accueil_bde.php");
	die();
}