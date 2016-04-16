<?php
session_start();

function connectToDB(){
	try{
	// Connexion aux bases de données
		$bdd = new PDO('mysql:host=localhost; dbname=projet_igr; charset=utf8', 'root', '');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $bdd;
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
}

//Fonction qui permet de récupérer le nom par ID
function getNom($bdd, $id){
	$reponse = $bdd->query("SELECT NOM FROM liste_bde WHERE ID = '" . $id . "'");
	return $reponse->fetch()['NOM'];
}

//Fonction qui permet de récupérer le prénom par ID
function getPrenom($bdd, $id){
	$reponse = $bdd->query("SELECT PRENOM FROM liste_bde WHERE ID = '" . $id . "'");
	return $reponse->fetch()['PRENOM'];
}

function checkLogin($bdd, $login, $pswd){
	$query_name = "SELECT * FROM liste_bde WHERE LOGIN = '" . $login . "' AND MDP = '" . $pswd."'";
	$reponse = $bdd->query($query_name);
	if($donnees =$reponse->fetch()){
		echo "Succès vous êtes connectés !";
		$id = $donnees['ID'];
		$_SESSION['NOM'] = getNom($bdd, $id);
		$_SESSION['PRENOM'] = getPrenom($bdd, $id);
		$_SESSION['ID'] = $id;
		return $id; 
	}
	else
		echo "Mauvais identifiants !"; 
}

$bdd = connectToDB();
$id = checkLogin($bdd, "mchochod", "1234");	
echo "<br>ID vaut : ".$id;
?>