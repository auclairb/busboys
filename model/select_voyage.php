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

function getVoyagesDispo($bdd, $id){
	//***** Il faudrait ajouter la possibilité de vérifier qu'on est bien inscrits aux voyages affichés ******
	$query_name = "SELECT NOM_V FROM voyages_dispo WHERE voyages_dispo.DISPO = 1";
	$reponse = $bdd->query($query_name);
	return $reponse->fetchAll();
}