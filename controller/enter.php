<?php
session_start();
include '../model/enter.php';

//**** Alternative avec BDD
/*
$bdd = connectToDB();
$login = $_POST['LOGIN'];
$pswd = $_POST['PSWD'];
$resultat = checkLogin($bdd, $login, $pswd);
list($id, $nom, $prenom) = getIDNomPrenom($bdd, $login);
*/
//**** alternative HARDCODEE

$login = "mchochod";
$resultat = 1;
$id = 1;
$nom = "Chochod";
$prenom = "Martin";
//Le voyage sera en réalité ajouté après sélection du voyage que l'on veut réserver ***
$voyage = "WEI";



// NE PAS COMMENTER :)
if(!$resultat){
	echo "Mauvais identifiants !"; 
}
else{
	echo "Succès vous êtes connectés !";
	$_SESSION['LOGIN'] = $login;
	$_SESSION['NOM'] = $nom;
	$_SESSION['PRENOM'] = $prenom;
	$_SESSION['ID'] = $id;
	//Même remarque pour le voyage ******************
	$_SESSION['NOM_V'] = $voyage;
	header("Location: eleve.php");
	die();
}

?>