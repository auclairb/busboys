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

function queryForDB($bdd, $table, $cond){
	$query_name = "SELECT * FROM " . $table . " WHERE " . $cond;
	$reponse = $bdd->query($query_name);
	return $reponse;
}

//Fonction qui permet de récupérer l'ID d'une personne dans liste_bde
function getID($bdd, $nom, $prenom){
	$reponse = $bdd->query("SELECT ID FROM liste_bde WHERE NOM = '" . $nom . "' AND PRENOM = '" . $prenom . "'");
	return $reponse->fetch()['ID'];
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

//Fonction qui renvoie tous les groupes d'une personne par son ID
function getGroups($bdd, $id){
	$groups = array();
	$cond = "";
	for($i=1; $i<10;$i++){
		$cond .= "P" .strval($i). " = " .$id[0]. " OR ";
	}
	$cond .= "P10 = " .$id[0];
	$query_name = "SELECT * FROM groupes WHERE " . $cond;
	$reponse = $bdd->query($query_name);
	while($donnees = $reponse->fetch()){
		$groups[] = $donnees['NOM_G'];
	}
	return $groups;
}

function getVoyagesDispo($bdd, $id){
	//***** Il faudrait ajouter la possibilité de vérifier qu'on est bien inscrits aux voyages affichés ******
	$query_name = "SELECT NOM_V FROM voyages_dispo WHERE voyages_dispo.DISPO = 1";
	$reponse = $bdd->query($query_name);
	return $reponse->fetchAll();
}

// Retourner tous les membres d'un groupe avec 2 tableaux, un des noms, et un des prenoms
function getPersonnesGroupe($bdd, $group){
	$query_name = "SELECT * FROM groupes WHERE NOM_G = '" .$group. "'";
	$reponse = $bdd->query($query_name);
	$nomsArray = array();
	$prenomsArray = array();
	$donnees_pers = $reponse->fetch();
	for($i=1; $i<11; $i++){
		$P = "P".strval($i);
		if($donnees_pers[$P] != NULL){
			$nomsArray[] = $bdd->query('SELECT * FROM liste_bde WHERE ID = '. $donnees_pers[$P])->fetch()['NOM'];
			$prenomsArray[] = $bdd->query('SELECT * FROM liste_bde WHERE ID = '. $donnees_pers[$P])->fetch()['PRENOM'];
		}
	}
	return array($nomsArray,$prenomsArray);
}

//Fonction pour ajouter un groupe à la BDD
function sendGroupeToDB($bdd, $group, $personnes){
	$nbPers = "";
	$tmp = "";
	for($i=1; $i<=sizeof($personnes); $i++){
		$nbPers .= ",P".strval($i);
		$tmp .= ",'".strval($personnes[$i-1])."'";
	}
	$query_name = "INSERT INTO groupes (NOM_G".$nbPers.") VALUES ('" . $group."'" .$tmp.")";
	$reponse = $bdd->query($query_name);
}

//A debugger
function updateGroupe($bdd, $group, $new_name, $personnes){		
	$set = "NOM_G = '" . $new_name . "'";
	for($i=1; $i<=10; $i++){
		$set .= ",P".strval($i);
		if(i<=sizeof($personnes))
			$tmp .= ",'".strval($personnes[$i-1])."'";
		else
			$tmp .= ",'NULL'";
	}
	$query_name = "UPDATE groupes  SET $set WHERE NOM_G = '" . $group . "'";
	echo $query_name;
	$reponse = $bdd->query($query_name);
}

function getListeEleves($bdd){
	$reponse = $bdd->query("SELECT PRENOM, NOM FROM liste_bde WHERE 1");
	return $reponse->fetchAll();
}
?>