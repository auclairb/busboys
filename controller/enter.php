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
	header("Location: eleve.php");
	die();
}

?>