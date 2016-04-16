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

	<div class="row"> <div class="col-md-12"> <h1>BUS Planner-Session élève</h1></div></div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">Destination:</div>
					<?php foreach($voyages as $v){?>
					<div class="panel-body"><?php echo $v[0]; ?></div>
					<?php } ?>
				</div>
			</div>

			<div class="col-md-3"> 
				<div class="panel panel-default">
					<div class="panel-heading">Mes groupes:
						<button type="button" class="close" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
					</div>
					<?php foreach ($groupes_array as $groupe){?>
					<div class="panel-body"><?php echo $groupe; ?></div>
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

			<div class="col-md-6"> 
				<div class="panel panel-default">
					<div class="panel-heading">
						Infos sur le groupe:
						
					</div>
	    <?php //AFFICHER LES MEMBRES D'UN GROUPE    
	    for($i=0; $i<sizeof($noms_array) && $i<sizeof($prenoms_array); $i++){ ?>
	    <div class="panel-body"> <?php echo $prenoms_array[$i] . " ". $noms_array[$i];?></div>
	    <?php } ?>
	</div>
</div>
</div>

</div>
<div class="raw"> <div class="col-md-2 pull-right"> <button type="button" class="btn btn-primary">Soumettre</button> </div></div>










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

					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">Options:</div>
							<div class="panel-body">

								<div class="row">Répartition:</div>

								<div class="row">
									<div class="checkbox">
										<label>
											<input type="checkbox"> Ligne</label>
										</div>
										<div class="checkbox">
											<label><input type="checkbox"> Bloc</label>
										</div>
									</div>

									<div class="row">Placement dans le bus:</div>

									<div class="row">
										<div class="checkbox">
											<label>
												<input type="checkbox"> A l'avant</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox"> Au milieu</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox"> A l'arrière</label>
											</div>
										</div>

									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Sauvegarder</button>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>
