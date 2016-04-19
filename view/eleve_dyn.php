<!DOCTYPE html>
<html>
<head>
	<title>BUS Planner-Session élève</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container-fluid" style="text-align:center"> 
		<h1>BUS Planner-Session élève</h1>
	</div>

	<!-- Formulaire ALLER -->
	<div class="container-fluid" id="formulaire_aller">
		<div class="row">
			<div class="col-md-12" style="text-align:center">
				<h2>
					Voyage <strong> <?php echo $voyage; ?> aller</strong> de <?php echo $prenom_getted . " " . $nom_getted; ?>
				</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="col-md-3 col-md-offset-2"> 
					<div class="panel panel-success">
						<div class="panel-heading">
							Mes groupes
							<button type="button" class="close" data-toggle="modal" data-target="#myModal">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
							</button>
						</div>
						<div class = "panel-body" style="background-color: #f0f0f5">
							Choisis le groupe d'amis avec lesquels tu veux faire l'<strong>aller :</strong>
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

				<div class="col-md-2">
					<div class ="panel panel-success">
						<div class ="panel-heading">
							Participants du groupe
						</div>
						<div class = "panel-body" style="background-color: #f0f0f5">
							Les personnes avec qui tu seras pour le bus :
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

			<div class="col-md-2">
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
						<div class="checkbox">
							<label>
								<input type="checkbox"> Ligne
							</label>
						</div>
				
						<div class="checkbox">
							<label><input type="checkbox"> Bloc</label>
						</div>

						<div class="row">
							<div class="col-md-12">
								Placement dans le bus:
							</div>
						</div>
				
						<div class="checkbox">
							<label>
								<input type="checkbox"> A l'avant
							</label>
						</div>
			
						<div class="checkbox">
							<label><input type="checkbox"> Au milieu
							</label>
						</div>
			
						<div class="checkbox">
							<label><input type="checkbox"> A l'arrière
							</label>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row"> 
			<div class="col-md-1 col-md-offset-9"> 
				<button type="button" class="btn btn-success" onclick="javascript:goToRetour();">Suivant</button>
			</div>
		</div>
	</div>
	</div>
	<!-- Fin du formulaire ALLER -->

	<!-- Formulaire RETOUR -->
	<div class="container-fluid" id="formulaire_retour" style="display:none">
		<div class="row">
			<div class="col-md-12" style="text-align:center">
				<h2>
					Voyage <strong>retour</strong> de <?php echo $prenom_getted . " " . $nom_getted; ?>
				</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="col-md-3 col-md-offset-2"> 
					<div class="panel panel-info">
						<div class="panel-heading">
							Mes groupes:
							<button type="button" class="close" data-toggle="modal" data-target="#myModal">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
							</button>
						</div>
						<div class = "panel-body" style="background-color: #f0f0f5">
							Choisis le groupe d'amis avec lesquels tu veux faire le <strong>retour :</strong>
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

								<button type="button" class="btn btn-danger" onclick="javascript:supprimerGroupe(allerClickedGroup)">Supprimer</button>

							</div>
						</div>
					</div>
				</div>

				<div class="col-md-2">
					<div class ="panel panel-info">
						<div class ="panel-heading">
							Participants du groupe
						</div>
						<div class = "panel-body" style="background-color: #f0f0f5">
						Les personnes avec qui tu seras pour le bus :
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

			<div class="col-md-2">
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

		</div>

		<div class="row"> 
			<div class="col-md-1 col-md-offset-8">
				<button type="button" class="btn btn-warning" onclick="javascript:goBackToAller();">Retour</button>
 			</div>
			<div class="col-md-1">
				<button type="button" class="btn btn-primary" onclick="javascript:submitAllerEtRetour();">Soumettre</button>
			</div>
		</div>
	</div>
	</div>
	<!-- Fin du formulaire RETOUR -->



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times</span></button>
				<h4 class="modal-title" id="myModalLabel">Creer groupe:</h4>
			</div>
			<div class="modal-body">

				<div class="row">
					<div class="col-lg-12">
						<div class="input-group">
							<span class="input-group-addon">Nom du futur groupe:</span>
							<input type="text" class="form-control" aria-label="...">
						</div><!-- /input-group -->
					</div><!-- /.col-lg-6 -->
				</div>

			</br>

			<div class="row">

				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">Elèves:</div>
						<?php foreach($liste_eleves as $eleve){ ?>
						<div class="panel-body">
							<?php echo $eleve['PRENOM'] . " " . $eleve['NOM']; ?>
						</div>
						<?php } ?>
					</div>
				</div>

				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">Participants:</div>
						<div class="panel-body">Augustin MOREL</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Sauvegarder</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		var allerClickedGroup;
		function goToRetour(){
			document.getElementById('formulaire_aller').style.display = 'none';
			document.getElementById('formulaire_retour').style.display = 'block';
		}
		function goBackToAller(){
			document.getElementById('formulaire_retour').style.display = 'none';
			document.getElementById('formulaire_aller').style.display = 'block';
		}
		function submitAllerEtRetour(){
			alert("Merci pour votre submittage !");
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
			retourHideAllMembers();
			var group_id = "retourGroup" + parseInt(j);
			//alert(group_id);
			document.getElementById(group_id).style.display = 'block';
		}
	</script>
</body>
</html>