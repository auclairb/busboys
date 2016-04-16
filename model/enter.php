<?php 
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
function checkLogin($bdd, $login, $pswd){
	$query_name = "SELECT * FROM liste_bde WHERE LOGIN = '" . $login . "' AND MDP = '" . $pswd."'";
	$reponse = $bdd->query($query_name);
	return $reponse->fetch();
}
?>