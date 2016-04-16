<?php
session_start();

include '../model/enter.php';

$bdd = connectToDB();
//$resultat = checkLogin($bdd, $login, $pswd);
$resultat = 0;

if(!$resultat){
	echo "Mauvais identifiants !"; 
}
else{
	echo "Succès vous êtes connectés !";
/*
	$id = $donnees['ID'];
	$_SESSION['NOM'] = getNom($bdd, $id);
	$_SESSION['PRENOM'] = getPrenom($bdd, $id);
	$_SESSION['ID'] = $id;*/
	header("Location: eleve.php");
	die();
}

?>