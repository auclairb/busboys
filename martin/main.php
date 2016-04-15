<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top">
    <?php //On inclut le code avec toutes les fonctions pour interagir avec la BDD
    include 'functions.php';?>  

    <?php //On ouvre une connexion à la BDD
    $bdd = connectToDB();?>
    
    <?php //Instanciation de variables qu'on s'arrangera pour récupérer en POST ou GET
    
    /*
    $id = $_SESSION['ID'];
    $nom_getted = $_SESSION['NOM'];
    $prenom_getted = $_SESSION['PRENOM'];
    */

    //******A enlever quand on récupérera l'ID
    $nom_getted = "Chochod";
    $prenom_getted = "Martin";
    $id = getID($bdd, $nom_getted, $prenom_getted);
    
    //Tableau des groupes de la personne
    $groupes_array = getGroups($bdd, $id);
    //Récupérer tous les membres du groupe
    list($noms_array,$prenoms_array) = getPersonnesGroupe($bdd, "BusBoys");
    ?>

</br></br><strong>AFFICHER LES VOYAGES DISPONIBLES </strong></br>
    <?php // AFFICHER LES VOYAGES 
    $reponse_voyages = getVoyagesDispo($bdd, $id);
    while($donnees_voyages = $reponse_voyages->fetch()){
        echo $donnees_voyages['NOM_V'];
        echo "</br>";
    }
    ?>

</br></br><strong>AFFICHER LES GROUPES DU MEC </strong></br>

<ul class="nav nav-pills nav-stacked">
        <?php //AFFICHER LES GROUPES DU MEC (CONNU PAR SON ID) 
            foreach ($groupes_array as $groupe){?>
        <li role="presentation" class="active"><a href="#"> <?php echo $groupe;?></a></li>
        <?php } ?>
    </ul>

</br></br><strong>AFFICHER LES MEMBRES DU GROUPE BUSBOYS </strong></br>
    <?php //AFFICHER LES MEMBRES D'UN GROUPE    
    for($i=0; $i<sizeof($noms_array) && $i<sizeof($prenoms_array); $i++){
        echo "Participant " . strval($i+1) . " ". $noms_array[$i] . " ". $prenoms_array[$i]."</br>";
    }
    ?>

</body>

</html>
