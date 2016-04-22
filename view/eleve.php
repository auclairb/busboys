<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="../view/js/bootstrap.min.js"></script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>BUS PLANNER</title>

        <!-- Bootstrap core CSS -->
        <link href="../view/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="../view/css/bootstrap-theme.min.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../view/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../view/css/main.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../view/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- Barre de navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="login.php">Telecom Bus Planner</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="select_voyage.php">Accueil</a></li>
                <li><a href="a_propos.php">A propos</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

        <div class="container theme-showcase" role="main">
          <!-- En-tête -->
          <div class="jumbotron">
            <h1>Bienvenue <?php echo $prenom_getted . " !"; ?></h1>
            <p>Ici vous allez pouvoir organiser vos voyages. Vous pouvez apporter des modification à vos réservations jusqu'à la date fixée par le BDE.</p>
          </div>


            <!-- Formulaire ALLER -->
            <div class="container-fluid" id="formulaire_aller">
              <!-- Page de connexion -->
              <div class="page-header">
                <h1>Voyage <strong> <?php echo $voyage; ?> aller</strong> de <?php echo $prenom_getted . " " . $nom_getted; ?></h1>
              </div>

              <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Mes groupes
                            <button type="button" class="close" data-toggle="modal" data-target="#myModal">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class = "panel-body" style="background-color: #f0f0f5">
                            Avec quel groupe d'amis voulez-vous passer l'aller :
                        </div>

                        <div class="list-group">
                        <?php
                        $button_group_id = 0;
                        foreach ($groupes_array as $groupe){?>
                            <button type="button" class="list-group-item " onclick= <?php echo stripslashes("\"javascript:allerShowGroupMembers(" . strval($button_group_id) . ");\"");?> id= <?php echo "'allerButtonGroup". strval($button_group_id) . "'";?> >
                            <?php echo $groupe;
                            $button_group_id +=1;
                            ?>
                            </button>
                        <?php } ?>
                        </div>
                        <div class="panel-footer">
                            <div style = "text-align:right">
                                <button type="button" class="btn btn-primary" >Modifier</button>
                                &nbsp;
                                <button type="button" class="btn btn-danger" onclick="javascript:supprimerGroupe(allerClickedGroup)">Supprimer</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class ="panel panel-info">
                        <div class ="panel-heading">
                            Participants du groupe
                        </div>
                        <div class = "panel-body" style="background-color: #f0f0f5">
                            Vos compagnons de voyage :
                        </div>

                        <?php
                        $groupId = 0;
                        foreach($all_groupes_personnes as $groupe_selected){
                                $noms_array = $groupe_selected[0];
                                $prenoms_array = $groupe_selected[1];
                        ?>
                        <ul class="list-group" style="display:none" <?php echo "id='allerGroup".strval($groupId)."'"?> >
                            <?php //AFFICHER LES MEMBRES D'UN GROUPE
                            for($i=0; $i<sizeof($noms_array) && $i<sizeof($prenoms_array); $i++){ ?>
                            <li class="list-group-item">
                                <?php echo $prenoms_array[$i] . " ". $noms_array[$i]. "<br>"; ?>
                            </li>
                            <?php
                            }
                        $groupId +=1;
                        ?>
                        </ul>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Options:
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    Répartition:
                                </div>
                            </div>
                            <div class="radio">
                                <label>
                                        <input type="radio"> Ligne
                                </label>
                            </div>

                            <div class="radio">
                                <label><input type="radio"> Bloc</label>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    Placement dans le bus:
                                </div>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio"> A l'avant
                                </label>
                            </div>

                            <div class="radio">
                                <label><input type="radio"> Au milieu
                                </label>
                            </div>

                            <div class="radio">
                                <label><input type="radio"> A l'arrière
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-8">
                     <button class="btn btn-lg btn-info btn-block" type="submit" onclick="javascript:goToRetour();">SUIVANT</button>
                </div>
            </div>
        </div>
        <!-- Fin du formulaire ALLER -->









        <!-- Formulaire RETOUR -->
        <div class="container-fluid" id="formulaire_retour" style="display:none">
          <div class="page-header">
            <h1>Voyage <strong> <?php echo $voyage; ?> retour</strong> de <?php echo $prenom_getted . " " . $nom_getted; ?></h1>
          </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Mes groupes:
                        <button type="button" class="close" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class = "panel-body" style="background-color: #f0f0f5">
                        Avec quel groupe d'amis voulez-vous passer le retour :
                    </div>

                    <div class="list-group">
                        <?php
                        $button_group_id = 0;
                        foreach ($groupes_array as $groupe){?>
                        <button type="button" class="list-group-item" onclick= <?php echo stripslashes("\"javascript:retourShowGroupMembers(" . strval($button_group_id) . ");\"");?> id= <?php echo "'retourButtonGroup". strval($button_group_id) . "'";?> >
                        <?php echo $groupe;
                        $button_group_id +=1;
                        ?>
                        </button>
                        <?php } ?>
                    </div>
                    <div class="panel-footer">
                        <div style = "text-align:right">
                            <button type="button" class="btn btn-primary" >Modifier</button>
                            &nbsp;
                            <button type="button" class="btn btn-danger" onclick="javascript:supprimerGroupe(retourClickedGroup)">Supprimer</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class ="panel panel-success">
                    <div class ="panel-heading">
                        Participants du groupe
                    </div>
                    <div class = "panel-body" style="background-color: #f0f0f5">
                        Vos compagnons de voyage :
                    </div>

                    <?php
                    $groupId = 0;
                    foreach($all_groupes_personnes as $groupe_selected){
                            $noms_array = $groupe_selected[0];
                            $prenoms_array = $groupe_selected[1];
                    ?>
                    <ul class="list-group" style="display:none" <?php echo "id='retourGroup".strval($groupId)."'"?> >
                        <?php //AFFICHER LES MEMBRES D'UN GROUPE
                        for($i=0; $i<sizeof($noms_array) && $i<sizeof($prenoms_array); $i++){ ?>
                        <li class="list-group-item">
                            <?php echo $prenoms_array[$i] . " ". $noms_array[$i]. "<br>"; ?>
                        </li>
                        <?php
                        }
                            $groupId +=1;
                            ?>
                    </ul>
                    <?php } ?>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Options:
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                Répartition:
                            </div>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"> Ligne
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio"> Bloc
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                Placement dans le bus:
                            </div>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio"> A l'avant
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio"> Au milieu
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio"> A l'arrière
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <button class="btn btn-lg btn-warning btn-block" type="submit" onclick="javascript:goBackToAller();">RETOUR</button>
            </div>
            <div class="col-sm-4">
                <button class="btn btn-lg btn-success btn-block" type="submit" onclick="javascript:submitAllerEtRetour();">SOUMETTRE</button>
            </div>
        </div>
    </div>
    <!-- Fin du formulaire RETOUR -->





    <!-- Modal pour l'ALLER -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times</span></button>
    				<h4 class="modal-title" id="myModalLabel">Créer un nouveau groupe de voyage :</h4>
    			</div>
    			<div class="modal-body">
    				<div class="row">
    					<div class="col-lg-12">
    						<div class="input-group">
    							<span class="input-group-addon">Nom du futur groupe</span>
    							<input type="text" class="form-control" aria-label="..." autofocus required>
    						</div>
    					</div>
    				</div>
                    </br>

        			<div class="row">
        				<div class="col-md-4">
        					<div class="panel panel-default">
        						<div class="panel-heading">Liste des élèves:
        						</div>
        						<div class="list-group">
        						<?php 
        						$eleveId = 0;
        						foreach($liste_eleves as $eleve){ ?>
        							<button type="button" class="list-group-item" id= <?php echo "'eleve" . $eleveId . "'"?> onclick = <?php echo stripcslashes("\"addEleve(" . $eleveId . ",'" . $eleve['PRENOM'] ."','". $eleve['NOM'] . "');\""); ?>>
        							<?php echo $eleve['PRENOM'] . " " . $eleve['NOM']; ?>
        							</button>
        					<?php 
        					$eleveId +=1;
        					} ?>
        					</div>
        				</div>
        			</div>

    				<div class="col-md-4">
    					<div class="panel panel-default">
    						<div class="panel-heading">Liste des membres du groupe :</div>
    						<ul class="list-group" id="participants"></ul>
    					</div>
    				</div>

    				<div class="modal-footer">
    					<button type="button" class="btn btn-primary" data-dismiss="modal">Sauvegarder</button>
    				</div>
    			</div>
    		</div>
    	</div>

    	<script type="text/javascript">

    		function addEleve(id,prenom,nom){
    			var tmp = "eleve" + parseInt(id);
    			document.getElementById("participants").innerHTML += "<li class='list-group-item'>" + prenom + " " + nom + "</li>";
    		}
    		var allerClickedGroup, retourClickedGroup;
    		function goToRetour(){
    			document.getElementById('formulaire_aller').style.display = 'none';
    			document.getElementById('formulaire_retour').style.display = 'block';
    		}
    		function goBackToAller(){
    			document.getElementById('formulaire_retour').style.display = 'none';
    			document.getElementById('formulaire_aller').style.display = 'block';
    		}
    		function submitAllerEtRetour(){
    			window.location.href = "../controller/validation.php";
    		}
    		
    		function allerHideAllMembers(){
    			var i;
    			for(i = 0; i<=10; i++){
    				try{
    				var group_id = "allerGroup" + parseInt(i) ; 
    				document.getElementById(group_id).style.display = 'none';
    			}
    			catch(err){
    			};

    			}
    		}
    		function allerShowGroupMembers(j){
    			allerClickedGroup = j;
    			allerHideAllMembers();
    			var group_id = "allerGroup" + parseInt(j);
    			//alert(group_id);
    			document.getElementById(group_id).style.display = 'block';
    		}
    		//Le groupe sera supprimé pour l'aller comme pour le retour
    		function supprimerGroupe(k){
    			if(k==null)
    				return;

    			var aller_suppr_id = "allerButtonGroup" + parseInt(k);
    			var groupName = document.getElementById(aller_suppr_id).textContent.replace(" ","");
    			if(confirm("Es-tu sûr de vouloir supprimer le groupe " + groupName + " ?")){
    				var aller_suppr_id = "allerButtonGroup" + parseInt(k);
    				document.getElementById(aller_suppr_id).style.display = 'none';

    				var retour_suppr_id = "retourButtonGroup" + parseInt(k);
    				document.getElementById(retour_suppr_id).style.display = 'none';
    				alert("Groupe supprimé");
    			}
    		}

    		function retourHideAllMembers(){
    			var i;
    			for(i = 0; i<=10; i++){
    				try{
    				var group_id = "retourGroup" + parseInt(i) ; 
    				document.getElementById(group_id).style.display = 'none';
    			}
    			catch(err){
    			};

    			}
    		}
    		function retourShowGroupMembers(j){
    			retourClickedGroup = j;
    			retourHideAllMembers();
    			var group_id = "retourGroup" + parseInt(j);
    			//alert(group_id);
    			document.getElementById(group_id).style.display = 'block';
    		}
    	</script>
    </body>
</html>
