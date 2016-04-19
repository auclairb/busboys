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
					ALLER
				</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="col-md-3 col-md-offset-2"> 
					<div class="panel panel-success">
						<div class="panel-heading">
							Mes groupes:
							<button type="button" class="close" data-toggle="modal" data-target="#myModal">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
							</button>
						</div>
						<?php foreach ($groupes_array as $groupe){?>
						<div class="panel-body">
							<?php echo $groupe; ?>
						</div>
						<?php } ?>
						<div class="panel-footer">
							<div style = "text-align:right">
								<button type="button" class="btn btn-primary" >Modifier</button>
								&nbsp;

								<button type="button" class="btn btn-danger" >Supprimer</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-2">
					<div class ="panel panel-success">
						<div class ="panel-heading">
							Participants du groupe
						</div>
						<div class = "panel-body">
					    <?php //AFFICHER LES MEMBRES D'UN GROUPE    
					    for($i=0; $i<sizeof($noms_array) && $i<sizeof($prenoms_array); $i++){ 
					    	echo $prenoms_array[$i] . " ". $noms_array[$i]. "<br>";
					    } ?>
					</div>
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
					RETOUR
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
						<?php foreach ($groupes_array as $groupe){?>
						<div class="panel-body">
							<?php echo $groupe; ?>
						</div>
						<?php } ?>
						<div class="panel-footer">
							<div style = "text-align:right">
								<button type="button" class="btn btn-primary" >Modifier</button>
								&nbsp;

								<button type="button" class="btn btn-danger" >Supprimer</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-2">
					<div class ="panel panel-info">
						<div class ="panel-heading">
							Participants du groupe
						</div>
						<div class = "panel-body">
					    <?php //AFFICHER LES MEMBRES D'UN GROUPE    
					    for($i=0; $i<sizeof($noms_array) && $i<sizeof($prenoms_array); $i++){ 
					    	echo $prenoms_array[$i] . " ". $noms_array[$i]. "<br>";
					    } ?>
					</div>
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
		function goToRetour(){
			document.getElementById('formulaire_aller').style.display = 'none';
			document.getElementById('formulaire_retour').style.display = 'block';
		}
		function goBackToAller(){
			document.getElementById('formulaire_retour').style.display = 'none';
			document.getElementById('formulaire_aller').style.display = 'block';
		}
		function submitAllerEtRetour(){
			alert("Merci pour votre submittage !")
		}
	</script>
</body>
</html>
